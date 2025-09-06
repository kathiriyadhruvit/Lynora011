<?php 
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Password'])){
	include 'AdminHeader.php';
	include '../conn.php';
?>
		<h1>CONTACT DATA DISPLAY</h1><HR><hr><hr><br>	
	<center><table border="1" cellspacing="15" cellpadding="15">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile_no</th>
			<th>Message</th>
			<th>Action</th>
		</tr>
	<?php
	$query=mysqli_query($con,"select * from contact");
	while($r=mysqli_fetch_assoc($query))
		{?>
			<!-- php code -->

			<!-- echo "<tr>";
			echo "<td>{$r['Name']}</td>";
			echo "<td>{$r['Email']}</td>";
			echo "<td>{$r['Mobile_No']}</td>";

			"</tr>"; -->
			<!-- html code short php print -->
			<!-- <tr>
			<td><?=$r['Name'];?></td>
			<td><?= $r['Email'];?></td>
			<td><?= $r['Mobile_No'];?></td>	
			</tr> -->
			<!-- orrrrrrr -->
			<td><?php echo$r['Name'];?></td>
			<td><?php echo $r['Email'];?></td>
			<td><?php echo  $r['Message'];?></td>	
			<td><?php echo  $r['Mobile_no'];?></td>	
			<td>
			<a href="delc.php?p_id=<?= $r['p_id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>


			</td>
			</tr>
			<?php }?>
	</center>
	</table>
	<div style="color:white; text-align:center;background:black; font-size:20px;margin-top:215px;">
 <h4>Made By:Kathiriya Dhruvit</h4><br>
            © 2025 Copyright: <h5>Lynora</h5>

</div>
<?php
}
else
{
	header("Location:login.php");
}
?>