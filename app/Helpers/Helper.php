<?php

function quickRandom($length = 5)
{
    // create number by length and does not start with 0
    $pool = '0123456789';
    return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
}

function getCountCart()
{
    $content = Cart::content();
    $count = 0;
    foreach($content as $value) {
        if ($value->options['type'] == 1) {
            $count ++;
        }
    }
    return $count;
}
function getCountCompare()
{
    $content = Cart::content();
    $count = 0;
    foreach($content as $value) {
        if ($value->options['type'] != 1) {
            $count ++;
        }
    }
    return $count;
}
