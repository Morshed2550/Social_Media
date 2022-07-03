<?php

session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == null || $password == null) {
    echo "Invalid Username/Password !!!";
}
else {
    $file = fopen('user.txt','r');
    while (!feof($file)) {
        $line = fgets($file);
        $user = explode('|', $line);
        echo "<br>";

        if ($username == trim($user[0]) && $password ==trim($user[1])) {
            setcookie('status', 'true', time()+3600,'/');
            header('location:profile.html');
        }
    }

    echo "Invalid User !!!";
}

?>