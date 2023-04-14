<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Adapters\CurrencyAdapter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Products\StoreCurrencyRequest;
use App\Http\Resources\V1\Products\CurrencyResource;
use App\Http\Resources\V1\Products\ListCurrencyResource;
use App\Models\Currency;
use App\Services\CurrencyService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CurrencyController extends Controller
{

    /**
     * Show collection of currencies
     *
     *
     * @return AnonymousResourceCollection
     *
     * @apiResource App\Http\Resources\V1\Products\CurrencyResource
     * @apiResourceModel App\Models\Currency
     *
     * @response 200
     * {
     * "data": [
     * {
     * "id": 1,
     * "code": "Uzs",
     * "name": "Uzbek sum",
     * "value": 1
     * },
     * {
     * "id": 2,
     * "code": "USD",
     * "name": "US Dollar",
     * "value": 11421
     * },
     * }
     *
     */
    public function index(): AnonymousResourceCollection
    {
        $currency = Currency::all();
        return CurrencyResource::collection($currency);
    }


    /**
     * Create a new currency
     *
     * @bodyParam name string required Name of the currency. Example:US Dollar
     * @bodyParam value required Value of the currency. Example: US Dollar = 11000 Uzbek Sum,
     * @bodyParam code required Code of the currency. Example:USD
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @param StoreCurrencyRequest $request
     * @param CurrencyService $currencyService
     *
     * @return JsonResponse
     * @apiResource App\Http\Resources\V1\Products\CurrencyResource
     * @apiResourceModel App\Models\Currency
     *
     * @response 200 {
     *  "message":"New currency added successfully",
     *  "data" : {
     *  "id": 3,
     *  "name": "British Pound",
     *  "code": "GBP",
     *  "value":10022
     * }
     * }
     *
     *
     */
    public function store(StoreCurrencyRequest $request, CurrencyService $currencyService): JsonResponse
    {
        try {
            $currency = $currencyService->storeCurrency($request->validated());

            return response()->json([
                "message" => "New currency added successfully",
                "data" => CurrencyResource::make($currency)
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage()
            ]);
        }
    }


    /**
     * Show individual currency
     *
     *
     * @param Currency $currency
     *
     * @return CurrencyResource
     *
     * @apiResource App\Http\Resources\V1\Products\CurrencyResource
     * @apiResourceModel App\Models\Currency
     *
     *
     * @response 200
     * {
     * "data": {
     * "id": 1,
     * "code": "Uzs",
     * "name": "Uzbek sum",
     * "value": 1
     * }
     * }
     *
     */
    public function show(Currency $currency): CurrencyResource
    {
        return CurrencyResource::make($currency);
    }

    /**
     * Delete existing currency
     *
     *
     * @param Currency $currency
     *
     * @return JsonResponse
     *
     */

    public function destroy(Currency $currency): JsonResponse
    {
        if ($currency->code = "USD") {
            return response()->json([
                "message" => "US Dollar can't be deleted"
            ]);
        }

        $currency->delete();

        return response()->json([
            "message" => "Currency removed successfully"
        ]);
    }


    /**
     * Show the list of currencies fetched from api
     *
     * @return AnonymousResourceCollection
     *
     * @apiResource App\Http\Resources\V1\Products\ListCurrencyResource
     * @apiResourceModel App\Models\Currency
     * @throws Exception
     *
     * @response 200 {
     *  "data" : [
     *  "name": "US Dollar",
     *  "code": "USD",
     *  "value": "11421.00"
     * ]
     * }
     */
    public function list(): AnonymousResourceCollection
    {

        $currencyAdapter = app(CurrencyAdapter::class);
        $list = $currencyAdapter->getCurrenciesList();
        return ListCurrencyResource::collection($list);
    }
}
