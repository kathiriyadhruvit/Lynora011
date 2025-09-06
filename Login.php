<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
  </style>
  <link rel="stylesheet" type="text/css" href="css/login.css">
<!-- Icons and ajax link -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
</head>
<body>

  <div class="login-box">
    <h2>Login Here</h2>
    <form id="login" action="php/logincheck.php" method="post">
      <h1 id="closebtn"><img src="img/close.svg" alt="Close" id="close"></h1>
      <input type="text" placeholder="Enter Name Here" name="Name" required>
      <input type="password" placeholder="Enter Password Here" name="Password" required>
      <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="signin.php">Sign up</a> here</p>

    <div class="social-login">
      <p>Log in with</p>
  <i><img src="img/facebook.svg" style="background: white;"></i>
      <!-- <i class="fab fa-instagram"></i> -->
      <i><img src="img/instagram.svg" style="background: white;"></i>
      <!-- <i class="fab fa-twitter"></i> -->
      <i><img src="img/linkedin.svg" style="background: white;"></i>
      <!-- <i class="fab fa-google"></i> -->
       <i><img src="img/google.svg" style="background: white;"></i>
      <!-- <i class="fab fa-skype"></i> -->
    </div>
  </div>

</body>
</html>
<script type="text/javascript">
  const closebtn=document.querySelector("#closebtn").addEventListener("click",function(){
    window.location.href="one.php";
  });

</script>