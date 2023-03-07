<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Currency
{

    protected array $currencies = [];

    public function __construct()
    {
        $this->currencies = \App\Models\Currency::query()->get(["value", "code"])->toArray();
        $currencies = [];

        foreach ($this->currencies as $currency) {
            $currencies[Str::lower($currency["code"])] = $currency["value"];
        }

        $this->currencies = $currencies;
    }


    public function price($currency)
    {
        if (is_null($currency)) {
            return $this->price;
        }

        return $this->convert(Str::lower($currency));
    }

    protected function convert($to)
    {
        $from = "usd";

        if (!key_exists($from, $this->currencies)) {
            return $this->price;
        }

        $base_value = $this->currencies[$from];
        $uzs_value = $base_value * $this->price;


        return $uzs_value / $this->currencies[$to];
    }


}