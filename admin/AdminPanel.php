<?php 
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Password'])) {
    include 'AdminHeader.php';
    include '../conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lynora</title>
	<style type="text/css">
		table {
			width: 100%;
		}
		th, td {
			padding: 5px;
			border: 1px solid black;
		}
		img {
			height: 100px;
			width: 100px;
		}
		a {
			text-decoration: none;
			margin-left: 1px;
			gap: 200px;

		}
	</style>
</head>
<body>
	<center><b><u><h2>All Product</h2></u></b>
		<b><u><h2>Trending Product</h2></u></b>
	</center>
	<table cellpadding="10" cellspacing="10" border="2">
		<tr>
			<th>Id</th><th>Name</th><th>Category</th><th>Description</th><th>Price</th><th>Images</th><th>Action</th>
		</tr>
		<?php
		$qry = mysqli_query($con, "SELECT * FROM treading_product");

		while ($row = mysqli_fetch_assoc($qry)) {
		    echo "<tr>
		            <td>{$row['p_id']}</td>
		            <td>{$row['title']}</td>
		            <td>{$row['category']}</td>
		            <td>{$row['description']}</td>
		            <td>{$row['price']}</td>
		            <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
		            <td>
		                <a href='update.php?table=treading_product&p_id={$row['p_id']}'>Update</a>
		                <a href='delete.php?table=treading_product&p_id={$row['p_id']}'>Delete</a>
		            </td>
		          </tr>";
		}
		?>
	</table>

	<center><b><u><h2>Car Product</h2></u></b></center>
	<table>
		<tr>
			<th>Id</th><th>Name</th><th>Category</th><th>Description</th><th>Price</th><th>Images</th><th>Action</th>
		</tr>
		<?php
		$qry = mysqli_query($con, "SELECT * FROM car");

		while ($row = mysqli_fetch_assoc($qry)) {
		    echo "<tr>
		            <td>{$row['p_id']}</td>
		            <td>{$row['title']}</td>
		            <td>{$row['category']}</td>
		            <td>{$row['description']}</td>
		            <td>{$row['price']}</td>
		            <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
		            <td>
		                <a href='update.php?table=car&p_id={$row['p_id']}'>Update</a>
		                <a href='delete.php?table=car&p_id={$row['p_id']}'>Delete</a>
		            </td>
		          </tr>";
		}
		?>
	</table>

	<center><b><u><h2>Bike Product</h2></u></b></center>
	<table>
		<tr>
			<th>Id</th><th>Name</th><th>Category</th><th>Description</th><th>Price</th><th>Images</th><th>Action</th>
		</tr>
		<?php
		$qry = mysqli_query($con, "SELECT * FROM bike");

		while ($row = mysqli_fetch_assoc($qry)) {
		    echo "<tr>
		            <td>{$row['p_id']}</td>
		            <td>{$row['title']}</td>
		            <td>{$row['category']}</td>
		            <td>{$row['description']}</td>
		            <td>{$row['price']}</td>
		            <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
		            <td>
		                <a href='update.php?table=bike&p_id={$row['p_id']}'>Update</a>
		                <a href='delete.php?table=bike&p_id={$row['p_id']}'>Delete</a>
		            </td>
		          </tr>";
		}
		?>
	</table>

	<center><b><u><h2>Jeep Product</h2></u></b></center>
	<table>
		<tr>
			<th>Id</th><th>Name</th><th>Category</th><th>Description</th><th>Price</th><th>Images</th><th>Action</th>
		</tr>
		<?php
		$qry = mysqli_query($con, "SELECT * FROM jeep");

		while ($row = mysqli_fetch_assoc($qry)) {
		    echo "<tr>
		            <td>{$row['p_id']}</td>
		            <td>{$row['title']}</td>
		            <td>{$row['category']}</td>
		            <td>{$row['description']}</td>
		            <td>{$row['price']}</td>
		            <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
		            <td>
		                <a href='update.php?table=jeep&p_id={$row['p_id']}'>Update</a>
		                <a href='delete.php?table=jeep&p_id={$row['p_id']}'>Delete</a>
		            </td>
		          </tr>";
		}
		?>
	</table>

	<div style="color:white; text-align:center;background:black; font-size:20px;">
		<h4>Made By:Kathiriya Dhruvit</h4><br>
        © 2025 Copyright: <h5>Lynora</h5>
	</div>
</body>
</html>

<?php
}
else 
{
    include 'login.php';
}
?>

