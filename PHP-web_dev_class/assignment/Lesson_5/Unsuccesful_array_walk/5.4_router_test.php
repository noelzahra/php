<?php

$pages = ['lessons', 'classroom', 'teaching'];

$str ='teacing';

$similar = function($pages, $str){
    
     similar_text($pages[2], $str, $percent);
     return round($percent, 0);
};

echo $similar($pages, $str);
//echo $similar($pages, $str) > 80 ? $pages[2] : null;