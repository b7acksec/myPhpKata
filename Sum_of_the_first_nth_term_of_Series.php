<?php
/**
 * Created by PhpStorm.
 * User: djtimone
 * Date: 12/18/18
 * Time: 11:14 PM
 */

function series_sum($n) {
    $sum = 0;
    for($i=0; $i<$n; $i++) {
        $sum += 1/(1+3*$i);
    }
    return round($sum,2);
}

