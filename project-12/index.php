<?php

echo "<select>";
echo "<option value='select color'>select color</option>";

$color = array("red", "green", "blue", "yellow");

foreach ($color as $value) {
    echo "<option value='$value'>$value</option>";
}

echo "<select/>";
