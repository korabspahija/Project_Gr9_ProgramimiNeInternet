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
    <div class="slider-item" style="background-image: url('img/blogBackground2.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 element-animate">
            <h1>Blog</h1>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- END slider -->

  <section>
    <div class="half d-md-flex d-block">
      <div class="image" style="background-image: url('img/blogBackground.jpg')"></div>
      <div class="text text-center element-animate">
        <span>May 24, 2019</span>
        <h3 class="mb-4">How To Get A Dog</h3>
        <p class="mb-5">We are happy to provide a caring family to our dogs so just contact us and we will set up a
          meeting on our shelter</p>
        <p><a href="contact.html" class="btn btn-primary btn-sm">Contact us</a></p>
      </div>
    </div>

    <div class="half d-md-flex d-block">
      <div class="image order-2" style="background-image: url('img/blogBackground4.jpg')"></div>
      <div class="text text-center element-animate">
        <span>May 24, 2019</span>
        <h3 class="mb-4">About Training Your Dog</h3>
        <p class="mb-5">Dog training is teaching a response to cues or commands, or the performance of actions not
          necessarily natural to the dog, and also raising a dog accommodated to his environment by modifying natural
          digging, barking and eliminating behaviors. Dog training is defined as the purposeful changing of a dog's
          behavior</p>

        <p><a href="https://en.wikipedia.org/wiki/Dog_training" class="btn btn-primary btn-sm">Learn More</a></p>
      </div>
    </div>

    <div class="half d-md-flex d-block">
      <div class="image" style="background-image: url('img/blogBackground3.jpg')"></div>
      <div class="text text-center element-animate">
        <span>May 24, 2019</span>
        <h3 class="mb-4">What Are Dog Breeds</h3>
        <p class="mb-5">Dog breeds are dogs that have relatively uniform physical characteristics developed by humans,
          with breeding animals selected for phenotypic traits such as size, coat color, structure, and behavior.</p>
        <p><a href="#" class="btn btn-primary btn-sm">Continue Reading</a></p>
      </div>
    </div>

    <div class="half d-md-flex d-block">
      <div class="image order-2" style="background-image: url('img/blogBackground5.jpg')"></div>
      <div class="text text-center element-animate">
        <span>May 24, 2019</span>
        <h3 class="mb-4">Find The Right Food For Your Dogs</h3>
        <p class="mb-5">Step 1: Consider your dog’s age, activity, breed, and reproductive status.
          Step 2: Know the “buzz words” on food packaging.
          Step 3: Learn to read the ingredients.
          Step 4: Decide if grain-free is right for your dog.
          Step 5: Check the nutritional adequacy statement.
          Step 6: Do your homework on your brand of choice.
        </p>

        <p><a href="https://barkpost.com/good/best-dog-food/" class="btn btn-primary btn-sm">Learn More</a></p>
      </div>
    </div>
    <!-- <a href="#" class="load-more">Load More</a> -->
  </section>



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