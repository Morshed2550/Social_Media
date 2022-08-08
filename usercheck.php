<?php 

    $json = $_POST['data'];
    //sleep(3);
    $student = json_decode($json);
    //print_r($student);
    echo $student->username;
    
    $student = ['username'=>'maxmorshed', 'password'=>'123', 'email'=>'morshedulislam19@gmail.com'];
    $json = json_encode($student);
    echo $json;
?>