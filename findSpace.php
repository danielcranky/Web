<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <meta charset="utf-8">
</head>
<body>
<form method="POST">
    Количество камней: <input type="number" name="stones" /><br><br>
    Количество жуков: <input type="number" name="beatles" /><br><br>
    <input type="submit" value="Посчитать">
</form>

<?php
    if (isset($_POST['stones']) && ($_POST['beatles'])) {
        $x = $_POST['stones'];
        $y = $_POST['beatles'];
        list ($left_space, $right_space) = findSpace ($x, $y);
        echo $left_space, ',', $right_space;
    }

    function findSpace ($a, $b) {
        $space = array ($a);
        for ($i = 0; $i < $b; $i++)  {
            $max_space = max($space);
            $max_space_without_beatle = $max_space - 1;
            $left = round (($max_space_without_beatle / 2), 0, PHP_ROUND_HALF_DOWN);
            $right = round (($max_space_without_beatle / 2), 0, PHP_ROUND_HALF_UP);
            array_push ($space, $left, $right);
            unset ($space[array_search($max_space, $space)]);
        }
        return array($left, $right,);
    }
?>

</body>
</html>

