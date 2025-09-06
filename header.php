<?php session_start();?>
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
        <a href="cart_show.php"><img src="img/cart.svg" alt="..." height="20px" width="30px" style="background:#aaa; border: none; outline: none;"></a>
        
        <li class="nav-item"><a href="signin.php">Signin</a></li>
        <li class="nav-item"><a href="login.php">Login</a></li>
        <!-- user login info -->

             
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
     <!-- CDN link add karna zaroori hai -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<div>
    <div class="circle-container">
  <div class="circle">
    <span>Lynora..</span>
    <img src="img/8.webp" alt="circle img">
  </div>&nbsp;&nbsp;
  <div class="circle">
    <span>Lynora..</span>
    <img src="img/7.webp" alt="circle img">
  </div>&nbsp;&nbsp;
  <div class="circle">
    <span>Lynora..</span>
    <img src="img/4.webp" alt="circle img">
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


