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
if (isset($_POST['tags'])) {
    $tagsNumber = explode(", ", $_POST['tags']);
    $tagsCount = count($tagsNumber);
    $countValues = array_count_values($tagsNumber);
    $maxValue = max($countValues);
    $maxKey = array_search($maxValue, $countValues);
    foreach ($countValues as $key => $value) {
        echo("$key" . " : " . $value . "<br>");
    }
    echo("Most Frequent Tag: " . htmlspecialchars($maxKey));
}
?>
</body>
</html>