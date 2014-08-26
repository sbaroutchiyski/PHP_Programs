<!DOCTYPE html>
<html>
<head>
<!-- Receives n years from an input HTML form and creates a table with random expenses
     by months and the corresponding years (n years back).
-->
    <title>Show Annual Expenses</title>
    <style>
        table, th, td {
            border: 1px solid black;
            margin: 10px;
            text-align: center;
        }

        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
<form action="" method="post">
    Enter number of years: <input type="text" name="years"/>
    <input type="submit" name="submit" value="Show result"/>
    <table>
        <?php
        if (isset($_POST['submit']) && !empty($_POST['years'])) {
            echo("<tr><th>Years</th>");
            echo("<th>January</th>");
            echo("<th>February</th>");
            echo("<th>March</th>");
            echo("<th>April</th>");
            echo("<th>May</th>");
            echo("<th>June</th>");
            echo("<th>July</th>");
            echo("<th>August</th>");
            echo("<th>September</th>");
            echo("<th>October</th>");
            echo("<th>November</th>");
            echo("<th>December</th>");
            echo("<th>Total:</th></tr>");
            $yearsCount = $_POST['years'];
            $currentYear = date("Y");
            for ($i = 0; $i < $yearsCount; $i++) {
                echo("<tr>");

                $previousYear = $currentYear - $i;
                $sum01 = rand(0, 999);
                $sum02 = rand(0, 999);
                $sum03 = rand(0, 999);
                $sum04 = rand(0, 999);
                $sum05 = rand(0, 999);
                $sum06 = rand(0, 999);
                $sum07 = rand(0, 999);
                $sum08 = rand(0, 999);
                $sum09 = rand(0, 999);
                $sum10 = rand(0, 999);
                $sum11 = rand(0, 999);
                $sum12 = rand(0, 999);
                $totalSum = $sum01 + $sum02 + $sum03 + $sum04 + $sum05 + $sum06 + $sum07 + $sum08 + $sum09 +
                    $sum10 + $sum11 + $sum12;
                echo("<td>$previousYear</td>");
                echo("<td>$sum01</td>");
                echo("<td>$sum02</td>");
                echo("<td>$sum03</td>");
                echo("<td>$sum04</td>");
                echo("<td>$sum05</td>");
                echo("<td>$sum06</td>");
                echo("<td>$sum07</td>");
                echo("<td>$sum08</td>");
                echo("<td>$sum09</td>");
                echo("<td>$sum10</td>");
                echo("<td>$sum11</td>");
                echo("<td>$sum12</td>");
                echo("<td>$totalSum</td>");

                echo("</tr>");
            }
        }
        ?>
    </table>
</form>
</body>
</html>