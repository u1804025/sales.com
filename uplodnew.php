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
        <h1>Upload Your Products</h1>
        <h4>It's free and only takes a minute</h4>
        <form method="post" action="" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Product Name</td>
                    <td><input type="text"name="pnm" required></td>
                </tr>
                <tr>
                    <td>Product Price</td>
                    <td><input type="text"name="pprice"required></td>
                </tr>
                <tr>
                    <td> Category</td>
                    <td>
                        <select name="pcategory">
                            <option value="Cars">Cars</option>
                            <option value="Laptops">Laptops</option>
                            <option value="Watches">Watches</option>
                            <option value="Gym">Gym</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Motorbike">Motorbike</option>
                            <option value="Mobilephone">Mobile Phone</option>
                            <option value="sports">Sports & fits</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Product Image</td>
                    <td><input type="file"name="pimage" required></td>
                </tr>
                <tr>
                    <td>Product Description</td>
                    <td>
                        <textarea cols="36"rows="10"name="pdesc"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Bid Start Time</td>
                    <td><input type="datetime-local" name="bst" required></td>
                </tr>
                <tr>
                    <td>Bid End Time</td>
                    <td><input type="datetime-local" name="bet" required></td>
                </tr>
                
                <tr style="padding: 10px ;">
                    
                    <td colspan="2" ><input type="submit"name="submit1"value="Upload"></td>
                </tr>
                
            </table>
            
        </form>
        <?php
        if(isset($_POST["submit1"])){
            $v1=rand(1111,999);
            $v2=rand(1111,999);
            $v3=$v1.$v2;
            $v3=md5($v3);
            $fnm=$_FILES["pimage"]["name"];
            $dst="./productimage/".$v3.$fnm;
            $dst1="productimage/".$v3.$fnm;
            move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
            $pnm = filter_input(INPUT_POST, 'pnm'); 
            $pprice = filter_input(INPUT_POST, 'pprice');
            $pimage = filter_input(INPUT_POST, 'dst1');
            $pcategory = filter_input(INPUT_POST, 'pcategory');
            $pdesc = filter_input(INPUT_POST, 'pdesc');
            $bst=filter_input(INPUT_POST, 'bst');
            $bet=filter_input(INPUT_POST, 'bet');
            date_default_timezone_set('Asia/Dhaka');
            mysqli_query($link,"INSERT INTO productnew values('$email','','$pnm','$pprice','$dst1','$pcategory','$pdesc','$bst','$bet')");
            header('location:product.php');
            mysqli_query($link,"INSERT INTO bidding values('','','0','$pprice','$pprice','$bst','$bet')");
            header('location:product.php');
        }
        ?>
    </div>
            
</body>
</html>