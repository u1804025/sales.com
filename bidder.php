<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:signinedit.php');
}
else{
$email=$_SESSION['email'];
$usemail=$_SESSION['uname'];
}
    $pid=$_SESSION['pid'];
    echo $pid;
    $host = "localhost";
        $dbusername = "root";
        $dbpass = "";
        $dbname = "salescom";
        $conn = new mysqli ($host, $dbusername, $dbpass, $dbname);
        $bp= "SELECT * FROM productnew WHERE productid = '$pid'"  ;
    $result=mysqli_query($conn,$bp);
    $rows=mysqli_fetch_array($result);
    $prodid=$rows[1];
    $baseprice=$rows[3];
    $bidderemail=$email;
    $produploaderemail=$rows[0];
    $prodimage=$rows[4];
    $prodname=$rows[2];
    $bprice=$baseprice;
    $currentprice=$baseprice;
    $bst=$rows[7];
    $bet=$rows[8];
    date_default_timezone_set('Asia/Dhaka');
    $cu= "SELECT * FROM bidding WHERE prodid = '$pid'"  ;
                            $res=mysqli_query($conn,$cu);
                            $row=mysqli_fetch_array($res);
                            $prodc=$row[4];
                            
    if(isset($_POST['submit'])){
        if(date("Y-m-d H:i:s")>=$bst && date("Y-m-d H:i:s")<=$bet)
    {
        $cusbid = $_POST['bid'];
        
        $update="UPDATE bidding SET cusbid=$cusbid WHERE prodid = '$pid'";
        $updated="UPDATE bidding SET currentprice=currentprice+$cusbid WHERE prodid = '$pid'";
        $updat="UPDATE bidding SET bidderemail='$email' WHERE prodid = '$pid'";
        mysqli_query($conn,$update);
        mysqli_query($conn,$updated);
        mysqli_query($conn,$updat);
                
    }
    else if(date("Y-m-d H:i:s")<$bst){
        $error[]='Not The time Yet';
    
    }
    else if(date("Y-m-d H:i:s")>$bet){
        $error[]='Bidding time is over';
    
        

    }
                
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

                <li class="nav-item"><a class="nav-link" href="cusprof.php">User</a></li>
                    
                    
                    
                    
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
    
                <section class="container sproduct my-5 py-5" >
                <h2  style="font-size:30px;">Bid for your product</h2>
                <hr style="color: black;">
                
             
                    <div class="row mt-5" >
                    <div class="col-lg-5 col-md col-12">
                        
                    <?php echo "<img  class='MainImg' src='{$rows[4]}'  alt='hh'>";?>
                    </div>
                    <div class="col-lg-5 col-md col-12" >
                       
                        
                        <span>
                        <?php
                            echo"Product Id : ";
                            echo $prodid;
                            ?>
                            <br>
                            <?php
                            echo"Product Name : ";
                            echo $prodname;
                            ?>
                            <br>
                            <?php
                            echo"Product Uploader Email : ";
                            echo $produploaderemail;
                            ?>
                            <br>
                            <?php
                            echo"Bidding Start Time : ";
                            echo $rows[7];
                            ?>
                            <br>
                            <?php
                            echo"Bidding End Time : ";
                            echo $rows[8];
                            ?>
                            <br>
                            
                            <br>
                    


                        </span><br>
                        <br>
                        <h4 style="font-family:verdana;">Base price : Tk <?php
                            echo $baseprice;
                            ?></h4><br>
                        <h4 style="font-family:verdana;">Current price : Tk 
                            <?php
                            $cu= "SELECT * FROM bidding WHERE prodid = '$pid'"  ;
                            $res=mysqli_query($conn,$cu);
                            $row=mysqli_fetch_array($res);
                            $prodc=$row[4];
                            echo $prodc;
                            ?></h4><br>
                            <form action=""method="post">
                            <label style="background-color:coral ;">Add more money to get the product</label>
                            <input type="number"name="bid" value="Enter Your Bid" style="width:190px;"></input>
                            <input type="submit" name="submit" value="BID" style="background-color: grey;width:80px;"></input>
                            <?php
        
        if(isset($error)) {
            foreach($error as $error){
                echo "<br>";
                echo "<span class='errormsg' style='background-color: coral;'>$error</span>";
            };
        };
        ?>
                            </form>             
                        
                       
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
