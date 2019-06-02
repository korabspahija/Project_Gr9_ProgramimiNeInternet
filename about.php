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

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
    require "header.php";
  ?>  <!-- END header -->

  <section class="home-slider inner-page owl-carousel">
    <div class="slider-item" style="background-image: url('img/slider-1.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 element-animate">
            <h1>About Us</h1>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- END slider -->

  <section>
    <div class="half d-md-flex d-block">
      <div class="image" style="background-image: url('img/slider-1.jpg')"></div>
      <div class="text text-center element-animate">
        <h3 class="mb-4">Our Mission</h3>
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis tempora inventore, aliquam
          ratione. Eum vero sapiente tempora eveniet perspiciatis libero, omnis quae facilis! Voluptatibus minima autem,
          esse eius natus labore.</p>
        <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
      </div>
    </div>

    <div class="half d-md-flex d-block">
      <div class="image order-2" style="background-image: url('img/slider-2.jpg')"></div>
      <div class="text text-center element-animate">
        <h3 class="mb-4">Company History</h3>
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis tempora inventore, aliquam
          ratione. Eum vero sapiente tempora eveniet perspiciatis libero, omnis quae facilis! Voluptatibus minima autem,
          esse eius natus labore.</p>

        <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
      </div>
    </div>

  </section>



  <section class="section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center">
          <h2 class="heading mb-4">The Dog Team</h2>
          <p class="mb-5 lead">We are here to ensure that the dogs get nice families</p>
        </div>
      </div>
      <div class="row element-animate">
        <div class="major-caousel js-carousel-1 owl-carousel">
          <div>
            <div class="media d-block media-custom text-center">
              <a href="adoption-single.html"><img src="img/korabi1.jpg" alt="Image Placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h3 class="mt-0 text-black">Korab Spahija</h3>
              </div>
            </div>
          </div>
          <div>
            <div class="media d-block media-custom text-center">
              <a href="adoption-single.html"><img src="img/kreshniku1.jpg" alt="Image Placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h3 class="mt-0 text-black">Kreshnik Malaj</h3>
              </div>
            </div>
          </div>
          <div>
            <div class="media d-block media-custom text-center">
              <a href="adoption-single.html"><img src="img/qendrimi.jpg" alt="Image Placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h3 class="mt-0 text-black">Qendrim Gashi</h3>
              </div>
            </div>
          </div> 
        </div>
        <!-- END slider -->
      </div>
    </div>
  </section>
  <!-- END section -->


  <?php
    require "footer.php";
  ?>  <!-- END footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>