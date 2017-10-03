<?php
// group use statement

use App\{ShopProduct, Shoes};

$shoes = new ShoeProduct("Altra", "Escalante", "Blue", 154.55);
echo $shoes->getNewName();