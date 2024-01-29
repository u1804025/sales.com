<?php
$host = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "salescom";
$conn = new mysqli ($host, $dbusername, $dbpass, $dbname);
$sql='SELECT * FROM bidding WHERE baseprice <= currentprice' ;
        $result=mysqli_query($conn,$sql);
        $cars=mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($cars as $car)
        {$new=$car['prodid'];
                $new1=$car['bidderemail'];
                $new2=$car['cusbid'];
                $new3=$car['currentprice'];
                echo $new;
                echo $new1;echo $new2;echo $new3;
        }
?>