<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('ecommerce/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('ecommerce/style.css') }}" />
</head>
<body>

<div class="topnav">
    <a href="#" style="float: right;">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </a>
</div>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Recommended Product</a>
    <a href="#">New Product</a>
    <a href="#">Product Area</a>
    <a href="#">Purpose</a>
    <a href="#">Cart View</a>
    <a href="#">Order History</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Contact</a>
    <a href="#">Logout</a>
</div>

<div id="app" class="main-content">
    @yield('contents')
</div>

@include('layouts.includes.footer')

<div>
    <button style="background: #2E4B71; color: white;" type="button" class="btn btn-info btn-lg btn-block">Cart View</button>
</div>

<script src="{{ asset('js/app.js') }}"></script>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>
