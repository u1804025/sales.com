<?php
require 'timechek.php';
session_start();
if(!isset($_SESSION['email'])){
    header('location:signinedit.php');
}
else{
$email=$_SESSION['email'];
}
$host = "localhost";
        $dbusername = "root";
        $dbpass = "";
        $dbname = "salescom";
        $conn = new mysqli ($host, $dbusername, $dbpass, $dbname);
        $cu= "SELECT * FROM sighups WHERE email = '$email'"  ;
                            $res=mysqli_query($conn,$cu);
                            $row=mysqli_fetch_array($res);
                            $usemail=$row[3];
                            $_SESSION['uname']=$usemail;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>
      <link rel="stylesheet" href="finalcss.css">
      <link rel="stylesheet" href="footer.css">
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
                    
                    
                    
                    
                   
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Shop</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="productgatem.php">My Products</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="cusprof.php"><h4 style="padding-top:4px;padding-left:4px;"><?php echo $usemail ;    ?></h4></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    

                </ul>
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="container">
            <h5 style="color:tomato;font-size:25px;padding :5px 2px 0px 0px;">WE SERVE ALL OVER THE BANGLADESH!</h5>
            <button> <a  href="uplodnew.php">Sell your products here</a></button>
        </div>
       </section>

    <section id="new1" class="w-100">
        <h3  style="padding-left:40px;padding-top: 40px;"> Our Product Category</h3>
        <hr>
        <div class="row p-5 m-5">
            <div style="text-align:center;font-size:55px;" class="one">
                <a href="cat_car_L.php"><img class="imgs" src="car11.jpg"></a>
                <h3>𝔠𝔞𝔯𝔰</h3>
            </div>
            <div style="text-align:center;font-size:55px;" class="one">
                <a href="cat_laptops_l.php"><img class="imgs" src="laptop2.jpg"></a>
                <h3>𝖑𝖆𝖕𝖙𝖔𝖕</h3>
            </div>
            <div style="text-align:center;font-size:55px;" class="one">
                <a href="cat_watches_l.php"><img class="imgs" src="cat3.jpg"></a>
                <h3>𝖜𝖆𝖙𝖈𝖍</h3>
            </div>
            <div style="text-align:center;font-size:55px;" class="one">
                <a href="cat_gym_l.php"><img class="imgs" src="gym4.jpg"></a>
                <h3>𝖌𝖞𝖒</h3>
            </div>
            <div style="text-align:center;font-size:55px;" class="one">
                <a href="cat_furniture_l.php"><img class="imgs" src="cat5.jpg"></a>
                <h3>𝖋𝖚𝖗𝖓𝖎𝖙𝖚𝖗𝖊</h3>
            </div>   
            <div style="text-align:center;font-size:55px;" class="one">
                <a href="cat_motorbike_l.php"><img class="imgs" src="moto61.jpg"></a>
                <h3>M𝕸𝖔𝖙𝖔𝖗 𝖇𝖎𝖐𝖊</h3>
            </div>
            <div style="text-align:center;font-size:55px;" class="one">
                <a href="cat_phone_l.php"><img class="imgs" src="cat7.jpg"></a>
                <h3>𝖒𝖔𝖇𝖎𝖑𝖊 𝖕𝖍𝖔𝖓𝖊</h3>
            </div>
            <div style="text-align:center;font-size:55px;"  class="one">
                <a href="cat_sports_l.php"><img class="imgs" src="cat8.jpg"></a>
                <h3>𝖘𝖕𝖔𝖗𝖙𝖘 & 𝖐𝖎𝖙𝖘</h3>
            </div>
            
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
                        <li><a href="finalht.php">Home</a> </li>
                        <li><a href="about.php">About us</a> </li>
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
                        <li><a href="cat_car_L.php">Car</a> </li>
                        <li><a href="cat_laptops_l.php">Laptops</a> </li>
                        <li><a href="cat_watches_l.php">Watch</a></li>
                        <li><a href="cat_gym_l.php">Gym</a></li>
                        <li><a href="cat_furniture_l,php">Furniters</a></li>
                        <li><a href="cat_motorbile_l.php">Motorbike</a></li>
                        <li><a href="cat_phone_l.php">Phone</a></li>
                        <li><a href="cat_sports_l.php">Sports & kids</a></li>
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