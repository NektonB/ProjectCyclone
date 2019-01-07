<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Link for bootstrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/js/jquery.min.js"></script>
    <script src="/bootstrap/js/popper.min.js"></script>
    <script src="/bootstrap/js/tooltip.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- link for slide show -->
    <link rel="stylesheet" type="text/css" href="css/half-slider.css" >

    <!-- CSS class links -->
    <link rel="stylesheet" type="text/css" href="css/navbar.css" >
    <link rel="stylesheet" type="text/css" href="css/3d_layout.css" >

    <title>Home Page</title>
</head>
<body>

<!-- this is header line -->
<div style="background-color:black;color:black;height:30px;">
</div>

<div class="container-fluid" style="background-color:black;color:#fff;height:170px; " class="navbar navbar-expand-lg navbar-light bg-light" data-spy="affix" data-offset-top="197">

    <div class="log_aria">

    </div>

    <nav class="navbar navbar-expand-sm  navbar-dark" style="background-color: #28a745">

        <!-- Links -->
        <ul class="navbar-nav">
            <li><a class="navbar-brand" href="#"><b><span class="glyphicon glyphicon-home"></span> Home</b></a></li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b>Link 1</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b>Link 2</b></a>
            <li c   lass="nav-item">
                <a class="nav-link" href="#"><b>Link 3</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b>Link 4</b></a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <b>Dropdown link</b>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><b>Link 1</b></a>
                    <a class="dropdown-item" href="#"><b>Link 2</b></a>
                    <a class="dropdown-item" href="#"><b>Link 3</b></a>
                </div>
            </li>
        </ul>
    </nav>
</div>




<!-- Slide show started -->
<div class="slideshow_container">

</div>
<!-- slide show ended-->


<h1 style="margin-top: 2000px;">hdf</h1>

<?php
echo 'Hello World!';
?>

</body>
</html>