<?php
// Constants can be accessed anywhere inside functions and classes - they're global vars
// define(name of constant, constant value);

define('FIB_CONSTANT', 1.272 );
define('STRING_CONSTANT', "Fib level" );
define('NUM_CONSTANT', 1.618);
define('FIB_RETRACEMENT', 'Fib projection');
define('PI_CONSTANT', 3.14159);
define('CIRCLE_CONSTANT', "Ratio");

echo STRING_CONSTANT." is ".FIB_CONSTANT."\n";
echo NUM_CONSTANT." is ".FIB_RETRACEMENT."\n";
echo PI_CONSTANT." is a ".CIRCLE_CONSTANT;