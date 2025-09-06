<?php 
include "conn.php";

if (isset($_POST['submit'])) {
    $pimages = $_POST['images'];
    $pname = $_POST['title'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $_POST['total'];
    $method = $_POST['payment_method'];
    $address=$_POST['address'];

    $qry = "INSERT INTO check_out (images, p_name,price, qty,address, total, payment_method) 
            VALUES ('$pimages', '$pname', '$price', '$qty','$address', '$total', '$method')";

    $result = mysqli_query($con, $qry);

    if ($result) 
    {
        echo "<script>alert('Your Order Success placed');</script>";
        header("Location:cart_show.php");
        exit();
    } 
    else 
    {
        echo "<script>alert('Your Order Not placed');</script>";
        header("Location:check_out.php");
        exit();
    }
}
?>
