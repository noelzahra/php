<?php
//namespace

namespace MyN;

class A
{
    public function __construct()
    {
        echo 'Creating class from namespace Myn <br><br>';
    }
}


namespace MyA;


class A
{
    public function __construct()
    {
        echo 'Creating class from namespace MyA <br><br>';
    }
}

use \MyN\A as B;

$a = new A();
$b = new B();
