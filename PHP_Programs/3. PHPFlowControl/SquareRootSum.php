<!DOCTYPE html>
<html>
<head>
    <!-- Print the square roots of even numbers  -->
    <meta charset="utf-8">
    <title>Square root Sum</title>
    <style>
        table, th, td {
            border: 1px solid grey;

        }

        th, #total {
            font-weight: bold;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Number</th>
        <th>Square</th>
    </tr>

    <?php
    $sum = 0;
    for ($i = 0; $i < 100; $i += 2) {
        $number = $i;
        $sqrt = number_format(sqrt($i), 2);
        $sum += $sqrt;
        echo("<tr><td>$i</td><td>$sqrt</td></tr>");
    }
    echo("<tr><td id='total'>Total: </td><td id='total'>$sum</td></tr>");
    ?>
</table>
</body>
</html>
