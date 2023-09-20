<?php 

function quickRandom($length = 5)
{
    $pool = '0123456789';

    return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
}