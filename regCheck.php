<?php

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];

if ($username == null || $password == null || $email == null) {
    echo "Invalid Username/Password/Email !!!";
}
else {
   $data = $username."|".$password."|".$email."\r\n";
   $file =fopen ('user.txt','a');
   fwrite($file,$data);
    header('location: login.html');
  
    
   }


?>