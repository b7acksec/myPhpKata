<?php
/**
 * Created by PhpStorm.
 * User: djtimone
 * Date: 12/19/18
 * Time: 10:08 AM
 */

function countBits($n) {
    return substr_count(decbin($n), 1);
}

