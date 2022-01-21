<?php
    function bagi($a, $b) {
        $x = (($a < 0) ^ ($b < 0)) ? -1 : 1;
        $a = abs($a);
        $b = abs($b);
        $y = 0;
        while ($a >= $b) {
            $a -= $b;
            ++$y;
        }
        if($x==-1) $y=-$y;
        return $y;
    }

    $a = 7;
    $b = 2;
    echo ("hasil bagi 7/2: ".bagi($a, $b));
    echo '<br>';

    $a = 8;
    $b = 4;
    echo ("hasil bagi 8/4: ".bagi($a, $b));
?>