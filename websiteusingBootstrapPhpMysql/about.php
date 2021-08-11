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
  

<!--Jumbotron-->
<div class="jumbotron">
  <h1>Bootstrap Tutorial</h1>
  <p>Bootstrap is the most popular HTML, CSS...</p>
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

<!-- Footer-->
<footer>
  <p class="p-3 bg-dark text-white text-center">
   Made By: @VibhaPandey |Bootstrap|Php|Mysql|
  </p>
</footer>

</body>
</html>