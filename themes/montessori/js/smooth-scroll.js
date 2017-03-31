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


$(document).ready(function(){
	
	$('ul.nav-tabs li a').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.nav-tabs li a').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

});




})(jQuery);


 




 


