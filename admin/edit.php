<?php 
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Password'])){
include '../conn.php';

$Name = $_POST['Name'];
$Password = $_POST['Password'];

$qry = "SELECT * FROM login WHERE Name='$Name' AND Password='$Password'";
$result = mysqli_query($con, $qry);

if (mysqli_num_rows($result) == 1) {
    // Set session variables
    $_SESSION['Name'] = $Name;
    $_SESSION['Password'] = $Password;
     echo "<script>
            alert('Successfully logged in');
            window.location.href='../Client/test.php';
        </script>";
    } else {
        echo "<script>
            alert('Invalid username or password');
            window.location.href='test.php';
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
