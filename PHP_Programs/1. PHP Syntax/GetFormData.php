<?php
//Retrieves the input data from an HTML form, and displays it as string.
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $result = "My name is $name." . "I am $age years old." . "I am $gender.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Data</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" placeholder="Name.."></input><br>
    <input type="text" name="age" placeholder="Age.."></input><br>
    <input type="radio" name="gender" id="male" value="male">Male<br>
    <input type="radio" name="gender" id="female" value="female">Female<br>
    <input type="submit"/>
</form>
<?php echo("$result") ?>
</body>
</html>