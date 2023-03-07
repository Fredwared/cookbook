<?php

namespace App\Services\Products;

use App\Adapters\CurrencyAdapter;
use App\Models\Currency;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CurrencyService
{

    /**
     * @param array $validation
     * @return Model
     * @throws Exception
     */
    public function storeCurrency(array $validation): Model
    {
        $currencyAdapter = new CurrencyAdapter();
        $currency = $currencyAdapter->getCurrency(Str::upper($validation["code"]));
        return Currency::query()->create($currency);
    }

}