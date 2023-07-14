<html>
<head>
    <title>Odds Converter</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="odds" placeholder="Enter odds" required>
        <select name="format" required>
            <option value="US to UK">US to UK</option>
            <option value="UK to US">UK to US</option>
        </select>
        <input type="submit" value="Convert">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $odds = $_POST['odds'];
    $format = $_POST['format'];
    $converted_odds = convertOdds($odds, $format);
    echo '<p>Converted odds: ' . $converted_odds . '</p>';
}
?>

</body>
</html>
