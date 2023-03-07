<?php

namespace App\Adapters;

use Exception;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class MarkaziyBankAdapter
{
    private PendingRequest $request;

    public function __construct()
    {
        $this->request = Http::baseUrl("https://cbu.uz/ru/");
    }


    /**
     * @throws Exception
     */
    public function getCurrencies()
    {
        $response = $this->request->get("arkhiv-kursov-valyut/json/");

        if ($response->failed()) {
            throw  new Exception("Error occured: " . $response->body());
        }

        return $response->json();
    }
}