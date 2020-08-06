<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard | User Alfabank</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; User Panel</span>

        <div class="float-right">
            <span>{{Auth::user()->nama}}</span>
            <img src="img/team/team-1.jpg" width="30" height="30" class="rounded-circle" alt="">
        </div>
        @include('usernav')
        @yield('user')  
    </div>
    <script src="js/dashboard.js"></script>
</body>

</html>