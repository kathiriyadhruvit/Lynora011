<?php
$con = mysqli_connect("localhost","root","","lynora");
$Name    = $_POST['Name'];
$Email   = $_POST['Email'];
$Mobile_no=$_POST['Mobile_no'];
$Message = $_POST['Message'];
$qry = mysqli_query($con,"INSERT INTO contact (Name,Email,Mobile_no,Message) VALUES ('$Name','$Email','$Mobile_no','$Message')");
if(isset($qry)) 
{
    echo "<script>
    alert('Successfully inserted record');
    window.location.href='../contact.php'; 
    </script>";
}
else
{
    echo "<script>
    alert('Error inserting record');
    window.location.href='../contact.php';
    </script>";
}
?>
