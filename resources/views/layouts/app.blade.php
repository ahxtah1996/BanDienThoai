<!DOCTYPE html>
<html>
<head>
    <title>Phone Store</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phone Store">

    <link rel="stylesheet" href="/backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/backend/css/plugins.css">
    <link rel="stylesheet" href="/assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="/assets/vendor/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="/assets/vendor/flag/css/flag-icon.min.css">
    <link rel="icon" href="/storage/logo/logo-duc-anh.png">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="/themes/default/css/slick.css" type="text/css" rel="stylesheet" />
 
    <link href="/themes/default/css/reset.css" type="text/css" rel="stylesheet" />
    <link href="/themes/default/css/style.css" type="text/css" rel="stylesheet" />

    <link href="/themes/default/assets/css/custom.css" type="text/css" rel="stylesheet" />
    <link href="/themes/default/assets/css/cart.css" type="text/css" rel="stylesheet" />
</head>
<body>
    @include('commons.user-header')

    @include('commons.user-bar')

    @yield('content')

    <div class="contacthome">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4"><a href="https://goo.gl/maps/je3wK2ARYg42" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker"></i>7 Cửu Long, Phường 15, Quận 10, Tp. Hồ Chí Minh</a></div>
                <div class="col-xs-4 col-sm-4 col-md-4"><a href="tel:0833.234567"><i class="fa fa-phone"></i> Hotline: <span class="number">0833.234567</span></a></div>
                <div class="col-xs-4 col-sm-4 col-md-4"><a href="mailto:ducanhretail@gmail.com"><i class="fa fa-envelope"></i> ducanhretail@gmail.com</a></div>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top" title="Back to top" class="show"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
    </a>
    <a href="tel:0833.234567" title="" class="btn-call">
        <span><i class="fa fa-phone"></i></span>
    </a>

    @include('commons.user-footer')
    <script src="/assets/vendor/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap.min.js"></script>
    <script src="/assets/vendor/plugins.js"></script>
    <script src="/assets/vendor/toastr/toastr.min.js"></script>
    <script src="/assets/vendor/sweetalert2/sweetalert2.min.js"></script>
    <script src="/assets/vendor/ajaxform/jquery.form.min.js"></script>
    <script src="/assets/js/language/vi.js"  ></script>
    <script src="/assets/js/main.js"></script>    <script src="/themes/default/js/wow.js" defer></script>
    <script src="/themes/default/js/slick.min.js" defer></script>

    <script src="/themes/default/js/script.js" defer></script>

    <script src="/themes/default/assets/js/script2.js" defer></script>
    <script src="/assets/js/cart.js"></script> 

    <script>
        // $(document).ready(function() {
            // $('li.sub a').each(function() {
                // if($(this).attr('href') === CNV.categoryActive) {
                    // $(this).parent().addClass('active');
                // }
            // });
        // }); 
        if ($('#back-to-top').length) {
            var scrollTrigger = 50, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    </script>
</body>
</html>
