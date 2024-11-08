<head>
    <style>
        @charset "UTF-8";
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }
        ng\:form {
            display: block;
        }
        .ng-animate-shim {
            visibility: hidden;
        }
        .ng-anchor {
            position: absolute;
        }
    </style>
    <meta charset="utf-8" />
    <title>InsureMyCar.org</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->
        <link href="{{ asset('_vehicle/css/family.css') }}" rel="stylesheet" />
        <link href="{{ asset('_vehicle/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('_vehicle/css/main.css') }}" rel="stylesheet" />
        <link href="{{ asset('_vehicle/css/min.css') }}" rel="stylesheet" />
        <link href="{{ asset('_vehicle/css/style1.css') }}" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('_vehicle/js/script.js') }}"></script>
</head>
<body ng-app="wisdomFormFlows" data-ng-strict-di="" class="ng-scope">
    <div class="phone-bar ng-hide" data-ng-show="phoneNumber" data-phone-bar="">
        <div class="phone-bar-wrap">
            <p>Speak to an agent now with no obligation!</p>
            <p>
                <i class="fa fa-phone"></i> <a data-ng-href="tel:" href="tel:"><span class="pnum ng-binding"></span></a>
            </p>
        </div>
    </div>
    <div class="large-bg" data-dynamic-bg="" style="background-color: rgb(255, 255, 255); background-image: none;"></div>
    <div class="body-bg" data-dynamic-messaging="">
        @include('vehicle.partials.header')
        <div class="container">
            @yield('content')
        </div>
        @include('vehicle.partials.footer')

    </div>
</body>
