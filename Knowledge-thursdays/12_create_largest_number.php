<?php

function generateLargestNumber($array): int
{
    $result = [];

    if (!function_exists('sortArray')) 
    {
        //sort array according to highest value
        function sortArray($array)
        {
            foreach ($array as $value) 
            {
                $value = max($array);
                $result[] = $value;
                $key = array_search($value, $array);
                unset ($array[$key]);
            }
    
            return (int)implode($result);
        }
    }

    // search for the shortest digit
    if(strlen(min($array)) < strlen(max($array)))
    {
        //check if shortest digit multiplied by 10
        //is larger than biggest digit
        if (min($array) * 10 > max($array))
        {
            $array[] = min($array) * 10;
            $key = array_search(min($array), $array);
            unset ($array[$key]);

            foreach ($array as $value) 
            {
                $value = max($array);
                $result[] = $value;
                $key = array_search($value, $array);
                unset ($array[$key]);
            }
            $result[0] = $result[0] / 10;  
            return (int)implode($result);
        } else {
            //case when shortest digit multiplied by 10
            //is still smaller than biggest digit 
            return sortArray($array);
        }
    } else {
        return sortArray($array);
    }
}


$source = [52, 53, 55];
$source2 = [ 9, 50, 52];
$source3 = [ 19, 500, 502];

echo generateLargestNumber($source) . "\n"; //returns 555352
echo generateLargestNumber($source2) . "\n"; //returns 95250
echo generateLargestNumber($source3) . "\n"; //returns 50250019