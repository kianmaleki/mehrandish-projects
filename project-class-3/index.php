<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <select name="" id="color">
        <option value="default">انتخاب کنید</option>
        <?php
        $list = ["red" => "قرمز", "blue" => "ابی", "yellow" => "زرد"];
        foreach ($list as $key => $value) {
            echo "<option value='$key'>$value</option>";
        }
        ?>
    </select>

    <button onclick="changeColor()">set color</button>

    <script>
        const changeColor = () => {
            document.body.style.backgroundColor = document.getElementById('color').value;
        }
    </script>
</body>

</html>