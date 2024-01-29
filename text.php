<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:signineditadmin.php');
}
else{
$email=$_SESSION['email'];
$usemail=$_SESSION['uname'];
}
$host = "localhost";
        $dbusername = "root";
        $dbpass = "";
        $dbname = "salescom";
        $conn = new mysqli ($host, $dbusername, $dbpass, $dbname);
        $bp= "SELECT * FROM adminsignup WHERE email = '$email'"  ;
    $result=mysqli_query($conn,$bp);
    $rows=mysqli_fetch_array($result);
    $row0=$rows[0];
    echo $row0;
    echo $rows[1];
    echo $rows[2];
?>