<!DOCTYPE html>
<html>
<head>
    <!--Receives a comma-separated list of integers from an input
    form and creates a two-column table.-->
    <title>Sum of Digits</title>
    <style>
        table, td {
            border: 1px solid blue;
            margin: 10px;
        }
    </style>
</head>
<body>
<form method="post">
    Input string: <input type="text" name="numbers"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<table>
    <?php
    function sumFinder($num)
    {
        $numberLength = strlen($num);
        $number = intval($num);
        $sum = 0;
        for ($i = 0; $i < $numberLength; $i++) {
            $tempNumber = $number % 10;
            $sum += $tempNumber;
            $number /= 10;
        }
        return $sum;
    }

    if (isset($_POST['submit']) && !empty($_POST['numbers'])) {
        $stringNumbers = explode(", ", $_POST['numbers']);
        $numbersCount = count($stringNumbers);
        for ($i = 0; $i < $numbersCount; $i++) {
            $sumItem = sumFinder($stringNumbers[$i]);
            if ($sumItem > 0) {
                echo("<tr><td>$stringNumbers[$i]</td><td>$sumItem</td></tr>");
            } else {
                echo("<tr><td>$stringNumbers[$i]</td><td>I cannot sum that</td></tr>");
            }
        }
    }
    ?>
</table>
</body>
</html>