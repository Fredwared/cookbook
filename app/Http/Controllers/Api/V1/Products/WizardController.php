<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Products\Wizard\WizardRoomRequest;
use App\Http\Requests\Api\V1\Products\Wizard\WizardSetupRequest;
use App\Http\Resources\V1\Products\Wizard\WizardRoomResource;
use App\Http\Resources\V1\Products\Wizard\WizardSetupResource;
use App\Models\Product;
use App\Traits\UploadFile;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
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
     * @bodyParam rating required float Rating of the hotel.Example:3,5
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

        $product = Product::query()->create($fields);

        DB::transaction(function () use ($product, $fields) {

            /** @var Product $product */

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

        });


        return response()->json([
            "message" => "First step is done",
            "data" => WizardSetupResource::make($product)
        ]);
    }

    public function services(Product $product)
    {

    }

    /**
     * This endpoint will create room for existing product
     *
     * @bodyParam room_type required.
     * @bodyParam is_smoking_allowed nullable boolean default false.
     * @bodyParam bed_type required.Type of the bed
     * @bodyParam bed_count required integer.How many beds room have
     * @bodyParam price required float.This is price for foreigners
     * @bodyParam price_for_residents float.This is price for  locals
     * @bodyParam room_size integer.Size of the room
     *
     * @param Product $product
     * @param WizardRoomRequest $request
     * @return JsonResponse
     */
    public function rooms(Product $product, WizardRoomRequest $request): JsonResponse
    {
        $fields = $request->validated();

        $fields["product_id"] = $product->id;

        $data = $product->entities()->create($fields);

        return response()->json([
            "message" => "Last step is done",
            "data" => WizardRoomResource::make($data)
        ]);
    }

}
