<!DOCTYPE html>
<html>

<head>
    <title>SNEAKPICK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>

    /* body{
        background:#e0ffff;
    } */
        * {
            
            font-family: 'Josefin Sans', sans-serif;
        }
        
        section {
            width: 90%;
            margin: auto;
            margin-top: 120px;
        }
    </style>

</head>

<body>
<div class="navbar-fixed">
    <nav class="blue lighten-2">
        <div class="nav-wrapper container">


            <a href="index.html" class="brand-logo">SNEAK<span style="font-family: 'Pacifico', cursive;">Pick</span><i class=" large material-icons">blur_on</i></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            
            <ul class="right hide-on-med-and-down">
                
                <li><a href="loginpage.php">LOG IN</a></li>
                <li><a href="badges.html">Services</a></li>
                <li><a href="#gallery" class="scrollspy">Gallery</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="mobile.html">CONTACT</a></li>
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">SignUp</a>


            </ul>
        </div>
    </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="loginpage.php">LOG IN</a></li>
        <li><a href="badges.html">Services</a></li>
        <li><a href="#gallery" class="scrollspy">Gallery</a></li>
        <li><a href="about.html">About</a></li>

        <li><a href="mobile.html">CONTACT</a></li>
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">SignUP</a>

    </ul>

<div class="container">
<h1 class="center-align">welcome</h1>




<a href="logout.php">LOG OUT</a>
</div>






    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });

        $(document).ready(function() {
            $('.fixed-action-btn').floatingActionButton();
        });

        $(document).ready(function() {
            $('.materialboxed').materialbox();
        });

        $(document).ready(function() {
            $('input#mobile').characterCounter();
        });

        $(document).ready(function() {
            $('.modal').modal();
        });

        $(document).ready(function() {
            $('.datepicker').datepicker();
        });
    </script>
</body>

</html>



