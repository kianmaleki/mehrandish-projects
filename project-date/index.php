<?php

$months = [
    "ژانویه" => 31,
    "فوریه" => 28,
    "مارس" => 31,
    "آوریل" => 30,
    "مه" => 31,
    "ژوئن" => 30,
    "ژوئیه" => 31,
    "اوت" => 31,
    "سپتامبر" => 30,
    "اکتبر" => 31,
    "نوامبر" => 30,
    "دسامبر" => 31
];

$days = ["شنبه", "یکشنبه", "دوشنبه", "سه‌شنبه", "چهارشنبه", "پنج‌شنبه", "جمعه"];

$startDay = 0;

foreach ($months as $month => $daysInMonth) {
    echo "<table border='1' cellspacing='0' cellpadding='5' style='width:100%;text-align:center'>";
    echo "<tr><th colspan='7'>$month</th></tr>";

    echo "<tr>";
    foreach ($days as $day) {
        echo "<th>$day</th>";
    }
    echo "</tr>";

    echo "<tr>";

    for ($i = 0; $i < $startDay; $i++) {
        echo "<td></td>";
    }

    for ($day = 1; $day <= $daysInMonth; $day++) {
        echo "<td>$day</td>";

        if (($startDay + $day) % 7 == 0) {
            echo "</tr><tr>";
        }
    }

    while (($startDay + $daysInMonth) % 7 != 0) {
        echo "<td></td>";
        $startDay++;
    }

    echo "</tr>";
    echo "</table><br>";

    $startDay = ($startDay + $daysInMonth) % 7;
}

?>