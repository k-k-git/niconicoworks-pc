    //Mosonry
    $(function() {
        $('#container').masonry({
            itemSelector: '.box',
            isFitWidth: true,
        });
    });
    //スライダー
    $(function() {
        $('#slider').slider({
            showControls: false,
            autoplay: true,
            showProgress: true,
            hoverPause: true,
            wait: 5000,
            fade: 500,
            direction: "left"
        });
    });
    //スクロールバー
    $(function() {
        $(window).load(function() {
            $(".newstext").mCustomScrollbar();
        });
    });