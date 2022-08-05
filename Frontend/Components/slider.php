<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wi-Fi Publictaion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  </head>
  <body>

  <style>

    
    .slider
    {
        height:580px;
    }
  </style>

<div id="carouselExampleControls" class="carousel slide carousel-fade   " style="margin-top:-100px;" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="height:500px;">
      <img src=" <?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/slider1.webp"; ?>" class="d-block w-100" alt="" height="" style="height:100%;">
    </div>
    <div class="carousel-item" style="height:500px;">
      <img src="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/slider2.webp"; ?>" class="d-block w-100"  alt="..."   style="height:100%;">
    </div>
    <div class="carousel-item" style="height:500px;">
      <img src="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/slider3.webp"; ?>" class="d-block w-100"  alt="..."  style="height:100%;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden ">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>