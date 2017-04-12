
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Blog @yield('title')</title><!-- CHANGE THIS TITLE FOR EACH PAGE-->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"> 

    {{Html::style('css/styles.css')}}

    @yield('stylesheets')
