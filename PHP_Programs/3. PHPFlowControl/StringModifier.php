<!DOCTYPE html>
<html>
<!--Receives a string from an input form and modifies it according to the selected option (radio button).  -->
<head>
    <title>Modify String</title>
</head>
<body>
<form method="post">
    <input type="text" name="text"/>
    <input type="radio" name="operation" value="checkPalindrome"/>Check Palindrome
    <input type="radio" name="operation" value="stringReverse"/>Reverse String
    <input type="radio" name="operation" value="stringSplit"/>Split
    <input type="radio" name="operation" value="hashString"/>Hash String
    <input type="radio" name="operation" value="shuffleString"/>Shuffle String
    <input type="submit" name="submit"/>

</form>
<?php
if (isset($_POST['submit']) && !empty($_POST['text']) && isset($_POST['operation'])) {
    $operation = $_POST['operation'];
    $stringValue = $_POST['text'];
    if ($operation == "checkPalindrome") {
        if (strrev($stringValue) == $stringValue) {
            echo("$stringValue" . " is palindrome!");
        } else {
            echo("$stringValue" . " is not palindrome!");
        }
    }
    if ($operation == "stringReverse") {
        echo(strrev($stringValue));
    }
    if ($operation == "stringSplit") {
        $chars = preg_split('//', $stringValue, -1, PREG_SPLIT_NO_EMPTY);
        $combinedChars = implode(" ", $chars);
        echo($combinedChars);
    }
    if ($operation == "shuffleString") {
        echo(str_shuffle($stringValue));
    }
    if ($operation == "hashString") {
        echo(crypt($stringValue));
    }
}
?>
</body>
</html>