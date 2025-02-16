<?php

$favColor = array("red", "green", "blue");
$index = 1;

switch ($index) {
    case 0:
        echo "<p style='color:$favColor[$index]'> your favorite color is '$favColor[$index]'</p>";
        break;
    case 1:
        echo "<p style='color:$favColor[$index]'> your favorite color is '$favColor[$index]'</p>";
        break;
    case 2:
        echo "<p style='color:$favColor[$index]'> your favorite color is '$favColor[$index]'</p>";
        break;
    default:
        echo "<p style='color:gray'> you don't have favorite </p>";
}