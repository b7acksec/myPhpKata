

<?php
/**
 * Created by PhpStorm.
 * User: djtimone
 * Date: 12/20/18
 * Time: 1:49 AM
 */

function isValidIP(string $str): bool
{
        return filter_var($str, FILTER_VALIDATE_IP);
}






