<?php

$letters = range('A', 'Z');

function getColoredString($string, $foreground_color = null, $background_color = null) {
    $colored_string = "";

    if (isset($this->foreground_colors[$foreground_color])) {
        $colored_string .= "\033[" . $this->foreground_colors[$foreground_color] . "m";
    }
    if (isset($this->background_colors[$background_color])) {
        $colored_string .= "\033[" . $this->background_colors[$background_color] . "m";
    }
    $colored_string .=  $string . "\033[0m";

    return $colored_string;
}

function buildXmascard ($array, $startLetter)
{
    if(!function_exists('buildTree'))
    {
        function buildTree($array, $startLetter)
        {
            $tree = [];
            $branches = [];
        
            $key = array_search($startLetter, $array);
            $branches = array_slice($array, $key);

            for($i = 0; $i < count($branches); $i++)
            {
                $tree[$i] = $branches[$i];
            }

            array_unshift($tree, "*");
            
            
            $height = 4;

            echo str_repeat("*", 13) . "\n";

            for($i=1; $i<=$height; $i++)
            {    
                echo "*'";
                //Prints trailing spaces
                for($j=$i; $j<$height; $j++)
                {
                    echo "'";
                }
        
                //Prints the pyramid pattern
                //push & to array
                for($j=1; $j<=(2*$i-1); $j++)
                {
                    // echo $tree[$j];
                    echo next ($tree);
                    array_push($tree, '&');
                }

                for($j=$i; $j<$height; $j++)
                {
                    echo "'";
                }
        
                echo "'*\n";
            }

            for($i=1; $i<=3; $i++)
            {
                echo "*=";
                //Prints trailing spaces
                for($j=$i; $j<$height; $j++)
                {
                    echo "=";
                }
        
                //Prints trunk
                for($j=1; $j<=(2*$i-1); $j++)
                {
                    echo "+";
                }

                for($j=$i; $j<$height; $j++)
                {
                    echo "=";
                }
        
                echo "=*\n";
            }
            echo str_repeat("*", 13) . "\n";
        }
       buildTree($array, $startLetter);
    }
}

buildXmascard($letters, 'L');
// buildXmascard($letters, 'W');