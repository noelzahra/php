<?php

$pages = ['lessons', 'classroom', 'teaching'];

$str1 = 'teching';
$str2 = 'learning';

function validURI($array, $str) {
    foreach($array as $value) {
        similar_text($str, $value, $percent);
            if (round($percent, 0) >= 80)
            return $value;
        }
        return null;
}

echo validURI($pages, $str1);
echo validURI($pages, $str2);