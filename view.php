<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <meta charset="utf-8">
</head>
<body>
<form action="index.php" method="POST">
    Количество камней: <input type="number" name="stones" /><br><br>
    Количество жуков: <input type="number" name="beatles" /><br><br>
    <input type="submit" value="Посчитать">
</form>
</body>
</html>

<?php
echo "{$left_space}" . ", " . "{$right_space}";
?>