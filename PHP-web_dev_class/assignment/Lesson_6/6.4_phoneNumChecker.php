<?php


function isPremium($string)
{
    $regex = '/0(7|9)0(\W?\d){8}/';
    $match = preg_match($regex, $string);
    return $match ? true : false;
}

$tel = 'tel: 070 568 66855';
$tel2 = 'tel: 090 568 66855';
$tel3 = 'tel: 060 568 GREEN';

echo isPremium($tel);
echo isPremium($tel2);
echo isPremium($tel3);