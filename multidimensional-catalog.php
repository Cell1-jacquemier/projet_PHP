<?php
include("my-functions.php");
$products = [
    "book" => [
        "name" => "book",
        "price" => 100,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "<img src=\""."https://www.mercator-ocean.eu/wp-content/uploads/2019/11/Mock-Up_BlueBookCopernicus_2.jpg"."\" alt=\"book\" width=\"20%\">",
    ],
    "books" => [
        "name" => "books",
        "price" => 1000,
        "weight" => 100,
        "discount" => null,
        "picture_url" => "<img src=\""."https://lesinstantsvolesalavie.files.wordpress.com/2021/01/books-2020.jpeg"."\" alt=\"book\" width=\"20%\">",
    ],
];
foreach($products as $attribute=>$product){
    echo $product["name"];
    echo formatPrice($product["price"]);
    echo $product["weight"];
    echo $product["discount"];
    echo $product["picture_url"];
//    foreach($product as $attrib=>$prod){
//        echo "<br>$attrib into $prod .<br>";
//
//
//    }
}


