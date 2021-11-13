<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="theme-color" content="#317EFB"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ mix('assets/css/all.css') }}" as="style">
    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
</head>
<body class="is-theme-core">
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Hero (Parallax) and nav -->
<div class="hero is-app-grey">

@include('includes.navbar')

<!-- Hero image -->
    <div id="main-hero" class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3 has-text-centered is-subheader-caption">
                    <h1 class="title is-2">
                        BLOG
                    </h1>
                    <h2 class="subtitle">DevThugs provide a collection of tutorials about PHP, Laravel Framework, Codeigniter Framework, Mysql Database, Bootstrap Front-end Framework, Jquery, Node JS, Ajax Example, APIs, CURL Example, Composer Packages Example, AngularJS etc. You will find the best example an article about PHP Language. So you can also search tutorial from bellow search box..</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

@include('includes.footer')

@include('includes.sidebar')

@include('includes.chart-bot')

<script src="{{ mix('assets/js/all.js') }}" as="script" async></script>
</body>
</html>
