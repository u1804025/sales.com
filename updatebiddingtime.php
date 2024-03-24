<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:signinedit.php');
}
else{
$email=$_SESSION['email'];
}
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"salescom");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="uploadnew.css">
    <title>signup</title>
</head>
<body>
    <div class="signupbox">
        <h1>Update Your Products' Bidding time</h1>
        
        <form method="post" action="" enctype="multipart/form-data">
            <table>
               
                
                <tr>
                    <td>Bid Start Time</td>
                    <td><input type="datetime-local" name="bst" required></td>
                </tr>
                <tr>
                    <td>Bid End Time</td>
                    <td><input type="datetime-local" name="bet" required></td>
                </tr>
                
                <tr style="padding: 10px ;">
                    
                    <td colspan="2" ><input type="submit"name="submit1"value="Update"></td>
                </tr>
                
            </table>
            
        </form>
        <?php
        if(isset($_POST["submit1"])){
           
            $bst=filter_input(INPUT_POST, 'bst');
            $bet=filter_input(INPUT_POST, 'bet');
            date_default_timezone_set('Asia/Dhaka');
            mysqli_query($link,"INSERT INTO productnew values('$bst','$bet')");
            header('location:product.php');
            mysqli_query($link,"INSERT INTO bidding values('$bst','$bet')");
            header('location:product.php');
        }
        ?>
    </div>
            
</body>
</html>