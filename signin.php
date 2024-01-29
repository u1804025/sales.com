<?php 

        $connection = mysqli_connect("localhost","root","","salescom");
            
            if(isset($_POST['submit'])){

                $mail = $_POST['email'];
                
                $passwrd = $_POST['pass']; 

                $sqlselect = "SELECT * FROM sighups WHERE email = '$mail' AND opassword='$passwrd'"  ;

                $records = mysqli_query($connection,$sqlselect);
                  
                if(mysqli_num_rows($records) > 0){
                      //$field = mysqli_fetch_array( $records);
                     // echo "Hiiiiii";
                     header('location:finalht.html');
                     
                          
                     
                 
                  
                }
                else{
                    
                    echo"Wrong ID or Password";
                }
         }
?>
 