<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Print Tags</title>
</head>
<body>
<form action="" method="post">
    <label for="tags">Enter Tags:</label><br>
    <input type="text" name="tags">
    <input type="submit" name="start">
</form>
<?php
$tagsNumber = "";
$tagsCount = 0;
if (isset($_POST['tags'])) {
    $tagsNumber = explode(", ", $_POST['tags']);
    $tagsCount = count($tagsNumber);
}
for ($i = 0; $i < $tagsCount; $i++) {
    echo(htmlspecialchars($i . " : " . $tagsNumber[$i]) . "<br>");
}
?>
</body>
</html>