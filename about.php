<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style.css">
  <title>About Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .component {
      opacity: 0;
      transition: opacity 0.5s;
      display: flex;
      align-items: center;
    }
    .component.visible {
      opacity: 1;
    }
    .component img {
      object-fit: contain;
      width: 100%;
    }
    #banner {
      background-image: url("img/bg.png");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      text-align: center;
      color: white;
      padding:100px;
    }

    .description{
        font-size:15px;
        font-family:arial;
    }
  </style>
</head>
<body>

<?php include('includes/header.php') ?>

   <div id="banner" class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h1 class="display-4">We Drive Results About-us</h1>
      <p class="lead"> Scroll Down to know more ....</p>
    </div>
  </div>

  <div id="components">
    <div class="container">
      <div class="row p-5">
        <div class="col-lg-12 component">
          <div class="row">
            <div class="col-4 ">
              <h2>About Us</h2>
              <p class="description" >Welcome to AdvertiseHub, the ultimate platform for all your advertising needs! We are a leading online marketplace that connects businesses with their target audience, helping them reach new heights of success through effective marketing strategies. With our cutting-edge technology and extensive network, we provide a seamless and efficient experience for both advertisers and publishers.</p>
            </div>
            <div class="col-8 ">
              <img src="img/about-us.png" alt="Image 1">
            </div>
          </div>
        </div>
        <div class="col-lg-12 component">
          <div class="row">
            <div class="col-4">
              <h2>Our Mission</h2>
              <p class="description">At AdvertiseHub, our mission is to revolutionize the advertising industry by providing a one-stop solution for businesses of all sizes to promote their products and services. We aim to empower advertisers by offering them the tools and resources they need to create impactful campaigns and connect with their desired audience in a meaningful way. By driving targeted traffic and maximizing conversions, we strive to be the catalyst that propels businesses to achieve their marketing goals.</p>
            </div>
            <div class="col-8">
              <img src="img/eisenhowervision.png" alt="Image 1">
            </div>
          </div>
        </div>
        <div class="col-lg-12 component">
          <div class="row">
            <div class="col-4">
              <h2>what we do</h2>
              <ul>
                <li class="description">Advertising Solutions: Our platform offers a wide range of advertising solutions tailored to suit your specific needs. Whether you're looking for display ads, native advertising, video ads, or sponsored content, we have the right options to help you engage your target audience effectively.</li>
                <li class="description">Targeted Reach: With our advanced targeting capabilities, you can precisely reach the audience most likely to be interested in your offerings. Leverage demographic, geographic, and behavioral targeting to optimize your campaigns and maximize the return on your advertising investment.</li>
              </ul>
            </div>
            <div class="col-8">
              <img src="img/what-we-do.png" alt="Image 1">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script>
  $(document).ready(function() {
    setTimeout(() => {
      $('.component').addClass('visible');
      
    }, 300);
   
  });
</script>


  <?php include('./includes/footer.php') ?>
</body>
</html>
