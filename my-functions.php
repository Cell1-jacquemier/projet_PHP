<?php
declare(strict_types=1);

function formatPrice(int $centPrice): string
{
    $euroPrice = $centPrice / 100;
    return number_format($euroPrice, 2, ',', ' ') . '€';
}

function priceExcludingVAT(int $TTC_price, float $TVA): float
{
   return (100 * $TTC_price) / (100 + $TVA);
}

function discountedPrice(int|null $discount, int $price): float
{
    return ($price - $price * ($discount/100));
}