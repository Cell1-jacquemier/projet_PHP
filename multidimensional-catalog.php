<?php
include "my-functions.php";
$products =[
    "book" =>[
        "name" => "book",
        "price" => 100,
        "HT price" => priceExcludingVAT(10, 5.5),
        "weight" => 100,
        "discount" => discountedPrice(10, 100),
        "picture_url" => "https://www.mercator-ocean.eu/wp-content/uploads/2019/11/Mock-Up_BlueBookCopernicus_2.jpg",
    ],
    "books" =>[
        "name" => "books",
        "price" => 1000,
        "HT price" => priceExcludingVAT(10, 5.5),
        "weight" => 100,
        "discount" => discountedPrice(null, 100),
        "picture_url" => "https://lesinstantsvolesalavie.files.wordpress.com/2021/01/books-2020.jpeg",
    ],
];
//var_dump($products);
foreach($products as $attribute=>$product) {
//    var_dump($product);

    echo $product["name"]. "<br>";
    echo formatPrice($product["price"]). "<br>";
    echo priceExcludingVAT($product["HT price"], 5.5) . "<br>";
    echo $product["weight"] . "<br>";
    echo $product["discount"] . "<br>";
    echo "<img src=\"" . $product["picture_url"] . "\" alt=\"book\" width=\"20%\" ". "<br>";
}



