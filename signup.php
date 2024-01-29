<?php
if(isset($_POST['submit'])){

$firstname=filter_input(INPUT_POST,'fname');
$lastname=filter_input(INPUT_POST,'lname');
$username=filter_input(INPUT_POST,'uname');
$email=filter_input(INPUT_POST,'email');
$pnumber=filter_input(INPUT_POST,'pno');
$pass=filter_input(INPUT_POST,'pass');
$cpass=filter_input(INPUT_POST,'cpass');

    $host = "localhost";
    $dbusername = "root";
    $dbpass = "";
    $dbname = "salescom";
    $conn = new mysqli ($host, $dbusername, $dbpass, $dbname);
    if(mysqli_connect_error()){
        die('connect Error('.mysqli_connect_errno().')')
        .mysqli_connect_errno();
    }
    else{
        $sql="INSERT INTO sighups("First name,Last name,username,Email, Phone no,Password ,cpassword")
        values('$firstName ','$lastName',' $username', '$email', '$pnumber', '$pass','$cpass')" ;
        if($conn->query($sql)){
            echo "Registration done";
            header('location:signin.html');
            }
        else{
            echo '<script>alert("Matched Phone Number Try Again Please")</script>';
        
            }
            $conn->close();
    }
}

?>