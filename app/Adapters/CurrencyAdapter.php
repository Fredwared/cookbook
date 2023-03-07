<?php

namespace App\Adapters;

use Exception;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CurrencyAdapter
{

    private PendingRequest $request;

    public function __construct()
    {
        $this->request = Http::baseUrl("https://cbu.uz/uz/");
    }

    /**
     * @param Response $response
     * @param string $message
     * @return void
     * @throws Exception
     */
    public function checkSuccessfullResponse(Response $response, string $message = "Invalid currency code"): void
    {
        if ($response->status() != ResponseAlias::HTTP_OK) {
            throw new Exception($message);
        }
    }

    /**
     * @throws Exception
     */
    public function getCurrenciesList(): Collection
    {
        $response = $this->request->get("/arkhiv-kursov-valyut/json/");
        $this->checkSuccessfullResponse($response);

        return collect($response->json())->map(function (array $data) {
            return [
                "name" => $data["CcyNm_EN"],
                "code" => $data["Ccy"],
                "value" => $data["Rate"]
            ];
        });
    }


    /**
     * @throws Exception
     */
    public function getCurrency(string $currency): array
    {
        $response = $this->request->get("/arkhiv-kursov-valyut/json/$currency/");
        $this->checkSuccessfullResponse($response);
        $data = $response->json(0);

        return [
            "name" => $data["CcyNm_EN"],
            "code" => $data["Ccy"],
            "value" => $data["Rate"]
        ];
    }

}