<!doctype html>
<html lang="en">
<?php
  include('sendmail.php');
?>
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
    <div class="slider-item" style="background-image: url('img/md3.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 element-animate">
            <h1>Contact Us</h1>
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
          <form action="sendmail.php" method="post">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">

              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name ="email" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message">Write Message</label>
                <textarea name="message" id="message" name ="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
              <button input type="submit" value="Send Message" name ="send" class="btn btn-primary">Send Message</button>
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

        <!-- END slider -->
      </div>
    </div>
  </section>
  <!-- END section -->


  <?php
    require "footer.php";
  ?>  <!-- END footer -->

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