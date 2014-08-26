<?php
// Generates an HTML table by given information about a person (name, phone number, age, address).
$name = "Gosho";
$phoneNumber = "0882-321-423";
$age = 24;
$address = "Hadji Dimitar";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Information table</title>
    <style>
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        #left {
            background: orange;
            text-align: left;
            font-weight: bold;
        }

        #right {
            text-align: right;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td id="left">Name</td>
        <td id="right"><?php echo("$name") ?></td>
    </tr>
    <tr>
        <td id="left">Phone number</td>
        <td id="right"><?php echo("$phoneNumber") ?></td>
    </tr>
    <tr>
        <td id="left">age</td>
        <td id="right"><?php echo("$age") ?></td>
    </tr>
    <tr>
        <td id="left">Address</td>
        <td id="right"><?php echo("$address") ?></td>
    </tr>
</table>
</body>
</html>