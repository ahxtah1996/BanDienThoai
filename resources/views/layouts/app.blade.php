<!DOCTYPE html>
<html>
<head>
    <title>Phone Store</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phone Store">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/backend/css/plugins.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/css/flag-icon.min.css">
    <link rel="icon" href="/img/logo/logo-duc-anh.png">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <div class="col-xs-6 col-sm-6 col-md-6"><a href="https://goo.gl/maps/5tPufVy4c2epQarK9" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker"></i>1A Tràng Tiền, Phường Phan Chu Trinh, Quận Hoàn Kiếm, Tp. Hà Nội</a></div>
                <div class="col-xs-3 col-sm-3 col-md-3"><a href="tel:0917973355"><i class="fa fa-phone"></i> Hotline: <span class="number">091.797.3355</span></a></div>
                <div class="col-xs-3 col-sm-3 col-md-3"><a href="tel:0937973355"><i class="fa fa-phone"></i> Hotline: <span class="number">093.797.3355</span></a></div>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top" title="Back to top" class="show"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
    </a>
    <a href="tel:0833.234567" title="" class="btn-call">
        <span><i class="fa fa-phone"></i></span>
    </a>

    @include('commons.user-footer')
    <script src="{{ asset('assets/js/const.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/vendor/plugins.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script src="{{ asset('assets/js/language/vi.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('themes/default/js/wow.js') }}" defer></script>
    <script src="{{ asset('themes/default/js/slick.min.js') }}" defer></script>

    <script src="{{ asset('themes/default/js/script.js') }}" defer></script>

    <script src="{{ asset('themes/default/assets/js/script2.js') }}" defer></script>
    <script src="{{ asset('assets/js/cart.js') }}"></script>

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
