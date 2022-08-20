<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>SAP Material Management Reports</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    
    <body class="main">
        <div id="app"></div>

        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
    </body>
</html>