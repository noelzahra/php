<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 04/08/2017
 * Time: 12:28
 */

    $authorName = "Elon Musk";

    function setAuthorName() {

        global $authorName;// only works inside a function
        $authorName = "Jeff Bezos";
    }

    setAuthorName(); //Sets variable scope inside function to a global var.
    echo $authorName;