<?php 
 
  if(isset($_POST['submit'])){
            $firstName = filter_input(INPUT_POST, 'fname'); 
            $lastName = filter_input(INPUT_POST, 'lname');
            $username = filter_input(INPUT_POST, 'uname');
            $email = filter_input(INPUT_POST, 'email');
            $pnumber = filter_input(INPUT_POST, 'pno');
            $pass = filter_input(INPUT_POST, 'pass');
            $cpass = filter_input(INPUT_POST, 'cpass');
            $host = "localhost";
                $dbusername = "root";
                $dbpass = "";
                $dbname = "salescom";
                $conn = new mysqli ($host, $dbusername, $dbpass, $dbname);

            $select= "SELECT * FROM adminsignup WHERE email = '$email'"  ;
            $result=mysqli_query($conn,$select);
            if(mysqli_num_rows($result)>0){
                $error[]='user already exists';
            }
            else{
                    if($pass!=$cpass){
                        $error[]='password not matched';

                    }
                    else{
                        $insert = "INSERT INTO adminsignup (firstname, lastname, username , email, phoneno
                    ,opassword, cpassword)
                values('$firstName ','$lastName', '$username', '$email', '$pnumber', '$pass', '$cpass')" ;
                
                mysqli_query($conn,$insert);
                //$error[]='Successfully Signed up';
                header('location:signineditadmin.php');

                    }

            }
   
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signupedit.css">
    
      
    <title>signup</title>
</head>
<body>
    
    <div class="signupbox" style="height: 640px ;width:400px;">
        <h1>SIGN UP</h1>
        <h4>It's free and only takes a minute</h4>
        <?php

        if(isset($error)) {
            foreach($error as $error){
                echo "<span class='errormsg'>$error</span>";
            };
        };
        
        
        
        ?>
        <form method="post" action="">
            <div>
            <label>First Name</label>
            <input type="text" placeholder="" name="fname">
            </div>
            <div>
            <label>Last Name</label>
            <input type="text" placeholder=""name="lname">
           </div>
           <div>
            <label>Username</label>
            <input type="text" placeholder=""name="uname" required="required">
        </div>
        <div>
            <label>Email</label>
            <input type="email" placeholder="" required="required" name="email">
        </div>
        <div>
            <label>Phone no</label>
            <input type="tel" placeholder="" required="required" name="pno">
            </div>
            <div>
            <label>Password</label>
            <input type="password" placeholder=""required="required" name="pass">
        </div>
            
            <div>
            <label>Confirm Password</label>
            <input type="password" placeholder="" required="required" name="cpass">
        </div>
        <div>
            <input type="submit" name="submit" style="width: 385px;height: 35px;padding: 5px 10px;margin-top: 10px;font-size: 20px;"></input>
            </div>

        </form>
            <p>By clicking the sign up button , you agree to our<br><a href="#">Terms & Condition </a> and <a href="#">Privacy & Policy</a> </p>

        


    </div>
    <p class="out">Already have an account <a href="signineditadmin.html">Login Here</a></p>
    
</body>
</html>