<?php 
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Password'])){
include '../conn.php';

$ida = $_REQUEST['p_id']; // ID from URL

$qry = mysqli_query($con, "DELETE FROM contact WHERE p_id = '$ida'");

if($qry) {
    echo "<script>
        alert('Record deleted successfully.');
        window.location.href='contact.php';
    </script>";
} else {
    echo "<script>
        alert('Record was not deleted.');
        window.location.href='contact.php';
    </script>";
}
?>
<?php 
}
else
{
    header("Location:login.php");
}
?>