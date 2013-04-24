(function ($) {

var imce_filefield = window.imce_filefield = {};
imce_filefield.fileList = [];
imce_filefield.parsing = false;

/**
 * Drupal behavior that process file fields.
 */
Drupal.behaviors.imce_filefield = {attach: function(context, settings) {
  var set = settings.imce_filefield;
  if (!set || !set.fields) return;
  $.each(set.fields, function(fieldID, conf) {
    // Check file input.
    var $file = $('#' + fieldID + '-upload', context);
    if (!$file.size() || $file.is('.imce-filefield-processed')) return;
    // Check the invisible imce submit button.
    var $button = $('#' + fieldID + '-imce-filefield-submit', context);
    if (!$button.size()) return;
    // Widget wrapper
    var $wrapper = $(document.createElement('div')).addClass('imce-filefield-wrapper');
    // IMCE opener link.
    var $opener = $(document.createElement('a')).addClass('imce-filefield-opener').attr({href: '#'});
    $opener.text(imce_filefield.openerText()).click(function() {
      window.open(set.url + '/' + conf.path + (set.url.indexOf('?') < 0 ? '?' : '&') + 'app=imce_filefield|sendto@imce_filefield.sendto@1@null&fieldID=' + fieldID, '', 'width=760,height=560,resizable=1');      
      return false;
    });
    // Add elements to document.
    $wrapper.insertBefore($file.addClass('imce-filefield-processed').parent()).append($opener).append($button);

    // Hide default upload field.
    $file.hide();
    $('#' + fieldID + '-upload-button').hide();

    // After we submit a file our form will get refreshed and this function will be called.
    // We process the next file in our queue if that queue is not empty.
    if (imce_filefield.fileList.length) {
      var file = imce_filefield.fileList.shift();
      imce_filefield.handleFile(file.file, file.win, fieldID);
    }
  });
}};

/**
 * Sendto callback for IMCE.
 */
imce_filefield.sendto = function(files, win) {
  console.log("Files: ", files);
  
  $.each(files, function (index) {
    imce_filefield.fileList.push({file: files[index], win: win});
  });

  console.log("sendTo: ", imce_filefield.fileList.length, '\n', imce_filefield.fileList);

  // Only start parsing if we're not doing so already.
  if (!imce_filefield.parsing) {
    imce_filefield.parsing = true;
    var file = imce_filefield.fileList.shift();
    imce_filefield.handleFile(file.file, win, win.location.search.match(/&fieldID=([^&#]+)/)[1]);
  }
};

imce_filefield.handleFile = function(file, win, fieldID) {
  var exts, imce = win.imce;

  console.log('File ', file);

  // Validate extension
  var F = Drupal.settings.file;
  if (F && F.elements && (exts = F.elements['#' + fieldID + '-upload'])) {
    if ((',' + exts + ',').indexOf(',' + file.name.substr(file.name.lastIndexOf('.') + 1).toLowerCase() + ',') < 0) {
      return imce.setMessage(Drupal.t('Only files with the following extensions are allowed: %files-allowed.', {'%files-allowed': exts}), 'error');
    }
  }
  // Newly uploaded files have file id.
  if (file.id) {
    imce_filefield.submit(fieldID, file.id);
    return (imce_filefield.fileList.length ? '' : win.close());
  }
  // Get file id dynamically.
  imce.fopLoading('sendto', true);
  $.ajax({
    url: imce.ajaxURL('imce_filefield'),
    data: {filename: file.url.substr(file.url.lastIndexOf('/') + 1), token: Drupal.settings.imce_filefield.token},
    dataType: 'json',
    success: function(response) {
      if (response.messages) {
        imce.resMsgs(response.messages);
      }
      if (response.data && response.data.fid) {
        imce_filefield.submit(fieldID, response.data.fid);
      }
    },
    complete: function () {
      if (!imce_filefield.fileList.length) {
        imce_filefield.parsing = false;
        imce.fopLoading('sendto', false);
        win.close();
      }
    }
  });
};

/**
 * Submits a field widget with a file id.
 */
imce_filefield.submit = function(fieldID, fid) {
  $('#' + fieldID + '-imce-filefield-fid').val(fid);
  $('#' + fieldID + '-imce-filefield-submit').mousedown();
};

/**
 * Returns text for the opener link.
 */
imce_filefield.openerText = function() {
  return Drupal.t('Open File Browser');
};

})(jQuery);