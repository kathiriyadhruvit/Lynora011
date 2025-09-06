<?php 
 include 'header.php';
include 'conn.php';
$result=mysqli_query($con,"select * from treading_product");

?>
<html>
	<link rel="stylesheet" type="text/css" href="css/video.css">
	<link rel="stylesheet" type="text/css" href="css/one.css">
  	<link rel="stylesheet" type="text/css" href="css/ani.css">
	 <center><h1 class="heading">NEW ARRIVALS</h1></center>
</div><br>
		<marquee><div class="one">
  		<img src="img/1.webp" class="img-thumbnail img1" alt="..." id="chill">
  		<img src="img/2.webp" class="img-thumbnail img1" alt="...">
  		<img src="img/8.webp" class="img-thumbnail img1" alt="...">
  		<img src="img/4.webp" class="img-thumbnail img1" alt="...">
		</div></marquee><br>
		<!-- product info 1 -->
		<div id="chill">
    <center><h1 onclick="document.getElementById('chill').scrollIntoView({behavior:'smooth'})">
            Kids Car </h1>
    </center>

		<div class="card product1" style="width: 18rem;">
 		 	<img src="img/6.jpg" class="card-img-top" alt="...">
 			 <div class="card-body">
    			<h5 class="card-title">Card title</h5>
   				 <p class="card-text">Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery  with Bluetooth, Music system, Real LED</p>
    			<a href="cart.php" class="btn btn-primary">Go somewhere</a>
  			</div>&nbsp;&nbsp;
		</div>
		<!-- product info 2 -->
		<div class="card product1" style="width: 18rem;">
 		 	<img src="img/7.webp" class="card-img-top" alt="...">
 			 <div class="card-body">
    			<h5 class="card-title">Card title</h5>
   				 <p class="card-text">Kids Car – Ferrari Kids Car with Bluetooth, Music system, Real LED Headlights and Tail lamps with Remote Control</p>
    			<a href="cart.php" class="btn btn-primary" >Go somewhere</a>
  			</div>&nbsp;&nbsp;
		</div>
				<!-- product info 3 -->
		<div class="card product1" style="width: 18rem;">
 		 	<img src="img/8.jpg" class="card-img-top" alt="...">
 			 <div class="card-body">
    			<h5 class="card-title">Card title</h5>
   				 <p class="card-text">LAMBORGHINI NEL-603 BATTERY OPERATED RIDE ON CAR FOR KIDS. with Bluetooth, Music system, Real LED</p>
    			<a href="cart.php" class="btn btn-primary">Go somewhere</a>
  			</div>
  		</div>&nbsp;&nbsp;
		</div><br><br><br>
			<!-- Truck info 1 -->
			<center><h1 id="#">Kids Truck</h1></center>
		<div class="card product1" style="width: 18rem;">
 		 	<img src="img/truck1.webp" class="card-img-top" alt="...">
 			 <div class="card-body">
    			<h5 class="card-title">Battery Operated - Ride ATV</h5>
   				 <p class="card-text">Quad Bike ATV – ISAKAA Brings to you the Electric Ride on ATV</p>
    			<a href="cart.php" class="btn btn-primary">Go somewhere</a>
  			</div>&nbsp;&nbsp;
		</div>
			<!-- product info 2 -->
		<div class="card product1" style="width: 18rem;">
 		 	<img src="img/truck2.jpeg" class="card-img-top" alt="...">
 			 <div class="card-body">
    			<h5 class="card-title">Battery Operated - Kids Jeep</h5>
   				 <p class="card-text">Quad Bike ATV – ISAKAA Brings to you the Electric Ride on ATV
</p>
    			<a href="cart.php" class="btn btn-primary">Go somewhere</a>
  			</div>&nbsp;&nbsp;
		</div>
			<!-- product info 3 -->
		<div class="card product1" style="width: 18rem;">
 		 	<img src="img/truck4.jpg" class="card-img-top" alt="...">
 			 <div class="card-body">
    			<h5 class="card-title">Battery Operated Kid’s Truck</h5>
   				 <p class="card-text">ISAKAA 2 Seater 4X4 Battery Operated Ride on Jeep / Truck</p>
    			<a href="cart.php" class="btn btn-primary">Go somewhere</a>
  			</div>&nbsp;&nbsp;
		</div><br><br>
    <!-- Name animation Lynora -->
    <div id="ani1">
    <div class="animation1"><h1>Lynora</h1></div>
  </div><br>
  <!-- product1 -->
      <div class="products">
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="card product1">
      <img src="uploads/<?= $row['images']; ?>" alt="Product image">
      <div class="card-body">
        <h5 class="card-title"><?= $row['title']; ?></h5>
        <p class="card-text"><?= $row['description']; ?></p>
        <p>₹<?= $row['price']; ?></p>
        <a href="cart.php?p_id=<?= $row['p_id']; ?>&title=<?= urlencode($row['title']); ?>&price=<?= $row['price']; ?>&image=<?= $row['images']; ?>" 
           class="btn">Add to Cart</a>
      </div>
    </div>
  <?php } ?>
</div>
		<!-- video -->
		<h1>The video element</h1>

  <div class="video-box">
    <video controls autoplay muted >
      <source src="video/video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
		<!-- Shope by age -->
		<center><h2><b>Shope By Age In Children</b></h2></center>
			<div class="age" id="chill">

  		<img src="img/1-3.png" class="img-thumbnail img1" alt="..." id="chill">
  		<img src="img/3-6.png" class="img-thumbnail img1" alt="...">
  		<img src="img/6-9.png" class="img-thumbnail img1" alt="...">
  		<img src="img/9-12.png" class="img-thumbnail img1" alt="...">
		</div><!-- <br>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br> -->
    <?php include 'Footer.php';?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
