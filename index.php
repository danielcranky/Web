<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <meta charset="utf-8">
</head>
<body>
<form action="findSpace.php" method="POST">
    Количество камней: <input type="number" name="stones" /><br><br>
    Количество жуков: <input type="number" name="beatles" /><br><br>
    <input type="submit" value="Посчитать">
</form>

<?php
if (isset($_REQUEST['stones']) && ($_REQUEST['beatles'])) {
    $x = $_REQUEST['stones'];
    $y = $_REQUEST['beatles'];
    list ($left_space, $right_space) = findSpace ($x, $y);
    echo $left_space, ',', $right_space;
}
?>

