<?php
// Declares a variable. If the variable is numeric, print it by the built-in function var_dump().
// If the variable is not numeric, print its type at the input.
$variable = 123.45;
if (is_numeric($variable)) {
    echo(var_dump($variable));
} else {
    echo(gettype($variable));
}
?>