<?php

namespace Hexlet\Phpunit\Polidrom;

function  isPalindrome($srt)
{
    $size = strlen($srt);
    if ($srt === '') {
        return false;
    }
    if ($size <= 1) {
        return true;
    }
    $firstSimbol = $srt[0];
    $lastSimbol = $srt[$size - 1];
    if ($firstSimbol != $lastSimbol) {
        return false;
    }
    $minStr = substr($srt, 1, $size - 2);
    return isPalindrome($minStr);
}