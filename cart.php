<?php
include 'header.php';
include 'conn.php';
$title =$_GET['title'];
$price = $_GET['price'];
$image = $_GET['image'];
$p_id = $_GET['p_id'];
?>
<style>
   h1 {
    text-align: center;
    font-size: 28px;
    color: #333;
   } 
   table {
    margin: 20px auto;
    width: 70%;
    background: #f9f9f9;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 1px 3px 1px 3px white;
    transition: transform 0.3s ease;
   }
   table:hover {
    transform: scale(1.02);
   }
   th, td {
    border: 1px solid #ccc;
    padding: 20px;
    text-align: center;
    font-size: 18px;
   }
   th {
    background: #3498db;
    color: white;
   }
   tr:hover {
    background: #ecf0f1;
   }
   td img {
    border-radius: 8px;
    transition: transform 0.3s ease;
   }
   td img:hover {
    transform: scale(1.04);
   }
   form {
    text-align: center;
    background: #f1f1f1;
    border: 1px solid #ccc;
    width: 50%;
    margin: 20px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
   }
   label {
    font-size: 18px;
    font-weight: bold;
    margin-right: 10px;
   }
   #qty {
    padding: 5px;
    font-size: 16px;
    width: 70px;
    text-align: center;
    border: 1px solid #aaa;
    border-radius: 6px;
   }
   #total {
    font-size: 20px;
    font-weight: bold;
    margin: 15px 0;
    color: #2c3e50;
   }
   .buy {
    padding: 10px 25px;
    border-radius: 6px;
    background: #3498db;
    color: white;
    border: none;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
   }
   .buy:hover {
    background: #2980b9;
    box-shadow: 0 6px 12px rgba(0,0,0,0.2);
   }
</style>

<h1>Add To Cart</h1>
<div class="cart-item">
    <center>
    <table>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Price</th>
        </tr>
        <tr>
            <td><img src="uploads/<?= $image; ?>" alt="Product Image" style="width: 100px; height: 100px;"></td>
            <td><h3><?= $title; ?></h3></td>
            <td><p>₹<?= $price; ?></p></td>
        </tr>
    </table>
    </center>

    <form action="cart1.php" method="post">
        <input type="hidden" name="title" value="<?= $title;?>">
        <input type="hidden" name="price" value="<?= $price; ?>">
        <input type="hidden" name="image" value="<?= $image; ?>">
        <input type="hidden" name="p_id" value="<?= $p_id; ?>">

        <label for="qty">Quantity:</label>
        <input type="number" id="qty" name="qty" value="1" min="1" onchange="updateTotal()" required><br>

        <p id="total">Total: ₹<?= $price; ?></p>

        <button type="submit" name="buy_now" class="buy">ADD TO CART</button>
    </form>
</div>

<script>
function updateTotal() {
    let qty = document.getElementById('qty').value;
    let price = <?= $price; ?>;
    document.getElementById('total').innerText = "Total: ₹" + (qty * price);
}
</script>
