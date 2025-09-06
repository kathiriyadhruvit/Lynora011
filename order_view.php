<?php 
include "header.php";
include "conn.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lynora</title>
	<style type="text/css">
		th
		{
			border: none;
		}
		td
		{
			text-align: center;
			height: 15vh;
			width: 15vw;
		}
		.img
		{
			height: auto;
			width: 10vw;
		}
	</style>
</head>
<body>
	<center><h1>Order Status</h1></center>
	<table align="center" border="1">
		<tr style="border:none;">
			<th>Image</th>
			<th>Name</th>
			<th>Price</th>
			<th>Qty</th>
			<th>Total</th>
			<th>Status</th>
		</tr>
		<?php 
		
		// if (!isset($_SESSION['Name'])) 
		// {
		// 	echo "<script>Please Login</script>";
		// 	header("Location:Login.php");
		// 	exit;
		// }
		// $username = $_SESSION['username'];
		$qry = mysqli_query($con, "SELECT * FROM check_out WHERE status='done'");

			while($row = mysqli_fetch_assoc($qry))
			{?>
    			<tr>
			        <td><img src="uploads/<?php echo $row['images']; ?>" height="50" width="50" class="img"></td>
			        <td><?php echo $row['p_name']; ?></td>
			      
			        <td><?php echo $row['price']; ?></td>
			        <td><?php echo $row['qty']; ?></td>
			        <td><?php echo $row['total']; ?></td>
			        <td><?php echo $row['status']; ?></td>
			    </tr>
			<?php 
			}
			?>
	</table>
</body>
</html>