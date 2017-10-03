<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 04/08/2017
 * Time: 12:20
 */

    //global scope
    $authorName = "Joseph Heller";

    function setAuhtorName() {
        //Variable scope - only available inside function
        $authorName = "Charles Dickens";
        return $authorName;
    }

    setAuthorName();

    echo "Global scope returned: ", $authorName;