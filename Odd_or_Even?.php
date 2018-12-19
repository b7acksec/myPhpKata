<?php
/**
 * Created by PhpStorm.
 * User: djtimone
 * Date: 12/18/18
 * Time: 11:44 PM
 */
function odd_or_even(array $a): string {
    return array_sum($a) % 2 ? 'odd' : 'even';
}

