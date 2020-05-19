<?php
require_once "findSpace.php";

if (isset($_REQUEST['stones']) && ($_REQUEST['beatles'])) {
    $x = $_REQUEST['stones'];
    $y = $_REQUEST['beatles'];
    list ($left_space, $right_space) = findSpace ($x, $y);
}

include "view.php";
