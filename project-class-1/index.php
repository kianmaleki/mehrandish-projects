<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table * {
            padding: 1rem;

        }
    </style>
</head>

<body>
    <table border="1">
        <?php
        for ($i = 1; $i < 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j < 10; $j++) {
                echo "<td>$i * $j = " . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>