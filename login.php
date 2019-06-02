<?php
    include_once 'includes/databaza.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Dog Shelter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand absolute" href="index.html">Dog Shelter</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav mx-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Breed</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="germanShepherd.html">German Shepherd</a>
                                <a class="dropdown-item" href="labrador.html">Labrador</a>
                                <a class="dropdown-item" href="rottweiler.html">Rottweiler</a>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="login.html">Log In</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="home-slider inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('img/logindog2.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1></h1>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END slider -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 order-2">
                    <form action="login.php" method="post">
                        <div class="row">
                            <div class="col-md-12 form-group">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="username">Username</label>
                                <input name="username" type="text" id="username" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" id="password" class="form-control ">
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write Message</label>
                                <textarea name="message" id="message" class="form-control " cols="30"
                                    rows="8"></textarea>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" name="Submit" value="Login" class="btn btn-primary">
                            </div>
                            <div class="col-md-6 form-group">
                               <a href="signup.php"   type="submit" name="Submit" value="Sign-Up" class="btn btn-primary"> signup</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 order-2 mb-5">
                    <div class="row justify-content-right">
                        <div class="col-md-8 mx-auto contact-form-contact-info">
                            <p class="d-flex">
                                <span class="ion-ios-location icon mr-5"></span>
                                <span>Prishtine, Kosove</span>
                            </p>

                            <p class="d-flex">
                                <span class="ion-ios-telephone icon mr-5"></span>
                                <span>+383 49 123 123</span>
                            </p>

                            <p class="d-flex">
                                <span class="ion-android-mail icon mr-5"></span>
                                <span>dogshelter@gmail.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 mb-5">
                    <h3>Log in for:</h3>
                    <p class="mb-5">Receiving info weekly.</br>
                        Stay in touch.</br>
                        Etc...
                    </p>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                        <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                    </ul>

                </div>
                <div class="col-md-5 mb-5">
                    <h3>Contact Info</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block">
                            <span class="d-block">Address:</span>
                            <span class="text-white">Prishtine,Kosovë</span></li>
                        <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+383 49 123
                                123</span></li>
                        <li class="d-block"><span class="d-block">Email:</span><span
                                class="text-white">dogshelter@gmail.com</span></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled footer-link">
                        <li><a href="about.html">About</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-12 text-md-center text-left">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p><em>Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> Programimi ne Internet, FIEK
                        </em></p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" /></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>