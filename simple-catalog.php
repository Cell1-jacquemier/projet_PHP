<?php
$products = ["book1", "book2", "book3"];
sort($products);
print_r($products[0]);
print_r($products[2]);
for($i=0; $i<count($products);$i++){
    echo $products[$i] . "\n";
}