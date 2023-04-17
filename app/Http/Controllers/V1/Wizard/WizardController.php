<?php

namespace App\Http\Controllers\V1\Wizard;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Wizard\WizardRoomRequest;
use App\Http\Requests\V1\Wizard\WizardServicesRequest;
use App\Http\Requests\V1\Wizard\WizardSetupRequest;
use App\Http\Resources\V1\Wizard\WizardRoomResource;
use App\Http\Responses\ApiCreatedResponse;
use App\Models\Product;
use App\Services\Wizard\WizardService;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;


/**
 * @group Wizard
 *
 * End points for wizard or multistep form
 *
 */
class WizardController extends Controller
{


    protected $wizardService;

    public function __construct(WizardService $wizardService)
    {
        $this->wizardService = $wizardService;
    }

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
     *
     * @apiResource App\Http\Resources\V1\Products\Wizard\WizardSetupResource
     * @apiResourceModel App\Models\Product
     *
     * @responseFile storage/responses/wizard/setup.json
     */
    public function setup(WizardSetupRequest $request): ApiCreatedResponse
    {
        $product = $this->wizardService->firstStepSetup($request->validated());

        return new ApiCreatedResponse($product, 'First step is done', ResponseAlias::HTTP_CREATED);
    }

    /**
     *
     * @bodyParam attributes required array.Attributes of the hotel
     * @bodyParam attributes.name required.
     * @bodyParam attributes.value required.
     *
     * @param WizardServicesRequest $request
     * @param Product $product
     * @return ApiCreatedResponse
     */
    public function services(WizardServicesRequest $request, Product $product): ApiCreatedResponse
    {
        $fields = $request->validated();


        $product->attributes()->sync($fields);

        return new ApiCreatedResponse($product, 'Second step is done', ResponseAlias::HTTP_CREATED);
    }

    /**
     * This endpoint will create room for existing product
     *
     * @bodyParam room_type required.
     * @bodyParam is_smoking_allowed nullable boolean default false.
     * @bodyParam bed_type required.Type of the bed
     * @bodyParam bed_count required integer.How many beds room have
     * @bodyParam price required float.This is price for foreigners
     * @bodyParam price_for_residents float.This is price for locals
     * @bodyParam room_size integer.Size of the room
     *
     * @param Product $product
     * @param WizardRoomRequest $request
     * @return ApiCreatedResponse
     *
     * @responseFile storage/responses/wizard/rooms.json
     */
    public function rooms(Product $product, WizardRoomRequest $request): ApiCreatedResponse
    {
        $fields = $request->validated();

        $fields["product_id"] = $product->id;

        $product->entities()->create($fields);

        $data = WizardRoomResource::make($product);

        return new ApiCreatedResponse($data, 'Last step is done', ResponseAlias::HTTP_CREATED);
    }

}
