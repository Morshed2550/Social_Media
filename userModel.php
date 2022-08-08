<?php
require_once('db.php');
function signup(){
    $conn=getConnection();
    $sql="insert into users value('',{$user['username']},{$user['password']})";
    if(mysqli_query($conn,$sql)){
        return true;
    }
    else{
        return false;
    }
}
?>