<?php
function morsedecode($string)
{
    $inputString = str_replace("/"," ",$string);
    $inputString = str_replace("—"," ",$inputString);
    
    $words = array();
    $words = preg_split("([\s]{1,})", $inputString);

    $arr_convert = array(
    '·-'    => 'a',
    '-···'  => 'b',
    '-·-·'  => 'c',
    '-··'   => 'd',
    '·'     => 'e',
    '··-·'  => 'f',
    '--·'   => 'g',
    '····'  => 'h',
    '··'    => 'i',
    '·---'  => 'j',
    '-·-'   => 'k',
    '·-··'  => 'l',
    '--'    => 'm',
    '-·'    => 'n',
    '---'   => 'o',
    '·--·'  => 'p',
    '--·-'  => 'q',
    '·-·'   => 'r',
    '···'   => 's',
    '-'     => 't',
    '··-'   => 'u',
    '···-'  => 'v',
    '·--'   => 'w',
    '-··-'  => 'x',
    '-·--'  => 'y',
    '--··'  => 'z',
    '-----' => '0',
    '·----' => '1',
    '··---' => '2',
    '···--' => '3',
    '····-' => '4',
    '·····' => '5',
    '-····' => '6',
    '--···' => '7',
    '---··' => '8',
    '----·' => '9'
    );
    $letters = array();
    $returnstring = "";
    foreach($words as $word){
        $newword = '';
        $word = str_replace("  "," ",$word);
        $letters = preg_split("([\s+])", $word);
        foreach($letters as $letter){
            if(strlen($letter) > 0){
            $newword .= $arr_convert[$letter];
            }
        }
        unset($letters);
        $returnstring .= $newword . " ";
    }
    return $returnstring;
}

var_dump(morsedecode('··-·/-·--'));