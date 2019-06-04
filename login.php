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
    <?php
    require "header.php";
    ?>
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
            <?php
            if (!isset($_SESSION['userId'])) {
                echo '<div class="row">
                 <div class="col-md-6 mb-5 order-2">
                    <form action="includes/login.inc.php" method="post">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" id="email" class="form-control ">
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
                        <div class="row">
                            <div class="col-md-6 form-group">
                               <button  type="submit" name="login-submit" class="btn btn-primary">login</button>
                            </div>
                            <div class="col-md-6 form-group">
                               <a href="signup.php"   type="submit" name="Submit" value="Sign-Up" class="btn btn-primary">signup</a>
                            </div>
                        </div>
                    </form>
                </div>';
            } else if(isset($_SESSION['userId'])) {
                echo '<section class="section">
                <div class="container">
                <div class="row">
            <div class="col-md-6 mb-5 order-2">
               <form action="include/logout.inc.php" method="post">
                   <div class="row">
                   <button  type="submit" name="logout-submit" class="btn btn-primary">logout</button>
                   </div>
                        </div>
                    </form>
                </div>
                </div>
                </section>';
            } ?>
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

    <?php
    require "footer.php"
    ?>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>