<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculate Interest</title>
</head>
<body>
<form action="" method="post">
    <label for="amount">Enter Amount </label>
    <input type="text" name="amount"/><br>
    <input type="radio" name="currency" value="usd"/>USD
    <input type="radio" name="currency" value="eur"/>EUR
    <input type="radio" name="currency" value="bgn"/>BGN<br>
    <label for="compound">Compound Interest Amount</label>
    <input type="text" name="compound"/><br>
    <select name="months">
        <option name="halfYear" value="halfYear" selected="selected">6 Months</option>
        <option name="oneYear" value="oneYear">1 Year</option>
        <option name="twoYears" value="twoYears">2 Years</option>
        <option name="fiveYears" value="fiveYears">5 Years</option>
    </select>
    <input type="submit" name="submit"/>

</form>
<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['amount']) && isset($_POST['currency']) && isset($_POST['months'])) {
        $amount = $_POST['amount'];
        if ($_POST['currency'] == "usd") {
            $currency = "$";
        }
        if ($_POST['currency'] == "eur") {
            $currency = "&#x20AC";
        }
        if ($_POST['currency'] == "bgn") {
            $currency = "лв";
        }
        $interestAmount = $_POST['compound'] / 100;
        $timePeriod = $_POST['months'];
        if ($timePeriod == 'halfYear') {
            $timeValue = 0.5;
        }
        if ($timePeriod == 'oneYear') {
            $timeValue = 1;
        }
        if ($timePeriod == 'twoYears') {
            $timeValue = 2;
        }
        if ($timePeriod == 'fiveYears') {
            $timeValue = 5;
        }
        $tempPart = (1 + $interestAmount / 12);
        $power = pow($tempPart, (12 * $timeValue));
        $moneyAmount = $amount * $power;
        print("$currency " . number_format($moneyAmount, 2, '.', ''));
    }
}
?>
</body>
</html>