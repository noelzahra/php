<?php
class Ninja {
    private $name = 'Chris';
    private $user = 'chrisninja';

    public function getName() {
        return $this->name;
    }

    public function getUser() {
        return $this->user;
    }

    public function doNinjaKick() {
        echo 'Dragon fist with kick';
    }
}

$chris = new Ninja;
echo $chris->doNinjaKick(). "\n";
echo "Ninja name: " . $chris->getName() . " User: " . $chris->getUser() . "\n";

$scott = new Ninja;
echo $scott->doNinjaKick(). "\n";