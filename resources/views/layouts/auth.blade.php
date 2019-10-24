<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Authenticate | EDNUE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">


    <link rel="stylesheet" href="{{url('css/customauth.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />


</head>

<body>
<div class="container-scroller" >

    @yield('content')

</div>


</body>
</html>
