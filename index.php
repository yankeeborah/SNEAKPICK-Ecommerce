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

    <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src="mdcss/images/c1.jpeg"></a>
        <div class="carousel-fixed-item center">
            <a class="waves-effect waves-light btn" href="about.html" target="_blank">MORE INFO<i class="material-icons right">send</i></a>
        </div>
        <a class="carousel-item" href="#two!"><img src="mdcss/images/c2.jpg"></a>
        <a class="carousel-item" href="#three!"><img src="mdcss/images/c3.jpeg"></a>

    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>
    
    



    <!-- Modal Structure -->
    
    <div id="modal1" class="modal">
    <form action="reg.php" method="POST">
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <p class="center-align">Registration Form</p>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="fname" name="fname" type="text" class="validate">
                            <label for="fname">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="lname" name="lname" type="text" class="validate">
                            <label for="lname">Last Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="mobile" name="mobile" type="text" class="validate" data-length="10">
                            <label for="mobile">Mobile Number</label>
                        </div>
                    </div>
                    
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

                    <button class="btn waves-effect waves-light" type="submit" name="submit" onclick="M.toast({html: 'Registration Complete'})">Submit
                                    <i class="material-icons right">send</i>
                                  </button>

                </div>
            </div>
        </div>
        </form>
    </div>
    
    <section>
        <h2 class="center-align blue-text">ABOUT US</h2>
        <div class="row">
            <div class="col s4 m4 l4 offset-l4 offset-s4 offset-m4">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col m6 s12">
                <img src="mdcss/images/abt.jpg" class="responsive-img" alt="">
            </div>
            <div class="col m6 s12 center-align">
                <h4>WHO AM I?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptatibus voluptates alias placeat beatae officia cupiditate repellat aut voluptas. A, quam exercitationem reprehenderit quos dolore neque sed sint possimus. Quasi.</p>
                <a class="waves-effect waves-light blue white-text btn" href="about.html" target="_blank">KNOW MORE</a>
            </div>
        </div>
    </section>

    <section>
        <h2 class="center-align blue-text">OUR SERVICES</h2>
        <div class="row">
            <div class="col s4 m4 l4 offset-l4 offset-s4 offset-m4">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l4 m4">

                <div class="card hoverable">
                    <div class="card-image">
                        <img src="mdcss/images/carousel-img-1-mobile.jpeg" class="responsive-img">
                        <span class="card-title">MYNTRA</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text">GOTO SITE</a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 m4">

                <div class="card hoverable">
                    <div class="card-image">
                        <img src="mdcss/images/carousel-img-2-mobile.jpg" class="responsive-img">
                        <span class="card-title">AJIO</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text">GOTO SITE</a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 m4">

                <div class=" card hoverable">
                    <div class="card-image">
                        <img src="mdcss/images/carousel-img-3-mobile.jpeg" class="responsive-img">

                        <span class="card-title">JABONG</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text">GOTO SITE</a>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <section>
        <h2 class="center-align blue-text">OUR TOP SELLING SNEAKERS</h2>
        <div class="row">
            <div class="col l4 m4 s4 offset-l4">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col l4 m4 s12">
                <img src="mdcss/images/t5.webp" class="responsive-img materialboxed" data-caption=" NIKE REACT PRESTO Psychedelic Lava " alt="">
            </div>
            <div class="col l4 m4 s12">
                <img src="mdcss/images/t2.webp" class="responsive-img materialboxed" data-caption="AIR JORDAN IV BRED" alt="">
            </div>
            <div class="col l4 m4 s12">
                <img src="mdcss/images/t3.webp" class="responsive-img materialboxed" data-caption="NIKE AIR MAX UPTEMPO" alt="">
            </div>
            </div>
            <div class="row">
            <div class="col l4 m4 s12">
                <img src="mdcss/images/t3.webp" class="responsive-img materialboxed" data-caption="NIKE AIR MAX UPTEMPO" alt="">
            </div>
            <div class="col l4 m4 s12">
                <img src="mdcss/images/t5.webp" class="responsive-img materialboxed" data-caption=" NIKE REACT PRESTO Psychedelic Lava " alt="">
            </div>
            <div class="col l4 m4 s12">
                <img src="mdcss/images/t2.webp" class="responsive-img materialboxed" data-caption="AIR JORDAN IV BRED" alt="">
            </div>
        </div>
    </section>


    <section>
        <h2 class="center-align blue-text">CONTACT US</h2>
        <div class="row">
            <div class="col l4 m4 s4 offset-l4 offset-s4">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col m6 l6 s10 offset-l3">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="mobile" type="text" class="validate" data-length="10">
                                <label for="mobile">Mobile Number</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Textarea</label>
                            </div>
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <a class="btn waves-effect waves-light" type="submit" name="action" onclick="M.toast({html: 'Message Sent'})">Submit
                                <i class="material-icons right">send</i>
                              </a>

                    </form>
                </div>
            </div>
        </div>


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