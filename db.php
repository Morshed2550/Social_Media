<?php

$host="localhost";
$dbname="sm";
$dbpass="";
$dbuser="root";

function getConnection(){
    global $host;
    global $dbname;
    global $dbpass;
    global $dbuser;
    $conn= mysqli_connect($host,$dbname,$dbuser,$dbpass)
    return $conn;
}
?>