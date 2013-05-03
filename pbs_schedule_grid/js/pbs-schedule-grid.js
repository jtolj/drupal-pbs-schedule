jQuery(document).ready(function($) {
  if (location && location.search) {
    var query = $.deparam.querystring(location.search);
  }
  
  $('#tv-schedule-scroll-container')
  .bind('jsp-arrow-change',function(event, isAtTop, isAtBottom, isAtLeft, isAtRight){
    $('#controls a').removeClass('start end');
    if (isAtLeft) {$('#controls a.prev').addClass('start');}
    else if (isAtRight) {$('#controls a.next').addClass('end');}
  })
  .jScrollPane({animateScroll:true});
  
  var scroller = $('#tv-schedule-scroll-container').data('jsp');
  
  /*Event Handlers*/
  $('#controls a').click(function(e){
    
    e.preventDefault && e.preventDefault();
    
    if ($('.jspPane, .jspDrag').is(':animated')) return;
    
    //If we are at beginning or end of schedule go to prev/next day
    if ($(this).hasClass('next end')) {
      changeDay(1);
      return;
    }
    else if ($(this).hasClass('prev start')) {
      changeDay(-1);
      return;
    }
    
    var containerWidth = jQuery('.jspPane').outerWidth(true);
    var elementWidth = $('#start-time-0000').outerWidth(true);
    var offset = elementWidth * Math.round(containerWidth / elementWidth);
    var jiggle = $('.jspPane').position().left % 150;//Detect any manual scrolling and add additional offset to line things back up.
    if ($(this).hasClass('prev')) {
      offset -= jiggle;
      offset *= -1;
    }
    else {
      offset += jiggle;
    }
    scroller.scrollByX(offset);
  });
  
  $('#date-time-submit').click(function(e) {
    e.preventDefault && e.preventDefault();
    var newdate = $(this).parent().find('select option:selected').val();
    var date = $('#day-selector').val();
    var time = $('#time-selector').val();
    document.location.href = '?date=' + date + '&time=' + time;
  });
  
  /*Re-initialize jScrollPane on responsive changes - requires mediaqueries.js*/
  $('body').bind('responsivelayout', function(e, d) {
    scroller.reinitialise();
  });
  
  /*Helper Functions*/
  function changeDay(increment) {
    var date;
    var hour = (increment === 1) ? '00' : '23';
    
    if (query && query.date && typeof query.date !== 'undefined') {
      var tomorrow = new Date(query.date.substring(4,6) + '-' + query.date.substring(6,8) + '-' + query.date.substring(0,4));
    }
    else {
      var tomorrow = new Date();
    }
    
    tomorrow.setDate(tomorrow.getDate() + increment);
    var m = tomorrow.getMonth() + 1;
    var d = tomorrow.getDate();
    m = m > 9 ? m : "0"+m;
    d = d > 9 ? d : "0"+d;
    date = tomorrow.getFullYear().toString() + m.toString() + d.toString();
    
    document.location.href = '?date=' + date + '&time=' + hour; 
  }
  
  var hours;
  if (query && query.time && typeof query.time !== 'undefined') {
    hours = query.time;
  }
  else {
    hours = new Date().getHours();
    if (hours < 10) hours = '0' + hours;
  }
  if (hours == '00') $('#controls .prev').addClass('start');
  var offset = jQuery('#start-time-' + hours + '00').position().left + 5;
  scroller.scrollToX(offset, false);
  
});