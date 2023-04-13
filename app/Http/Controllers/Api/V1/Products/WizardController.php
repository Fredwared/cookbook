<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Products\Wizard\WizardSetupRequest;
use App\Http\Resources\V1\Products\Wizard\WizardSetupResource;
use App\Models\Product;
use App\Traits\UploadFile;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class WizardController extends Controller
{

    use UploadFile;

    /**Store Products with contacts
     *
     * @bodyParam category_id required exists:categories,id.Example:Hotel
     * @bodyParam name required string unique.Example:La-mare
     * @bodyParam images required array.
     * @bodyParam country_id required exists:countries,id.Example:Russia
     * @bodyParam city_id required exists:cities,id.Example:Moscow
     * @bodyParam location required .Some street
     * @bodyParam postal_code required.Example:112332
     * @bodyParam description required.Example: the Best hotel with all facilities
     * @bodyParam contacts required array.Example[name => Avaz,number => 7975452]
     * @bodyParam rating required float.Example:3,5
     *
     * @param WizardSetupRequest $request
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\Wizard\WizardSetupResource
     * @apiResourceModel App\Models\Product
     */
    public function setup(WizardSetupRequest $request): JsonResponse
    {
        $fields = $request->validated();

        $fields["uuid"] = Str::uuid();

        /** @var Product $product */
        $product = Product::query()->create($fields);

        $this->uploadMultiple($product, "images");

        foreach ($fields["contacts"] as $contact) {
            $name = $contact["name"];
            $number = $contact["number"];
        }

        $product->contacts()->create([
            "product_id" => $product->id,
            "name" => $name,
            "phone_number" => $number
        ]);


        return response()->json([
            "message" => "First step is done",
            "product" => WizardSetupResource::make($product)
        ]);
    }

    public function services(Product $product)
    {

    }

}
