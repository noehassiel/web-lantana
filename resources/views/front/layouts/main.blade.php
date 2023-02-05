<!DOCTYPE html>
<html data-wf-page="638e73ff2d6baaa2efe74afb" data-wf-site="638e73fe2d6baa3a64e74af6">

<head>
    <meta charset="utf-8">
    <title>Lantana</title>
    <meta content="Home explore" property="og:title">
    <meta content="Home explore" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">

    @stack('seo')

    <!-- FAVICON -->
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
    <!-- CSS -->

    <link href="{{ asset('front/css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/lantana.css') }}" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: [
                    "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
                ]
            }
        });
    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>

    <style>
        /*width*/
        #scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 0px;
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (max-width: 600px) {
            #scrollbar::-webkit-scrollbar {
                width: 0px;
                height: 0px;
            }
        }

        /*track*/
        #scollbar::-webkit-scrollbar-track {
            background: rgb(246, 246, 248);
            border-radius: 25px;
        }

        #scrollbar::-webkit-scrollbar-track:pressed {
            background: rgb(225, 225, 225);
        }

        /*thumb*/
        #scrollbar::-webkit-scrollbar-thumb {
            background: rgb(225, 225, 225);
            border-radius: 25px;
        }

        #scrollbar::-webkit-scrollbar-thumb:hover {
            background: #cbd0dd;
        }
    </style>

    @stack('styles')
</head>

<body class="body">

    @include('front.layouts.header')


    @include('front.layouts.partials._messages')
    @include('front.layouts.partials._modal_messages')
    @yield('content')


    @include('front.layouts.footer')

    @include('front.layouts.partials._cookies_notice')
    @include('front.layouts.partials._modal_popup')

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=638e73fe2d6baa3a64e74af6"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="{{ asset('front/js/webflow.js') }}" type="text/javascript"></script>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>

    <!-- Icon Pack -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    @stack('scripts')
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <script>
        (function() {
            var deadline = '2021-09-28 00:00';

            function pad(num, size) {
                var s = "0" + num;
                return s.substr(s.length - size);
            }

            function getTimeRemaining(endtime) {
                var t = Date.parse(endtime) - Date.parse(new Date()),
                    seconds = Math.floor((t / 1000) % 60),
                    minutes = Math.floor((t / 1000 / 60) % 60),
                    hours = Math.floor((t / (1000 * 60 * 60)) % 24),
                    days = Math.floor(t / (1000 * 60 * 60 * 24));
                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            }

            function clock(id, endtime) {
                var days = document.getElementById(id + '-days')
                hours = document.getElementById(id + '-hours'),
                    minutes = document.getElementById(id + '-minutes'),
                    seconds = document.getElementById(id + '-seconds');
                var timeinterval = setInterval(function() {
                    var t = getTimeRemaining(endtime);
                    if (t.total <= 0) {
                        clearInterval(timeinterval);
                    } else {
                        days.innerHTML = pad(t.days, 2);
                        hours.innerHTML = pad(t.hours, 2);
                        minutes.innerHTML = pad(t.minutes, 2);
                        seconds.innerHTML = pad(t.seconds, 2);
                    }
                }, 1000);
            }
            clock('js-clock', deadline);
        })();
    </script>
</body>

</html>
