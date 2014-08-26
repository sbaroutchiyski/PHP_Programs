<?php
// Prints the dates of all Sundays in the current month.
$month = date("F");
$daysOfMonth = date("t");
for ($i = 1; $i <= $daysOfMonth; $i++) {
    $tempDate = strtotime("$i $month");
    if (date("l", $tempDate) == "Sunday") {
        echo(date("jS F Y\n", $tempDate)."<br>");
    }
}
?>