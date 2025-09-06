<?php 
include 'header.php';
include 'conn.php';

// $id    = $_POST['p_id'];
$title = str_replace("'", "\'", $_POST['title']);
$price = $_POST['price'];
$image = $_POST['image'];
$qty   = $_POST['qty'];
$total = $qty * $price;
$_SESSION['Name'];
$qry = "INSERT INTO cart (images, title, price, qty, total, Name) 
        VALUES ('$image','$title','$price','$qty','$total','{$_SESSION['Name']}')";

$result = mysqli_query($con, $qry);

if($result){
   echo "<script>
          alert('Product Added in Cart');
          setTimeout(function(){
              window.location.href='one.php';
          }, 500);
        </script>";
} else {
   echo "Error: " . mysqli_error($con);
}
?>
