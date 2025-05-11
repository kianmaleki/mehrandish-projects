<?php

session_start();

if(isset($_SESSION['counter'])){
    $_SESSION['counter']++;
}else{
    $_SESSION['counter'] = 1;
}

$msg = "You have visited this page ".$_SESSION['counter']." times";
$msg .= " in this session";

echo $msg;

echo "<a href='reset.php'>Reset</a>";

?>