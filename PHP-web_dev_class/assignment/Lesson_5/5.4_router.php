<?php

$pages = ['lessons', 'classroom', 'teaching'];

$str ='teaching';
    
// $similar = function(&$pages) {
//     array_walk($pages, function() {
//        return similar_text($pages, $str);
//     });
//     return ($similar > 6) ? $pages[2] : "null"; 
// };

// $output = $similar($pages);

$similar = array_filter($pages, function($pages){
    
    return similar_text($pages, $str);
});

echo $similar($pages);