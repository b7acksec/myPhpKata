<?php
/**
 * Created by PhpStorm.
 * User: djtimone
 * Date: 12/20/18
 * Time: 11:20 AM
 */

function DNA_strand($dna) {
    return strtr($dna, 'ACGT', 'TGCA');
}

