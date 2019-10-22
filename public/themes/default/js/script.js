
var script = function(){

    var win = $(window);
    var html = $('html');
    var body = $('body');

    var mMenu = function(){
        var menu = $('.m-nav');
        var ct = menu.find('.nav-ct');
        var open = $('.nav-open');
        var close = $('.nav-close');
        var cate = $('.nav-left');
        var m_nav = $('.main-nav');
        var navsub = m_nav.children('ul');

        ct.append($('.hotline').clone());
        // ct.append($('.main-bar .nav-sections').clone());
        ct.append($('.main-bar .main-nav').clone());
        // ct.append($('.main-nav').clone());

        open.click(function(e) {
            e.preventDefault();
            if(win.width()<1025){
                menu.addClass('act');
            }           
        });
        close.click(function(e) {
            e.preventDefault();
            if(win.width()<1025){
                menu.removeClass('act');
            }
        });


        var sidebar = $('.sb-nav');
        var ct2 = sidebar.find('.nav-ct');
        var open2 = $('.sb-open');
        var close2 = $('.sb-close');
        // ct2.append($('.main-nav').clone());
        open2.click(function(e) {
            e.preventDefault();
            if(win.width()<1025){
                sidebar.addClass('act');
            }           
        });
        close2.click(function(e) {
            e.preventDefault();
            if(win.width()<1025){
                sidebar.removeClass('act');
            }
        });

        win.click(function(e) {
            if(menu.has(e.target).length == 0 && !menu.is(e.target) && open.has(e.target).length == 0 && !open.is(e.target)){
                menu.removeClass('act');
            }
            if(sidebar.has(e.target).length == 0 && !sidebar.is(e.target) && open2.has(e.target).length == 0 && !open2.is(e.target)){
                sidebar.removeClass('act');
            }
        });


        // nav = menu.find('.main-nav');
        m_nav.find("ul li").each(function() {
            if($(this).find(".submenu").length > 0){
                $(this).prepend('<i class="nav-drop"></i>');
            }
        });
        m_nav_left = $('.nav-sections'); 
        m_nav_left.find("ul li").each(function() {
            if($(this).find("ul>li").length > 0){
                $(this).prepend('<i class="nav-drop"></i>');
            }
        });
        cate.children('.menu-title').click(function(e) {
            e.preventDefault();
            if(win.width() < 1199){
                m_nav.find('#myNavbar').removeClass('in');
                $(".menu-btn").attr("aria-expanded","false");
            }
        });
        m_nav.children('.menu-btn').click(function(e) {
            e.preventDefault();
            if(win.width() < 1199){
                cate.find('#ct').removeClass('in');
            }
        });
         navsub.children('ul li').hover(function() {
            if(win.width() > 991 && $(this).find('.submenu').length>0){
                $('.main-nav').addClass('hv');
            }
        }, function() {
            $('.main-nav').removeClass('hv');
        });
        
        $(".main-nav .nav-drop").click(function(){
            var ul = $(this).nextAll(".submenu");
            if(ul.is(":hidden") === true){
                ul.parent('li').parent().children().children('.submenu').slideUp(200);
                ul.parent('li').parent().children().children('.nav-drop').removeClass("act");
                $(this).addClass("act");
                ul.slideDown(200);
            }
            else{
                ul.slideUp(200);
                $(this).removeClass("act");
            }
        });
        $(".nav-sections .nav-drop").click(function(){
            var ul = $(this).nextAll("ul");
            if(ul.is(":hidden") === true){
                ul.parent('li').parent().children().children('ul').slideUp(200);
                ul.parent('li').parent().children().children('.nav-drop').removeClass("act");
                $(this).addClass("act");
                ul.slideDown(200);
            }
            else{
                ul.slideUp(200);
                $(this).removeClass("act");
            }
        });
    }

    var uiDrop = function(){
        $('.drop').each(function() {
            var this_ = $(this);
            var label = this_.children('a');
            var ct = this_.children('ul');
            var item = ct.children('li').children('a');

            this_.click(function() {
                ct.slideToggle(150);
            });

            item.click(function(e) {
                e.preventDefault();
                label.html($(this).html());
            });

            win.click(function(e) {
                if(this_.has(e.target).length == 0 && !this_.is(e.target)){
                    this_.children('ul').slideUp(150);
                }
            })
        });  
    }

    var backToTop = function(){
        var back_top = $('.back-to-top');

        if(win.scrollTop() > 600){ back_top.fadeIn(); }

        back_top.click(function(){
            $("html, body").animate({ scrollTop: 0 }, 800 );
            return false;
        });

        win.scroll(function() {    
            if(win.scrollTop() > 600) back_top.fadeIn(); 
            else back_top.fadeOut();
        });
    }

    var uiClickShow = function(){
        var ani = 200;
        $('[data-show]').each(function() {
            var this_ = $(this);
            var ct = $(this_.attr('data-show'));

            this_.click(function(e) {
                e.preventDefault();
                ct.slideToggle(ani);
            });
        });

        win.click(function(e) {
            // if($(this).width() > 991){
                $('[data-show]').each(function() {
                    var this_ = $(this);
                    var ct = $(this_.attr('data-show'));
                    if(ct.has(e.target).length == 0 && !ct.is(e.target) && this_.has(e.target).length == 0 && !this_.is(e.target)){
                        ct.slideUp(ani);
                    }
                })
            // }
        });
    }

    function doAnimations( elems ) {
        var animEndEv = 'webkitAnimationEnd animationend';
        elems.each(function () {
            var $this = $(this),
            $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    var uiSlider = function(){
        var slider = $('#slider');
        var len = slider.find('.carousel-inner .item').length;
        if(len > 1){
            slider.append('<ol class="carousel-indicators"></ol>');
            var dots = slider.find('.carousel-indicators');
            var active = slider.find('.carousel-inner .item.active').index();
            var clas = "";
            for(i = 0; i < len; i ++){
                if(i == active) clas ="active";
                else clas = '';
                dots.append('<li data-target="#slider" data-slide-to="'+i+'" class="'+clas+'"></li>');
            }
        }

        aniFirst = slider.find('.item:first').find("[data-animation ^= 'animated']");     
        slider.carousel({
            interval: 10000,
            pause: 'hover',
        });   
        doAnimations(aniFirst);
        slider.on('slide.bs.carousel', function (e) {
            var aniElm = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations(aniElm);
        });
    }
    var uiSlick = function(){
        $('.slider-cas').slick({
            nextArrow: '<img src="images/next.png" class="next" alt="Next">',
            prevArrow: '<img src="images/prev.png" class="prev" alt="Prev">',
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true,
        })
        doAnimations($(".slider-cas .slick-current [data-animation ^= 'animated']"));
        $('.slider-cas').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            if(currentSlide!=nextSlide){
                var aniElm = $(this).find('.slick-slide').find("[data-animation ^= 'animated']");
                doAnimations(aniElm);
            }
        });
        
        $('.pro-cas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            nextArrow: '<i class="fa fa-angle-right smooth next"></i>',
            prevArrow: '<i class="fa fa-angle-left smooth prev"></i>',
            swipeToSlide: true,
            autoplay: true,
            autoplaySpeed: 4000,
            responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 2,
                }
            },
            // {
            //     breakpoint: 480,
            //     settings: {
            //         slidesToShow: 1,
            //     }
            // }
            ],

        })
    }

    var uiScroll = function(){
        var h = $('header').innerHeight();
        var h2 = $('.main-bar').innerHeight();

        if(win.width()>1025){
            if(win.scrollTop()> 200 ){
                $('.main-bar').addClass('fixed');
                body.css('margin-top', h2);
            }
        }
        else{
            if(win.scrollTop()> h ){
                $('.main-bar').addClass('fixed');
                body.css('margin-top', h2);
            }
        }
        win.scroll(function(e) {
            if(win.width()>1025){
                if(win.scrollTop()> 200){
                    $('.main-bar').addClass('fixed');
                    body.css('margin-top', h2);
                }
                else{
                    $('.main-bar').removeClass('fixed');
                    body.css('margin-top', '');
                }
            }
            else{
                if(win.scrollTop()> h){
                    $('.main-bar').addClass('fixed');
                    body.css('margin-top', h2);
                }
                else{
                    $('.main-bar').removeClass('fixed');
                    body.css('margin-top', '');
                }
            }
        });
    }
    var setheightmMenu = function(){
        var hmenu = $('.main-bar').innerHeight();
        var winHeight = win.innerHeight();
        var m_nav = $('.main-nav');
        if(win.width()<1025){
             $('#ct').css('max-height', winHeight - hmenu);
             $('#myNavbar').css('max-height', winHeight - hmenu);
        }
        else{
              $('#ct').css('max-height', '');             
        }

       function resize()
        {
            var heights = window.innerHeight;
            var hmenu = $('.main-bar').innerHeight();
            document.getElementById("ct").style.maxHeight = (heights - hmenu)  + "px";
            document.getElementById("myNavbar").style.maxHeight = (heights - hmenu)  + "px";
            
        }
        resize();
        window.onresize = function() {
            resize();
        };   
    }

    return {

        uiInit: function($fun){
            switch ($fun) {
                case 'mMenu':
                mMenu();
                break;
                case 'setheightmMenu':
                setheightmMenu();
                break;
                case 'backToTop':
                backToTop();
                break;
                case 'uiSlider':
                uiSlider();
                break;
                case 'uiSlick':
                uiSlick();
                break;
                case 'uiClickShow':
                uiClickShow();
                break;
                case 'uiScroll':
                uiScroll();
                break;
                case 'uiDrop':
                uiDrop();
                break;

                default:
                mMenu();
                setheightmMenu();
                backToTop();
                uiSlider();
                uiSlick();
                uiClickShow();
                uiScroll();
                uiDrop();
            }
        }
    }

}();


jQuery(function($) {
    var wow = new WOW({offset:50,mobile:false}); wow.init();
    script.uiInit();

});


// $(window).bind("load", function() {
//     $('body').append('<div id="fb-root"></div>');
//     $.ajax({
//         global: false,
//         url: "js/social.js",
//         dataType: "script"
//     });
//     $.ajax({
//         global: false,
//         url: "https://apis.google.com/js/platform.js",
//         dataType: "script"
//     });
//     window.___gcfg = {
//         lang: 'vi',
//         parsetags: 'onload'
//     };

//     var arr = $('.yt-iframe');
//     var arrLe = arr.length;
//     for (var i = 0; i < arrLe; i++) {
//         var item = $(arr[i]);
//         item.append('<iframe src="'+item.attr('data-src')+'?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');
//     }
// });
    $(".action.search").click(function(){
        $(".action-control-search").toggleClass("active");
    });