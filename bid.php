<?php
if(isset($_POST['submit'])){
    $pid = filter_input(INPUT_POST, 'pid'); 
    
        $host = "localhost";
        $dbusername = "root";
        $dbpass = "";
        $dbname = "salescom";
        $conn = new mysqli ($host, $dbusername, $dbpass, $dbname);

    $bp= "SELECT * FROM productnew WHERE productid = '$pid'"  ;
    $result=mysqli_query($conn,$bp);
    $rows=mysqli_fetch_array($result);
    $pname=$rows[2];
    
    if(mysqli_num_rows($result)==0){
        $error[]='No such product id';
    }
    else
    {
        header('location:bidder.php');
       session_start();
       $_SESSION['pid']=$rows[1];
       
    }

}
session_start();
if(!isset($_SESSION['email'])){
    header('location:signinedit.php');
}
else{
$email=$_SESSION['email'];
$usemail=$_SESSION['uname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>
      <link rel="stylesheet" href="finalcss.css">
      <link rel="stylesheet" href="bid.css">
      <link rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="product.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--navigation section-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4 fixed-top">
        <div class="container">
            <!--for just sales-->
            <a href="finalht.php" class="log" style="color:black;"><i class="fa-brands fa-weibo"></i>SALES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">

                <li class="nav-item">User</li>
                    
                    
                    
                    
                    <!--font awesome -->
                    <li class="nav-item">
                        <i class="fa-solid fa-handshake-angle" aria-hidden="true"></i>  
                    </li>
                    <li class="nav-item">
                        <h4><?php echo $usemail ;    ?></h4>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Shop</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="productgatem.php">My Products</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section id="featured " class="my-5 py-5">
    <div class="signupbox" style="height: 640px ;width:400px;">
            <h1>Enter Your Desired Product ID</h1>
            <?php

            if(isset($error)) {
                foreach($error as $error){
                    echo "<span class='errormsg'>$error</span>";
                };
            };
            
            
            
            ?>
            <form method="post" action="">
                <div>
                <label>Product Id</label>
                <input type="number" placeholder="" name="pid" required>
                </div>
                <div>
                <input type="submit" name="submit" style="width: 170px;height: 40px;padding: 5px 10px;margin-top: 10px;margin-left:90px;font-size: 20px;"></input>
                </div>

            </form>
    
        


    </div>
       
    </section>


    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">SALES</a> </li>
                        <li><a href="#">AddreSS:Dhaka,Bangladesh</a> </li>
                        <li><a href="#">Phone:01834566811</a> </li>
                        <li><a href="#">Email:sbaruacuet@gmail.com</a> </li>
                    
                    </ul>
                </div>
               
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">Home</a> </li>
                        <li><a href="#">About us</a> </li>
                        <li><a href="#">Our services</a> </li>
                        <li><a href="#">Privacy policy</a> </li>
                        <li><a href="#">Contact us</a> </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a> </li>
                        <li><a href="#">Shipping</a> </li>
                        <li><a href="#">Returns</a> </li>
                        <li><a href="#">Payment options</a> </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Online shop</h4>
                    <ul>
                        <li><a href="#">Vehicle</a> </li>
                        <li><a href="#">Electronic device</a> </li>
                        <li><a href="#">Watch</a></li>
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Furniters</a></li>
                        <li><a href="#">Property</a></li>
                        <li><a href="#">Smartphone</a></li>
                        <li><a href="#">Sports & kids</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                   <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                   </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>