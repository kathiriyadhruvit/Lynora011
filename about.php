<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lynora - About Us</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
      color: white;
    }

    /* Background video */
    .bg-video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    /* Header */
    header {
      width: 100%;
      padding: 15px 40px;
      background: #222;
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 2;
    }

    .logo {
      font-size: 2rem;
      font-weight: bold;
      color: #ffcc00;
      text-transform: uppercase;
      letter-spacing: 2px;
      cursor: pointer;
    }

    nav ul {
      list-style: none;
      margin-right: 380px;
      padding: 0;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-size: 20px;
      transition: color 0.3s, transform 0.3s;
    }

    nav ul li a:hover {
      color: #ffcc00;
      transform: scale(1.1);
    }

    /* Search */
    .search-form {
      margin-left: 545px;
      display: flex;
    }

    .search-form input {
      padding: 5px 10px;
      border: none;
      border-radius: 5px 0 0 5px;
      outline: none;
    }

    .search-form button {
      padding: 5px 10px;
      border: none;
      background: #ffcc00;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
      transition: background 0.3s;
    }

    .search-form button:hover {
      background: #e6b800;
    }

    /* Content */
    .content {
      position: relative;
      z-index: 1; 
      margin: 120px auto 50px;
      color: white;
      text-align: center;
      padding: 40px;
      max-width: 900px;
      background: rgba(0, 0, 0, 0.6);
      border-radius: 15px;
    }

    .content h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      transition: color 0.3s, transform 0.5s;
    }

    .content h1:hover {
      color: #ffcc00;
      transform: scale(1.2);
    }

    .content p {
      font-size: 1.1rem;
      line-height: 1.6;
      text-align: justify;
    }

    .content p:hover {
      color: #f0e68c;
    }
  </style>
</head>
<body>
  <!-- Background video -->
  <video autoplay muted loop class="bg-video">
    <source src="video/about.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Header -->
  <header>
    <div class="logo">Lynora</div>
    <nav id="navbarNavDropdown">
      <ul>
        <li class="nav-item"><a href="one.php">Home</a></li>
        <li class="nav-item"><a href="product.php">Product</a></li>
        <li class="nav-item"><a href="About.php">About</a></li>
        <li class="nav-item"><a href="contact.php">Contact</a></li>
        <li class="nav-item"><a href="signin.php">Signin</a></li>
        <li class="nav-item"><a href="login.php">Login</a></li>
      </ul>
      <form class="search-form" role="search">
        <input type="search" placeholder="Search">
        <button type="submit">Search</button>
      </form>
    </nav>
  </header>
  <div class="content">
    <h1>About Us</h1>
    <p>
      Lynora is an Indian online Kids toy store, It was founded in July 2025 in Junagadh, India and is owned by LYNORA SERVE.
      <br><br>
      Welcome to LYNORA’s online kids toy shopping portal, a special and ultimate destination for a wide spectrum of toys. With a deep desire to touch every heart and reach every home in India, we have currently committed all our resources to cater to the Indian market. Our main goal is to sell good toys with high product quality, fair pricing, and timely delivery, ensuring a pleasant experience in all matters. Along with other e-commerce companies (Amazon, Flipkart, Meesho), we provide you with the good experience of purchasing our products, which are manufactured and imported by reputed traders of India.
      <br><br>
      LYNORA is now one of the leading online suppliers of kids’ toy electric cars in India. We take great pride in having an excellent range of kids ride-on cars, motor-bikes, quad-bikes, jeeps, scooters, magic cars, prams, strollers, remote control cars, activity toys, jhula, palna, and tricycles. We also offer a large range of products.
    </p>
  </div>
</body>
</html>
<div>
  <?php include 'Footer.php';?>
</div>
