<!DOCTYPE html>
<html lang="en">

    <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">
    <link href="{{asset("css/styleku.css")}}" rel="stylesheet">

    </head>

<body>

<!-- Start your project here-->

    <main class="py-4">
        @yield('basic')
    </main>

<!-- Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
</body>

</html>