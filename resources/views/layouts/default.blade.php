<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{page_title($title? $title : '')}}</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
          crossorigin="anonymous">

    <!-- Open sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

</head>

<style>
    body{
        font-family: 'Open Sans', sans-serif;
    }
    footer{
        margin: 4em 0;
    }
    #language{
        border: none;
        margin: 9px;
        color: blue;
        padding: 5px;
    }
    .thumbnail {
        padding: 0 0 0px 0;
        border: none;
        border-radius: 5px;
    }

    /*.thumbnail img {*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*margin-bottom: 10px;*/
    /*}*/
    .body-thumbnail{
        padding-bottom: .875rem;
        margin-right: 0px;
        margin-left: 0px;
    }
</style>

<body>

    @include('layouts.partials._nav')

    @yield('content')

    @include('layouts.partials._footer')

    @auth
        @include('layouts.partials.profile');
        @include('layouts.partials.editProfile');
    @endauth

</body>

<!-- Jquery -->
<script src="//code.jquery.com/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

@include('flashy::message')

<script src="{{ asset('js/app.js') }}"></script>

</html>
