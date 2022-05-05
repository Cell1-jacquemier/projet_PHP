<?php
$products = [
    "book" => [
        "name" => "book",
        "price" => 1000,
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
//    echo "<br>$attribute =><br>";
//    print_r($product);
//    echo "<br>----<br>";
    foreach($product as $attrib=>$prod){
        echo "<br>$attrib into $prod.<br>";

    }
}

//echo "<br>----------------------<br>";
//echo "$attribute";

//echo "<img src=\""."https://www.mercator-ocean.eu/wp-content/uploads/2019/11/Mock-Up_BlueBookCopernicus_2.jpg"."\" alt=\"book\">";
//echo "<img src=\""."https://lesinstantsvolesalavie.files.wordpress.com/2021/01/books-2020.jpeg"."\" alt=\"book\">";

