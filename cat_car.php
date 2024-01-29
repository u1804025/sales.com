<?php
    $conn = mysqli_connect("localhost","root","","salescom");
    $sql='SELECT * FROM productnew WHERE productcategory = "Cars"' ;
    $result=mysqli_query($conn,$sql);
    $cars=mysqli_fetch_all($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 0){
        $error[]='No Product Available';
    }
    
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
      <style>
        .small-img-group{
            display:flex;
            justify-content:space-between;
        }
        .small-img-icon{
            flex-basis:24%;
            cursor:pointer;
            
        }
        .MainImg{
            height: 360px;
            width: 450px;
        }
         .prod-btn{
    background: #fb774b;
    transform: translateY(20px);
    opacity: 0;
    margin: none;
    border: none;
    transition: .3s all;
}
.row:hover .prod-btn{
    
    opacity: 1;
}
      </style>
    </head>
<body>
    <!--navigation section-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
        <div class="container">
            <!--for just sales-->
            <a href="#" class="log"><i class="fa-brands fa-weibo"></i>SALES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="finalht.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html">Login/Register</a>
                    </li>
                    <!--font awesome -->
                    <li class="nav-item">
                        <i class="fa fa-search" aria-hidden="true"></i>  
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
                <section class="container sproduct my-5 py-5" >
                <h2  style="font-size:30px;">𝖈𝖆𝖗𝖘</h2>
                <hr style="color: black;">
                <?php

        if(isset($error)) {
            foreach($error as $error){
                echo "<span class='errormsg' >$error</span>";
            };
        };
        ?>
                <?php foreach($cars as $car){?> 
                    <div class="row mt-5" >
                    <div class="col-lg-5 col-md col-12">
                        
                    <?php echo "<img  class='MainImg' src='{$car['productimage']}'  alt='hh'>";?>
                    </div>
                    <div class="col-lg-5 col-md col-12" >
                       
                        
                        <span>
                        <?php
                            echo"Product Id : ";
                            echo htmlspecialchars($car['productid']);
                            ?>
                            <br>
                            <?php
                            echo"Product Name : ";
                            echo htmlspecialchars($car['productname']);
                            ?>
                            <br>
                        <h4 style="padding:10px 0px 10px 0px;">Description: </h4>
                        <span><?php echo htmlspecialchars($car['pdescription']); ?></span>
                        
            
            
            <br>


                        </span><br>
                        <br>
                        <h4 style="font-family:verdana;">Base price : Tk <?php
                            echo htmlspecialchars($car['productprice']);
                            ?></h4><br>
                                          
                        <a href="buynow.html"><button class="prod-btn"style="border:0px solid;background-color:tomato;color:black;" class="my-3 py-3">Bid now </button></a>
                       
                    </div>
                    </div>
                    <?php }?>
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