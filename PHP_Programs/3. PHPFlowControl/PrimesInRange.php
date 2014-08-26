<!DOCTYPE html>
<html>
<head>
    <!--Receives two numbers – start and end – from an input field
    and displays all numbers in that range as a comma-separated list
    -->
    <title>Find Primes in Range</title>
</head>
<body>
<form method="POST">
    Start Index: <input type="text" name="start"/>
    End: <input type="text" name="end"/>
    <input type="submit" name="submit" value="submit"/>
</form>
<?php
if (isset($_POST['submit']) && !empty($_POST['start']) && !empty($_POST['end'])) {
    $sequence = "";
    $begin = $_POST['start'];
    $end = $_POST['end'];
    for ($i = $begin; $i <= $end; $i++) {
        $number = $i;
        $count = 0;
        $isPrime = true;
        for ($j = 1; $j < $number; $j++) {
            if ($number % $j == 0) {
                $count++;
            }
            if ($count > 1) {
                $isPrime = false;
            }
        }
        if ($isPrime == true && $i > 1) {
            $sequence .= "<strong>" . "#$i" . "</strong>" . ", ";
        } else {
            $sequence .= "$i" . ", ";
        }
    }
    echo(chop($sequence, ", "));
}

?>
</body>
</html>