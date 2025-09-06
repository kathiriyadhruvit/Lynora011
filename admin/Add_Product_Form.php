<?php
session_start();
error_reporting(0);
if (isset($_SESSION['Name']) && isset($_SESSION['Password'])){
    include 'AdminHeader.php';
?>
 <link rel="stylesheet" type="text/css" href="Add_product.css">

    <form action="./Addproduct.php" method="post" enctype="multipart/form-data">
        <h2>Add Product</h2>
        <table>
            <tr>
                <td><label class="label">Product Title:</label></td>
                <td><input type="text" name="title" placeholder="Product Title" required><br></td>
            </tr>

            <tr>
                <td><label class="label">Product Category:</label></td>
                <td>
                    <select name="category" required>
                        <option value="">Select Category</option>
                        <option value="Trending">Trending</option>
                        <option value="Car">Car</option>
                        <option value="Bike">Bike</option>
                        <option value="Jeep">Jeep</option>
                    </select><br>
                </td>
            </tr>

            <tr>
                <td><label class="label">Sub-category:</label></td>
                <td>
                    <select name="category1" required>
                        <option value="">Select Product Sub-category</option>
                        <option value="Car">Car</option>
                        <option value="Bike">Bike</option>
                        <option value="Jeep">Jeep</option>
                    </select><br>
                </td>
            </tr>

            <tr>
                <td><label class="label">Product Description:</label></td>
                <td><input type="text" name="Description" placeholder="Product Description" required><br></td>
            </tr>

            <tr>
                <td><label class="label">Product Price (INR):</label></td>
                <td><input type="number" name="Price" placeholder="Product Price in INR" required><br></td>
            </tr>

            <tr>
                <td><label class="label">Upload Product Image:</label></td>
                <td><input type="file" name="img" required><br></td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" class="uploadbtn">Upload</button>
                </td>
            </tr>
        </table>
    </form>

    <div style="color:white; text-align:center;background:black; font-size:20px;">
        <h4>Made By:Kathiriya Dhruvit</h4><br>
        © 2025 Copyright: <h5>Lynora</h5>
    </div>
<?php
}
else 
{
    header("Location: login.php");
    exit;
}
?>



