<?php
include 'conn.php';
if (isset($_GET['p_id']))
{
    $p_id = $_GET['p_id'];
    $query = "DELETE FROM cart WHERE p_id = $p_id";
    
    if (mysqli_query($con, $query)) 
    {
        echo '<script>alert("Product deleted successfully!");</script>';
        header("Location:cart_show.php"); // Redirect to product list page
        exit;
    }
    else 
    {
        echo "Error deleting product: " . mysqli_error($con);
    }
}
else
{
    echo "Invalid parameters.";
    exit;
}
?>
