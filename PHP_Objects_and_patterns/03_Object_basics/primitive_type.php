<?php
$string = "This is a string";
$int = 58593;
$float = 1.618;
$double = 261.858577;
$array = [3,5,66,"Jon"];
$empty = Null;
$isComplete = true;

echo is_string($string).PHP_EOL;
echo is_int($int).PHP_EOL;
echo is_float($float).PHP_EOL;
echo is_array($array).PHP_EOL;
echo is_double($double).PHP_EOL;
echo is_bool($isComplete);


//class AddressManager
//{
//    private $addresses = ["209.131.36.159". "216.58.122.174" ];
//
//
//    public function outputAddress($resolve)
//    {
//        $resolve = true;
//
//        foreach ($this->addresses as $address)
//        {
//            print $address;
//            if ($resolve) {
//                print "(" . gethostbyaddr($address) . ")";
//            }
//        }
//    }
//}
//
//$address = new AddressManager();
//echo $address->outputAddress();
