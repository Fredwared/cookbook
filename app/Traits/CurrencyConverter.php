<?php

namespace App\Traits;

trait CurrencyConverter
{
    public function currencyConvert(float $rate, float $price): string
    {
        return number_format(
            num: $rate * $price,
            decimals: '2',
        );
    }
}