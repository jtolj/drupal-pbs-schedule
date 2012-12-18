jQuery(document).ready(function($) {
  
  $('#tv-schedule-scroll-container').jScrollPane({animateScroll:true});
  var scroller = $('#tv-schedule-scroll-container').data('jsp');
  
  $('#controls a').click(function(e){
    e.preventDefault && e.preventDefault();
    if ($('.jspPane, .jspDrag').is(':animated')) return;
    var offset = $('#start-time-0000').outerWidth(true) * 5;/*Todo - change 5 to container width / element width + padding*/
    var jiggle = $('.jspPane').position().left % 150;//Detect any manual scrolling and add additional offset to line things back up.
    if ($(this).hasClass('prev')) {
      offset += jiggle * -1;
      offset *= -1;
    }
    else {
      offset += jiggle;
    }
    scroller.scrollByX(offset);
  });
  
  $('#day-selector input').click(function(e) {
    var newdate = $(this).parent().find('select option:selected').val();
    document.location.href = '?date=' + newdate;
  });
  
  var hours = new Date().getHours();
  if (hours < 10) hours = '0' + hours;
  var offset = jQuery('#start-time-' + hours + '00').position().left+5;
  scroller.scrollToX(offset, false);
  
});