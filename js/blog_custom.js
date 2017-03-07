    //SIMPLE SLIDE SHOW
    $(function() {
        $('.simpleSlideShow').SimpleSlideShow({
            'height': 250, // ステージの高さ。デフォルトでは1枚目の画像の高さ。
            'width': 350, // ステージの横幅。デフォルトでは1枚目の画像の横幅。
            'duration': 1000, // アニメーションにかかる時間。
            'interval': 3000 // 次のアニメーションまでのインターバル。
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
    //JRUMBLE
    $(document).ready(function() {
        $('.rumble').jrumble({ //任意のクラス
            x: 1,
            y: 1,
            rotation: 1,
            speed: 10
        });
        $('.rumble').hover(function() {
            $(this).trigger('startRumble');
        }, function() {
            $(this).trigger('stopRumble');
        });
    });
    //ROTATE
    var angle = 0;
    var angle2 = 0;
    var angle3 = 0;
    var angle4 = 0;
    var angle5 = 0;
    var angle6 = 0;
    var angle7 = 0;
    var angle8 = 0;
    setInterval(function() {
        angle += 1;
        angle2 -= 0.2;
        angle3 -= 2;
        angle4 += 1;
        angle5 += 4;
        angle6 -= 1;
        angle7 += 5;
        angle8 += 0.5;
        $("#pentagon_orange").rotate(angle);
        $("#pentagon_purple").rotate(angle2);
        $("#trapezoid_red").rotate(angle3);
        $("#trapezoid_blue").rotate(angle4);
        $("#star_brown").rotate(angle5);
        $("#star_green").rotate(angle6);
        $("#diamond").rotate(angle7);
        $("#rotatetext").rotate(angle8);
    }, 20);
    //OWL
    $(function() {
        $(document).ready(function() {
            $("#owl").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                pagenation: true,
                singleItem: true,
                autoPlay: true

                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : true
            });
        });
    })