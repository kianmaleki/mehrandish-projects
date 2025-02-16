<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr style="text-align:center;">
            <td>عدد</td>
            <td>توان دو</td>
            <td>توان سه</td>
        </tr>
        <?php
        for ($i = 0; $i <= 5; $i++) {
            echo ("<tr style='text-align:center;>");
            echo ('<td style="padding: 1rem;">' . $i . '</td>');
            echo ('<td style="padding: 1rem;">' . $i * $i . '</td>');
            echo ('<td style="padding: 1rem;">' . $i * $i * $i . '</td>');
            echo ("</tr>");
        }
        ?>
    </table>
</body>

</html>