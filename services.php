<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .service-card {
      height: 70vh;
      background-size: cover;
      background-position: center;
      position: relative;
      margin-bottom: 0; /* Remove bottom margin */
      border: none; /* Remove border */
      transition: box-shadow 0.3s ease; /* Add transition for smooth effect */
    }

    .service-card:hover {
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Add box shadow on hover */
    }

    .service-card:hover::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.3); /* Add overlay color */
    }

    .service-card:hover .more-btn {
      display: block;
    }

    .more-btn {
      display: none;
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
    }

    .card-body {
      position: absolute;
      bottom: 20px;
      left: 20px;
      color: white;
    }

    #banner {
      background-image: url("img/bg.png");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      text-align: center;
      color: white;
      padding: 100px;
    }

    .services-heading {
      position: relative;
      display: inline-block;
      margin-bottom: 20px;
    }

    .services-heading::after {
      content: "";
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      width: calc(100% - 100px);
      height: 1px;
      background-color: white;
    }

    .services-heading .more-btn {
      position: absolute;
      top: 50%;
      right: 10px; /* Adjust the right value as per your needs */
      transform: translateY(-50%);
    }
  </style>
</head>
<body>

<?php include('./includes/header.php') ?>

<div id="banner" class="jumbotron jumbotron-fluid bg-dark">
  <div class="container">
    <h1 class="display-4">We Drive Results Services</h1>
    <p class="lead">Scroll Down to know more ....</p>
  </div>
</div>

<div class="container">
    <div class="col-12">
  <h2 class="services-heading col-8">Services</h2>
  <button class="btn btn-primary more-btn col-4">More</button>
  </div>
  <div class="row no-gutters">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card service-card" style="background-image: url('img/service1.jpeg')">
        <div class="card-body">
          <h5 class="card-title">Service 1</h5>
          <p class="card-text">Description of Service 1</p>
          <!-- <button class="btn btn-primary more-btn">More about Service</button> -->
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 p-2">
      <div class="card service-card" style="background-image: url('img/service2.jpg')">
        <div class="card-body">
          <h5 class="card-title">Service 2</h5>
          <p class="card-text">Description of Service 2</p>
          <!-- <button class="btn btn-primary more-btn">More about Service</button> -->
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card service-card" style="background-image: url('img/service3.jpg')">
        <div class="card-body">
          <h5 class="card-title">Service 3</h5>
          <p class="card-text">Description of Service 3</p>
          <!-- <button class="btn btn-primary more-btn">More about Service</button> -->
        </div>
      </div>
    </div>
    <!-- Repeat the above three cards to create a total of six cards -->
  </div>
</div>

<?php include('./includes/footer.php') ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
