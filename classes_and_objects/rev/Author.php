<?php
//Author Class

require "Person.php";

class Author extends Person
{
    private $pname = "Bond";

    public function getCompleteName()
    {
        return $this->getFullName()." a.k.a. ".$this->pname;
    }
}


$newBond = new Author("Sean", "Connery");
echo $newBond->getCompleteName();