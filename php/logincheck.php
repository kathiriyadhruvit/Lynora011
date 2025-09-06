<?php
include '../conn.php';
$Name= $_POST['Name'];
$Password = $_POST['Password'];

$qry = "SELECT * FROM login WHERE Name='$Name' AND Password='$Password'";
$result = mysqli_query($con, $qry);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    $_SESSION['Name'] = $row['Name'];
    // $_SESSION['user_id'] = $row['user_id']; 

     echo "<script>
    alert('Sucessfully login');
    window.location.href='../one.php';
    </script>";
} else {
    echo "<script>
        setTimeout(function() {
            alert('Error invalid record');
            window.location.href = '../login.php';
        }, 10);
    </script>";
}

?>
 