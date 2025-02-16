<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <?php
        $n = 1;
        $code = "";

        while ($n <= 5) {
            $code .= "<input type='text' id='student$n' name = 'student$n'/>نام خانوادگی دانش اموز $n <br/>";
            $n++;
        }
        echo $code;
        ?>
        <input type="submit" value="ثبت">
        <input type="reset" value="جدید">
    </form>
</body>

</html>