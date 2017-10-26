<?php

//String padding with str_pad()


function pad_output($number, $length)
{
    printf(str_pad($number, $length, "0", STR_PAD_BOTH));
}

pad_output(40, 10);