<?php

function formatPrice($centPrice):void
{
    $euroPrice = $centPrice / 100;
    echo number_format($euroPrice, 2, ',', ' ') . '€';
}

//function sayMyName($lastName, $firstName) {
//    return 'Salut ' . $firstName . ' ' . $lastName . '!';
//}
// faite une fonction qui aura en parametre un prenom et un nom et qui affichera :
// Salut Alex De Pembroke!

function priceExcludingVAT($TTC_price, $TVA) :int{
    $HT = (100 * $TTC_price) / (100 + $TVA);
//    echo number_format($HT, 2, ',', ' ') . '€' . "<br>";
        return $HT;
}
function discountedPrice($discount, $price) :float{
    $price_dis = ($price - $price * ($discount/100));
//    echo number_format($price_dis, 2, ',', ' ') . '€' . "<br>";
    return $price_dis;
}