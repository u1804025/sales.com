<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:signineditadmin.php');
}
else{
$email=$_SESSION['email'];
$ademail=$_SESSION['uname'];
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
      <link rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="product.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--navigation section-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4 fixed-top">
        <div class="container">
            <!--for just sales-->
            <a href="finalhtadmin.php" class="log" style="color:black;"><i class="fa-brands fa-weibo"></i>SALES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">

                <li class="nav-item">Admin</li>
                    
                    
                    
                    
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="productadmin.php">Shop</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="productgatema.php">My Products</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="adprof.php"><h4><?php echo $ademail ;    ?></h4></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="logoutadmin.php">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section id="featured " class="my-5 py-5">
        <div class="container  my-5 pb-3 ">
            <h3>Our Product Category</h3>
            <hr>
            <p>Here you can choose you products and bid for best price</p>
        </div>
        <div class="prod-row mx-auto container-fluid">
            <div class="products text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3"src="car12.jpg" alt="" style=" height: 200px;width: 240px;">
                <h5 class="p-name">𝔠𝔞𝔯𝔰</h5>
                
                <button class="prod-btn"><a href="cat_car_la.php">More</a></button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3"src="laptop22.jpg" alt="" style=" height: 200px;width: 240px;">
                <h5 class="p-name">𝖑𝖆𝖕𝖙𝖔𝖕</h5>
                
                <button class="prod-btn"><a href="cat_laptops_la.php">More</a></button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3"src="watch12.jpg" alt="" style=" height: 200px;width: 240px;">
                <h5 class="p-name">𝖜𝖆𝖙𝖈𝖍</h5>
               
                <button class="prod-btn"><a href="cat_watches_la.php">More</a></button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3"src="gym4.jpg" alt="" style=" height: 200px;width: 240px;">
                <h5 class="p-name">𝖌𝖞𝖒</h5>
                
                <button class="prod-btn"><a href="cat_gym_la.php">More</a></button>
            </div>
        </div>
        <div class="prod-row mx-auto container-fluid">
            <div class="products text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3"src="furniture53.jpg" alt="" style=" height: 200px;width: 240px;">
                <h5 class="p-name">𝖋𝖚𝖗𝖓𝖎𝖙𝖚𝖗𝖊</h5>
                
                <button class="prod-btn"><a href="cat_furniture_la.php">More</a></button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3"src="moto63.jpg" alt="" style=" height: 200px;width: 240px;">
                <h5 class="p-name">M𝕸𝖔𝖙𝖔𝖗 𝖇𝖎k𝖊</h5>
               
                <button class="prod-btn"><a href="cat_motorbike_la.php">More</a></button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3"src="mobile73.jpg" alt="" style=" height: 200px;width: 240px;">
                <h5 class="p-name">𝖒𝖔𝖇𝖎𝖑𝖊 𝖕𝖍𝖔𝖓𝖊</h5>
                
                <button class="prod-btn"><a href="cat_phone_la.php">More</a></button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3"src="cricket83.jpg" alt="" style=" height: 200px;width: 240px;">
                <h5 class="p-name">𝖘𝖕𝖔𝖗𝖙𝖘 & 𝖐𝖎𝖙𝖘</h5>
                
                <button class="prod-btn"><a href="cat_sports_la.php">More</a></button>
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