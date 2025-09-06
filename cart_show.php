<center><div>
<a href="order_view.php">Show Order Status</a>
<a href="one.php">Home</a>
</div></center><br><br>
<style type="text/css">
	*
	{
		margin: 0;
		padding: 0;
	}
	table
	{
		text-align: center;
	}
	th,tr,td
	{
		padding: 10px;
		margin: 10px;
	}
	img
	{
		width: 100px;
		height: 100px;
	}	
	a
	{
		text-decoration: none;
		margin-top: 200px;
		border: 1px solid black;
		background: red;
		font-size: 20;
		color: white;
		padding: 10px;
	}
	.BUY
	{
		background: blue;
	}
</style>
<?php 
error_reporting(0);
$Name=$_SESSION['Name'];
include "conn.php";
$qry="select * from cart where Name='$Name'";
$result=mysqli_query($con,$qry);
?>
<center>
	<h2>Cart Item</h2>
	<table border="1" cellspacing="10" cellpadding="20">
		<tr>
			<th>Image</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Qty</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
	
<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td><img src='uploads/{$row['images']}' alt='Product Image'></td>
            <td>{$row['title']}</td>
            <td>{$row['price']}</td>
            <td>{$row['qty']}</td>
            <td>{$row['total']}</td>
            <td>
                <a href='cart_delete.php?table=cart&p_id={$row['p_id']}'>Delete</a>
                <a href='check_out.php?table=cart&p_id={$row['p_id']}'class='BUY'>BUY NOW</a>
            </td>
          </tr>";
}
?>

	</table>
</center>