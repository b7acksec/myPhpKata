<?php
/**
 * Created by PhpStorm.
 * User: djtimone
 * Date: 12/19/18
 * Time: 9:11 AM
 */

function longest($a, $b) {
    $chars = array_unique(str_split($a . $b));
    sort($chars);
    return implode('', $chars);
}
