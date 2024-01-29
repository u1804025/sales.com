<?php 

        $connection = mysqli_connect("localhost","root","","salescom");
            
            if(isset($_POST['submit'])){
                session_start();
                $_SESSION['email']= $_POST['email'];

                $mail = $_POST['email'];
                
                $passwrd = $_POST['pass']; 

                $sqlselect = "SELECT * FROM adminsignup WHERE email = '$mail' AND opassword='$passwrd'"  ;
                
                $records = mysqli_query($connection,$sqlselect);
                
                
                  
                if(mysqli_num_rows($records) > 0){
                      //$field = mysqli_fetch_array( $records);
                     
                    header('location:finalhtadmin.php');
                     
                          
                     
                 
                  
                }
                else{
                    $error[]='Wrong Email or Password';
                    
                }
         }
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signinedit.css">
    <title>signin</title>
</head>
<body>
    <Div class="signinbox">
        <h1>SIGN IN</h1>
        <?php

        if(isset($error)) {
            foreach($error as $error){
                echo "<span class='errormsg'>$error</span>";
            };
        };
        ?>
        <form action="" method="post">
            <label>Email</label>
            <input type="email" placeholder="" required="required" name="email">
            <label>Password</label>
            <input type="password" placeholder="" required="required" name="pass">
            <div style="padding: 10px;">
            <input type="submit" name="submit"></input>
            </div>
        </form>
            

        

        


    </Div>
    <p class="out">Not have an account <a href="signupeditadmin.php">Sign up Here</a></p>
</body>
</html>