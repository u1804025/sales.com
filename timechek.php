<?php
date_default_timezone_set('Asia/Dhaka');
$time=date("Y-m-d H:i:s");
$host = "localhost";
        $dbusername = "root";
        $dbpass = "";
        $dbname = "salescom";
        $conn = new mysqli ($host, $dbusername, $dbpass, $dbname);
        
        
         $sql="SELECT * FROM bidding WHERE baseprice < currentprice && bet<'$time'" ;
        $result=mysqli_query($conn,$sql);
        $cars=mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($cars as $car){
            $prodid=$car['prodid'];
            $bemail=$car['bidderemail'];
            $upemail="SELECT * FROM productnew WHERE productid = '$prodid'";
            $upe=mysqli_query($conn,$upemail);
            $rowup=mysqli_fetch_array($upe);
            $uploaderemail=$rowup[0];
            $cprice=$car['currentprice'];
            $insert = "INSERT INTO soldp 
            values('$prodid','$bemail', '$uploaderemail','$cprice')" ;
             mysqli_query($conn,$insert);
             $deletedb= "DELETE FROM bidding  WHERE prodid='$prodid'"  ; 
                                mysqli_query($conn,$deletedb);
            $deletedp= "DELETE FROM productnew  WHERE productid='$prodid'"  ; 
                                mysqli_query($conn,$deletedp);
        }
        $deletedi= "DELETE FROM productnew WHERE bet < '$time'"  ; 
                                mysqli_query($conn,$deletedi);
        $deletebi= "DELETE FROM bidding WHERE bet < '$time'"  ; 
                                mysqli_query($conn,$deletebi);
                                ?>