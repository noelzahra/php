<?php

function generateSring($largestNumber, $fufuNumber, $kucuNumber, $mucuNumber)
{
    for( $i = 1; $i <= $largestNumber; $i++ ) {
        
        switch( $i ) {
            case ( ( $i % $fufuNumber == 0 ) && ( $i % $kucuNumber == 0 ) && ( $i % $mucuNumber == 0 ) ):
                echo 'FufuKucuMucu ';
                break;
            case ( ( $i % $fufuNumber == 0 ) && ( $i % $kucuNumber == 0 ) ):
                echo 'FufuKucu ';
                break;
            case ( $i % $fufuNumber == 0 ) :
                echo 'Fufu ';
                break;
            case ( $i % $kucuNumber == 0 ) :
                echo 'Kucu ';
                break;
            case ( $i % $mucuNumber == 0 ) :
                echo 'Mucu ';
                break;
            default:
                echo $i . ' ';
                break;
        }
    }
}

generateSring(20, 2, 4, 8);