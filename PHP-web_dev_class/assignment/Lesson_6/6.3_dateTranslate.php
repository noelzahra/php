<?php
//USA date foramt from UK date

$date = '20/09/2017';

function date_translate($date)
{
    $pattern = '/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/';
    $replacement = '$2/$1/$3';
    return preg_replace($pattern, $replacement, $date);
}

echo 'US date: ' . date_translate($date);