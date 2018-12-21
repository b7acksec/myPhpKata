<?php
/**
 * Created by PhpStorm.
 * User: djtimone
 * Date: 12/21/18
 * Time: 9:54 AM
 */

function tribonacci(array $signature, int $n): array {
    for ($i = $n - 3; $i > 0; $i--) {
        $signature[] = array_sum(array_slice($signature, -3));
    }
    return array_slice($signature, 0, $n);
}




