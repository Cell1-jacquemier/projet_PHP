<?php
include("my-functions.php");
$book = ["name" => "Book",
    "price" => formatPrice(10000),
    "HT price" => priceExcludingVAT(100, 5.5),
    "weight" => 100,
    "discount" => discountedPrice(10, 100),
    "picture_url" => "https://p1.storage.canalblog.com/14/48/1145642/91330992_o.png",];
?>

<div>
<h3>Much book</h3>
<!--<p>Price : 100.00€</p>-->
<img src="https://p1.storage.canalblog.com/14/48/1145642/91330992_o.png" alt="book">
</div>