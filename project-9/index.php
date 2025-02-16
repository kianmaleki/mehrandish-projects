<?php

$score = 11;

if ($score > 10) {
    $color = "green";
} else {
    $color = "red";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: <?php echo ($color) ?>;">

</body>

</html>