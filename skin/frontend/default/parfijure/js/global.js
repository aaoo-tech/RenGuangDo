(function($) {
  $(function() {
    // navigation
    /*$('.top_links > .links > li').hover(
      function() {
        $(this).find('.level2').show();
      },

      function() {
        $(this).find('.level2').hide();
      }
    );*/
    // banner click
    $('.fullwidthbanner ul li img').on('click', function() {
      window.location = $(this).data('href');
    });
  });
})(jQuery);
