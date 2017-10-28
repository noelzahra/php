<?php

function dateTranslate($date)
{
    $pattern = '/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/';
    $replacement = '$2/$1/$3';
    return preg_replace($pattern, $replacement, $date);
}
