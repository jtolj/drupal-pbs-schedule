jQuery(document).ready(function($) {
    var $listingsContainer = $('ul.listings-vertical');
    var firstTab = $('#channel-selector a').first().attr('id');
    $listingsContainer.children('span').not('.' + firstTab).hide();
    
    
    $('#channel-selector a').click(function(e){
      e.preventDefault();
      var myClass = $(this).attr('id');
      $listingsContainer.children('span').not('.' + myClass).hide();
      $listingsContainer.children('span.' + myClass).show();
    });
    
});