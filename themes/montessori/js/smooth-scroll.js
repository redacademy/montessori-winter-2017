(function($) {
  $('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
      location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top-190
        }, 500);
        return false;
      }
    }
  });
})(jQuery);


    $(document).ready(function() {
    $('.nav-tabs > li > button').click(function(event) {
      event.preventDefault(); //stop browser to take action for clicked anchor
            //get displaying tab content jQuery selector
      var active_tab_selector = $('.nav-tabs > li.active > button').attr('href');
            //find actived navigation and remove 'active' css
      var actived_nav = $('.nav-tabs > li.active');
      actived_nav.removeClass('active');
            //add 'active' css into clicked navigation
      $(this).parents('li').addClass('active');
            //hide displaying tab content
      $(active_tab_selector).removeClass('active');
    $(active_tab_selector).addClass('hide');
            //show target tab content
    var target_tab_selector = $(this).attr('href');
    $(target_tab_selector).removeClass('hide');
    $(target_tab_selector).addClass('active');
    });
    });