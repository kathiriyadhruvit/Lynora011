<?php
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Password'])) {

    include 'AdminHeader.php';
    include '../conn.php';

    $table = $_GET['table'];
    $p_id = $_GET['p_id'];

    // Old product details
    $query = "SELECT * FROM $table WHERE p_id = $p_id";
    $result = mysqli_query($con, $query);
    $product = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        // $title = $_POST['title'];
        $title = str_replace("'", "\'", $_POST['title']);
        $category = $_POST['category'];
        $description = str_replace("'", "\'", $_POST['description']);
     // $description = $_POST['description'];
        $price = $_POST['price'];

        // Default: keep old image
        $photo_name = $product['images'];  

        // If new image uploaded → replace
        if (!empty($_FILES['img']['name'])) {
            $photo_name = $_FILES['img']['name'];
            $temp_name = $_FILES['img']['tmp_name'];
            $upload_directory = "../uploads/";
            $upload_path = $upload_directory . $photo_name;
            move_uploaded_file($temp_name, $upload_path);
        }

        // Update query
        $query = "UPDATE $table 
                  SET title='$title', category='$category', description='$description', price='$price', images='$photo_name' 
                  WHERE p_id='$p_id'";

        if (mysqli_query($con, $query)) {
            echo '<script>alert("Product updated successfully!");
            window.location.href="Adminpanel.php";
            </script>';
        } else {
            echo "Error updating product: " . mysqli_error($con);
        }
    }
}
?>

<style type="text/css">
    form
    {
        background-color: skyblue;
    }
   .email{
    width: 200px;
   }


h2 {
    text-align: center;
    margin-top: 20px;
    color: #333;
}

form {
    background-color: #add8e6;
    width: 350px;
    margin: 30px auto;
    padding: 20px;
    border-radius: 8px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;

}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
textarea{
    width: 100%;

}

input[type="submit"] {
    padding: 8px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<style type="text/css">
    form
    {
        background-color: skyblue;
    }
</style>
<body>
    <center><h2>Update Product</h2></center>
    <form method="POST" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?= $product['title'] ?>"><br><br>

        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="male" <?= ($product['category'] == 'Car') ? 'selected' : ''; ?>>Car</option>
            <option value="female" <?= ($product['category'] == 'Bike') ? 'selected' : ''; ?>>Bike</option>
            <option value="kids" <?= ($product['category'] == 'Jeep') ? 'selected' : ''; ?>>Jeep</option>
        </select><br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description"><?= $product['description']; ?></textarea><br><br>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price" value="<?= $product['price']; ?>"><br><br>

         <label for="img">Image:</label>
        <img src="../uploads/<?php echo $product['images']; ?>" width="120" height="auto" alt="Old Image"><br><br>

        <label for="img">Image:</label>
        <input type="file" name="img" id="img"><br><br>

        <center><input type="submit" value="Update Product"></center>
    </form>
</body>
</html>
<div style="color:white; text-align:center;background:black; font-size:20px;margin-top:126px;">
 <h4>Made By:Kathiriya Dhruvit</h4><br>
            © 2025 Copyright: <h5>Lynora</h5>

</div>
<?php



?>