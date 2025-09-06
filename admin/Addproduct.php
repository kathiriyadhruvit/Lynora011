<?php
session_start();
error_reporting(0);
if (isset($_SESSION['Name']) && isset($_SESSION['Password'])){
$con = mysqli_connect("localhost", "root", "", "lynora");
$title = $_POST['title'];
$cat = $_POST['category1'];
$category = $_POST['category'];
$description = $_POST['Description'];
$price = $_POST['Price'];

$upload_directory = "../uploads/";
$photo_name = $_FILES['img']['name'];
$temp_name = $_FILES['img']['tmp_name'];
$upload_path = $upload_directory . $photo_name;


if ($category == "Car") {
    $table = "car";
} elseif ($category == "Bike") {
    $table = "bike";
} elseif ($category == "Jeep") {
    $table = "jeep";
} elseif ($category == "Trending") {
    $table = "treading_product";
}
 else {
    echo "<div style='color:red; background-color:orange; text-align:center; font-size:20px; padding:20px;'>Please select a valid category</div>";
}

if (move_uploaded_file($temp_name, $upload_path)) {
    $result = mysqli_query($con,"INSERT INTO $table(title, category, description, price, images) VALUES ('$title', '$cat', '$description', '$price', '$photo_name')");

    if ($result) {
        echo "<div style='color:green; background-color:orange; padding:20px;'>Product insert SuccessFully..</div>"; 
        include('Add_Product_Form.php');
        exit(); 
    } else {
        echo "Failed to insert product.";
    }
} else {
    echo "<div style='color:red; background-color:orange; text-align:center; font-size:20px; padding:20px;'>Image Upload Problem!!</div>";
     header('Location:Add_Product_Form.php');
        exit(); 
}

mysqli_close($con);
?>
<?php
}
else
{
    header("Location:login.php");
}
?>