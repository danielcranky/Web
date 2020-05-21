<?php

    function findSpace ($a, $b) 
    {
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

