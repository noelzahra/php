<?php
// Inheritance

require "ShopProduct.php";

$product1 = new ShopProduct("My Antonia", "Willa", "Carter", 5.99);
$product2 = new ShopProduct("Exile on Cold harbour Lane", "The", "Alabama 3", 10.99);

print "Author: " . $product1->getProducer(). "\n";
print "Artist: " . $product2->getProducer(). "\n";
