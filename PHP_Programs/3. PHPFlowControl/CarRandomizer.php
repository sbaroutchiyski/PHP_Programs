<!DOCTYPE html>
<html>
<head>
    <!--Receives a string of cars from an input HTML form, separated by a comma and space (“, “).
    It then prints each car, a random color and a random quantity in a table like the one shown below.
     -->
    <title>Rich People’s Problems</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form action="" method="post">
    Enter cars <input type="text" name="cars"/>
    <input type="submit" name="submit" value="Show result"/>
    <table>
        <?php
        $colors = ["red", "blue", "black", "yellow", "orange"];
        if (isset($_POST['submit']) && !empty($_POST['cars'])) {
            if (isset($_POST['cars'])) {
                $carsArray = explode(", ", $_POST['cars']);
            }
            echo("<tr><th>Car</th> <th>Color</th> <th>Count</th></tr>");
            foreach ($carsArray as $currentCar) {
                $color = array_rand($colors);
                $count = rand(1, 5);
                echo("<tr><td>$currentCar</td><td>$colors[$color]</td><td>$count</td></tr>" . "<br>");
            }
        }
        ?>
    </table>
</form>
</body>
</html>