<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
     href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<!--Navbar -->

<?php include('menu.php') ?>

<!-- Caroursel -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/c5.jfif" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/c4.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/c6.jfif" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<!--Section for About Us -->

<section class="my-4">
  <div class="py-3">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/c6.jfif" class="img-fluid aboutimg" />
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-7">Hey! I am Vibha Pandey..</h2>
        <p class="py-3">I have done my schooling from Jaipur. For my graduation, I chose Xyz program at Abc University. It was a very enriching experience at the University as not only we were actively involved in practical projects, but also got opportunities to participate in a number of sports and other extra-curricular activities such as plays and skits
        </p>
        <a href="about.php" class="btn btn-success">Check More</a>
      </div>
    </div>
  </div>
</section>

<!--Section for Our Services -->

<section class="my-4">
  <div class="py-3">
    <h2 class="text-center">Our Services</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top" src="image/c5.jfif" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Content Writing</h4>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top img-height"  src="image/c4.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Content Writing</h4>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top img-height " src="image/c6.jfif" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Content Writing</h4>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</section>


<!--Section for Gallery -->

<section class="my-4">
  <div class="py-3">
    <h2 class="text-center">Our Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row ">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="image/c1.jpg" class="img-fluid imggal-height pb-4" >
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="image/c2.jpg" class="img-fluid imggal-height pb-4" >
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="image/c3.jpg" class="img-fluid imggal-height pb-4" >
      </div>
    </div>

    <div class="row ">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="image/c6.jfif" class="img-fluid imggal-height pb-4" >
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="image/c5.jfif" class="img-fluid imggal-height pb-4" >
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="image/c4.jpg" class="img-fluid imggal-height pb-4" >
      </div>
    </div>
  </div>
</section>

<!--Section for Gallery -->

<section class="my-4">
  <div class="py-3">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-success w-100">Submit</button>
    </form>
  </div>

</section>

<!-- Footer-->
<footer>
  <p class="p-3 bg-dark text-white text-center">
   Made By: @VibhaPandey |Bootstrap|Php|Mysql|
  </p>
</footer>


</body>
</html>