(function($){
    $(document).ready(function(){
        if (Drupal.settings.admini_drupal) {
            $("#toolbar").css({
                display: 'none',
                height: '0px'
            });
            $("body").css({
                'padding-top': '0'
            });
        }

        if (Drupal.settings.admini_main) {
            $("#top-wrapper").css({
                display: 'none',
                height: '0px'
            });
        }
    });
})(jQuery);