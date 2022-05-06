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

Function priceExcludingVAT($TTC_price){

}