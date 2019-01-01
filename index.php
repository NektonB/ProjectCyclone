<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/js/jquery.min.js"></script>
    <script src="/bootstrap/js/popper.min.js"></script>
    <script src="/bootstrap/js/tooltip.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>

    <!-- link for slide show -->
    <link rel="stylesheet" type="text/css" href="css/half-slider.css" >

    <!-- CSS class links -->
    <link rel="stylesheet" type="text/css" href="css/navbar.css" >
    <link rel="stylesheet" type="text/css" href="css/3d_layout.css" >

    <title>Home Page</title>
</head>
<body>

<!-- this is affix (header) -->
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
    <h1>Online Shopping Cart</h1>

</div>

<!-- Navigation bar started -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" data-spy="affix" data-offset-top="197"
     style="background-color: white;">
    <ul class="nav navbar-nav">
        <li><a href="#">Fresh Mart</a>
        </li>
        <li class="active"><a href="#" style="color: black;"><span class="glyphicon glyphicon-home"></span> Home</a>
        </li>
        <li><a href="#">All Product</a>
        </li>
        <li><a href="#">Catogories</a>
        </li>
        <li><a href="#">About Us</a>
        </li>
        <li><a href="#">Contact</a>
        </li>
    </ul>

    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" size="30">
        </div>
        <button type="Search" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></button>
    </form>

    <ul class="nav navbar-nav navbar-right" style="margin-right: 0px">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        </li>
    </ul>
</nav>
<!-- Navigation bar Ended -->

<!-- Slide show started -->
<div class="slideshow_container">

</div>
<!-- slide show ended-->

<div class="container">
    <img src="media_files/02.jpg">
    <img src="media_files/02.jpg">
    <img src="media_files/02.jpg">
    <img src="media_files/02.jpg">

</div>

<h1 style="margin-top: 2000px;">hdf</h1>

<?php
echo 'Hello World!';
?>

</body>
</html>