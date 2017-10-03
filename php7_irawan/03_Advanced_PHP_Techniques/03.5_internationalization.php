<?php
//Internationalization(i18n)

$text = "bed";
$jpText = "ベッド";

echo strlen($text) . "\n";
echo strlen($jpText) . "\n";
echo mb_strlen($jpText) . "\n";