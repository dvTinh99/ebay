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

function __t($vi, $en) {
    $lang = __currentLanguage();

    // Return translation based on the language
    return $lang == 'vi' ? $vi : $en;
}

/**
 * @return mixed|string
 */
function __currentLanguage()
{
    $supportedLanguages = ['en', 'vi'];

    // Retrieve the language from the cookie or default to 'vi'
    $lang = $_COOKIE['lang'] ?? 'vi';

    // If unsupported language, default to 'vi'
    if (!in_array($lang, $supportedLanguages)) {
        $lang = 'vi';
    }
    return $lang;
}
