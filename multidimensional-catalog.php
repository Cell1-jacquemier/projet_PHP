<?php
include "my-functions.php";
$products =[
   [
        "name" => "book",
        "price" => 100,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "https://www.mercator-ocean.eu/wp-content/uploads/2019/11/Mock-Up_BlueBookCopernicus_2.jpg",
    ],
     [
        "name" => "books",
        "price" => 1000,
        "weight" => 1000,
        "discount" => null,
        "picture_url" => "https://lesinstantsvolesalavie.files.wordpress.com/2021/01/books-2020.jpeg",
    ],
];

//var_dump($products);
//foreach($products as $product) {
//
//
//    echo $product["name"]. "<br>";
//    echo formatPrice($product["price"]). "<br>";
//    echo priceExcludingVAT($product["HT price"], 5.5) . "<br>";
//    echo $product["weight"] . "<br>";
//    echo $product["discount"] . "<br>";
//    echo "<img src=\"" . $product["picture_url"] . "\" alt=\"book\" width=\"20%\" ". "<br>";
//}
?>
<?php foreach($products as $product){

?> <h3>product : <?= $product["name"]; ?> </h3>
<p>price : <?= formatPrice($product["price"]); ?></p>
    <p>HT price : <?= formatPrice(priceExcludingVAT($product["price"], 5.5)); ?></p>
    <p>weight : <?= $product["weight"] . " KG"; ?> </p>
    <p>discount : <?= formatPrice(discountedPrice($product["discount"],$product["price"])); ?></p>
    <img src= <?= $product["picture_url"] ?> width="20%" ><?php
}?>

