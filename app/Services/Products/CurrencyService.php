<?php

namespace App\Services\Products;

use App\Adapters\CurrencyAdapter;
use App\Models\Currency;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CurrencyService
{


    const DEFAULT = 'usd';


    /**
     * @param string $currencyCode
     * @return Builder|Model|object|null
     */
    public function getCurrency(string $currencyCode = self::DEFAULT)
    {

        return Currency::query()->where('code', $currencyCode)->first();
    }


    /**
     * @param array $validation
     * @return Model
     * @throws Exception
     */
    public function storeCurrency(array $validation): Model
    {
        $currencyAdapter = app(abstract: CurrencyAdapter::class);

        $currency = $currencyAdapter->getCurrency(Str::upper($validation["code"]));

        return Currency::query()->create($currency);
    }

}