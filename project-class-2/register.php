<?php
include('header.php');

$realname = $_POST['realname'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$email = $_POST['email'];

?>

<div>


    <?php

    echo "realname = $realname <br/>";
    echo "username = $username <br/>";
    echo "password = $password <br/>";
    echo "repassword = $repassword <br/>";
    echo "email = $email <br/>";


    ?>


</div>

<?php

include("footer.php");