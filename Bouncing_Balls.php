<?php
/**
 * Created by PhpStorm.
 * User: djtimone
 * Date: 12/18/18
 * Time: 11:54 PM
 */

function bouncingBall($h, $bounce, $window) {
    $t = 1;
    if (is_nan($h) || is_nan($bounce) || is_nan($window))
    {
        return -1;
    }
    if ($h <= $window || $bounce < 0.0 || $bounce >= 1.0)
    {
        return -1;
    }

    return 1 + floor( log($window/$h, $bounce) ) * 2;
}

