<?php

include 'header.php';

if(isset($_SESSION['username']) && !empty($_SESSION['username']) && isset($_SESSION['password']) && !empty($_SESSION['password'])){
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    
}else{
    exit("fill the input");
}

$link = mysqli_connect('localhost', 'root', '', 'podman-5');

if(!$link){
    exit("Error:".mysqli_connect_error($link));
}

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($link, $sql);

if(!$result){
    exit("Error:".mysqli_error($link));
}

?>