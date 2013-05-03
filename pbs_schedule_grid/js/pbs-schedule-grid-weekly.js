jQuery(document).ready(function($) {
    var $listingsContainer = $('ul.listings-vertical');
    $listingsContainer.children('span').not('.wcve-hdtv').hide();
    
    
    $('#channel-selector a').click(function(e){
      e.preventDefault();
      var myClass = $(this).attr('id');
      $listingsContainer.children('span').not('.' + myClass).hide();
      $listingsContainer.children('span.' + myClass).show();
    });
    
});