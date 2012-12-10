(function ($) {
//This is just so that we can add an id to the modal container and theme it.
Drupal.theme.prototype.pbs_schedule_modal = function () {
   var html = ''
    html += '  <div id="ctools-modal">'
    html += '    <div id="pbs-schedule-program-detail" class="ctools-modal-content">' // panels-modal-content
    html += '      <div class="modal-header">';
    html += '        <a class="close" href="#">';
    html +=            Drupal.CTools.Modal.currentSettings.closeText + Drupal.CTools.Modal.currentSettings.closeImage;
    html += '        </a>';
    html += '        <span id="modal-title" class="modal-title">&nbsp;</span>';
    html += '      </div>';
    html += '      <div id="modal-content" class="modal-content">';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    return html;
}
})(jQuery);