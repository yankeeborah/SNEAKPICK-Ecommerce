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
                
                <li><a href="index.html">LOG IN</a></li>
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
        <li><a href="index.html">LOG IN</a></li>
        <li><a href="badges.html">Services</a></li>
        <li><a href="#gallery" class="scrollspy">Gallery</a></li>
        <li><a href="about.html">About</a></li>

        <li><a href="mobile.html">CONTACT</a></li>
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">SignUP</a>

    </ul>


<section>
    <form action="login.php" method="POST">
        
            <div class="row">
                <div class="col m6 l4 s10 offset-l4">
                    <p class="center-align">LOG IN</p>
                    

                    
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pwd" name="pwd" type="password" class="validate">
                            <label for="pwd">Password</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-light" type="submit" name="submit" ">Submit
                                    <i class="material-icons right">send</i>
                                  </button>
                                  <p></p>

                </div>
            </div>
        
        </form>

</section>


    <footer class="page-footer blue lighten-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text"><i class="large material-icons">blur_on</i>SNEAK<span>PICK</span></h5>
                    <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit sequi excepturi tempora quisquam molestias, repudiandae tempore, libero consequuntur fugiat, placeat veniam qui hic. Expedita unde error asperiores, ipsum voluptate repellat?</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!"><img src="https://img.icons8.com/material/48/000000/instagram-new.png" class="responsive-img">INSTAGRAM</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!"><img src="https://img.icons8.com/material/48/000000/facebook-new.png">FACEBOOK</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!"><img src="https://img.icons8.com/material/48/000000/twitter-squared.png">TWITTER</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!"><img src="https://img.icons8.com/material/48/000000/youtube--v2.png">YOUTUBE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">

                <p class="center-align">DESIGN BY | BISWAJIT BORAH © 2019 Copyright Text</p>
                <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
        </div>
    </footer>


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