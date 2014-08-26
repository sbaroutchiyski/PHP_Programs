<?php
//Declares an integer variable N, and then finds all 3-digit numbers that
// are less or equal than N (<= N) and consist of unique digits. Print "no" if no such numbers exist.
$N = 1234;
$sequence = "";
if ($N < 102) {
    echo("no");
    return;
}
for ($i = 102; $i < $N; $i++) {
    $singles = $i % 10;
    $decimals = ($i / 10) % 10;
    $hundreds = ($i / 100) % 10;
    $number = $hundreds . $decimals . $singles;
    if ($i > 999) {
        break;
    }
    if ($singles != $decimals && $singles != $hundreds && $decimals != $hundreds) {
        $sequence = $sequence . $number . ", ";
    }
}

echo(chop($sequence, ", ")); // chop() - remove right symbols from the string.
?>