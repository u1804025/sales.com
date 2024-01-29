<?php 
   //echo "hiiiiiii";
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

   $select= "SELECT * FROM sighups WHERE email = '$email'"  ;
   $result=mysqli_query($conn,$select);
   if(mysqli_num_rows($result)>0){
    echo"user already exists";
   }
   else{
        if($pass!=$cpass){
            echo"password not matched";

        }
        else{
            $insert = "INSERT INTO sighups (firstname, lastname, username , email, phoneno
        ,opassword, cpassword)
   	  values('$firstName ','$lastName', '$username', '$email', '$pnumber', '$pass', '$cpass')" ;
      
      mysqli_query($conn,$insert);
      header('location:signin.html');

        }

   }
}


?>