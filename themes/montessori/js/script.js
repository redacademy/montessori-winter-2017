(function($){
    $(".menu-toggle").on("click", function() {
        $(".main-navigation ul").toggleClass("active");
        console.log(this)
    })

})(jQuery);