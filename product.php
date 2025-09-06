<?php 
// session_start();
// if(!isset($_SESSION['Name']))
// {
//   echo "<script>
//   alert('please enter your login');
//   window.location.href='Login.php';
//   </script>";
//   exit;
// }
// ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Electric Car..</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/one.css">
	<link rel="stylesheet" type="text/css" href="css/video.css">
  <link rel="stylesheet" type="text/css" href="css/ani.css">
</head>
<body>
	<!-- Header parts -->
	<header>
  <div class="conn">
    <div class="logo" data-text="Lynora">Lynora</div>
    
    <!-- Navigation + Search -->
    <nav id="navbarNavDropdown">
      <ul>
        <li class="nav-item"><a href="one.php">Home</a></li>
        <li class="nav-item"><a href="product.php">Product</a></li>
        <li class="nav-item"><a href="About.php">About</a></li>
        <li class="nav-item"><a href="contact.php">Contact</a></li>
           <a href="#"><img src="img/cart.svg" alt="..." height="20px" width="30px" style="background:#aaa; border: none; outline: none;"></a>
        <li class="nav-item"><a href="signin.php">Signin</a></li>
        <li class="nav-item"><a href="login.php">Login</a></li>
      </ul>
      <form class="search-form" role="search">
        <input type="search" placeholder="Search">
        <button type="submit">Search</button>
      </form>
    </nav>
  </div>
</header>

			<!-- Slide use -->
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide/1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide/2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide/3.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>
<div class="container"><br>
				<!-- Heading -->
    
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
<!-- product -->
	<div>
    <div class="circle-container">
  <div class="circle">
    <span>Car.</span>
    <a href="Car.php"><img src="img/Car/1.jpg" alt="circle img"></a>
  </div>&nbsp;&nbsp;
  <div class="circle">
    <span>Bike..</span>
    <a href="Bike.php"><img src="img/Bike/1.webp" alt="circle img"></a>
  </div>&nbsp;&nbsp;
  <div class="circle">
    <span>Jeep..</span>
    <a href="Jeep.php"><img src="img/Jeep/2.png" alt="circle img"></a>
  </div>&nbsp;&nbsp;
  <div class="circle">
    <span>Lynora..</span>
    <img src="img/1.webp" alt="circle img">
  </div>
</div>
<div>
	<!-- productt -->
    <div class="circle-container">
  <div class="circle">
    <span>Car.</span>
   <a href="Car.php"><img src="img/Car/2.jpg" alt="circle img"></a>
  </div>&nbsp;&nbsp;
  <div class="circle">
    <span>Bike..</span>
    <a href="Bike.php"><img src="img/Bike/2.webp" alt="circle img"></a>
  </div>&nbsp;&nbsp;
  <div class="circle">
    <span>Jeep..</span>
    <a href="Jeep.php"><img src="img/Jeep/2.webp" alt="circle img"></a>
  </div>&nbsp;&nbsp;
  <div class="circle">
    <span>Lynora..</span>
    <img src="img/1.webp" alt="circle img">
  </div>
</div>
</div>
</div>
</body>
</html>
<!-- footer -->
<div>
<?php include 'Footer.php';?>
</div>

