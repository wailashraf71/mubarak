<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @yield('meta')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Fonts -->
{{--    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>--}}

<!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/admin/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/admin/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
    <style>

        .drop {
            background-color: #fff;
        }

        .drop:after {
            border: dashed 0.3rem rgba(0, 0, 0, 0.0875);
        }

        .drop .drop-label {
            color: rgba(0, 0, 0, 0.25);
        }

        .drop:hover:after {
            border-color: rgba(0, 0, 0, 0.125);
        }

        .drop:hover .drop-label {
            color: rgba(0, 0, 0, 0.125);
        }

        #image-preview, .image-preview {
            background-color: #000;
        }

        .drop {
            min-width: 200px;
            width: 350px;
            min-height: 12rem;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            margin: 0;
        }

        .drop:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
        }

        .drop.file-focus {
            border: 0;
        }

        .drop:hover {
            cursor: pointer;
        }

        .drop .drop-label {
            font-size: 1.0rem;
            font-weight: 500;
            line-height: 4rem;
            width: 32rem;
            text-align: center;
            position: absolute;
            top: 50%;
            margin-top: -1.5rem;
            left: 75%;
            margin-left: -16rem;
        }

        .form-control::placeholder {
            opacity: 0.6 !important;
            font-weight: 400 !important;
        }

        .drop input[type=file] {
            line-height: 50rem;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            z-index: 10;
            cursor: pointer;
        }

        #image-preview, .image-preview {
            width: 100%;
            display: block;
            position: relative;
            z-index: 1;
        }

        #image-preview:empty, .image-preview:empty {
            display: none;
        }

        #image-preview img, .image-preview img {
            display: block;
            margin: 0 auto;
            width: 100%
        }

        #image-preview:after, .image-preview:after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            border: solid 0.1rem rgba(0, 0, 0, 0.08);
            background: bottom center repeat-x url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABfCAMAAAAeT108AAABEVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABoX7lMAAAAW3RSTlMBCHwGAwQFCgIMCw4PERITFBYXGRoNHR4gISIlJicpKiwuLzEzNDY3OTs8G0BBQ0VGSEpLTU9QUVRVVlhZW11eX2FiZGVmaGlrbG1ucHFyc3R1dnd4eXp7Pn1+eLXrxAAAADRJREFUCFtjYAACDmYGJkYmRiDJAMJMbEzMTP+ZeJgZmTChOFZR7FAPYi71IQMT0JXhTIwAN8YCxDyw89IAAAAASUVORK5CYII=);
        }
    </style>

    @yield('style')
</head>
<body id="app-layout">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
    href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div id="app">
    @yield('spa')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div id="format"></div>
</div>
<!-- JavaScripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- bootstap bundle js -->
<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{asset('assets/admin/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/admin/libs/js/main-js.js')}}"></script>
<!-- chart chartist js -->
<script src="{{asset('assets/admin/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
<!-- sparkline js -->
<script src="{{asset('assets/admin/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.js" integrity="sha512-KgeSi6qqjyihUcmxFn9Cwf8dehAB8FFZyl+2ijFEPyWu4ZM8ZOQ80c2so59rIdkkgsVsuTnlffjfgkiwDThewQ==" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>
