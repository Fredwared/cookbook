<?php

namespace App\Services\Wizard;

use App\Http\Resources\V1\Wizard\WizardLivingResource;
use App\Http\Resources\V1\Wizard\WizardRoomResource;
use App\Http\Resources\V1\Wizard\WizardServicesResource;
use App\Http\Resources\V1\Wizard\WizardSetupResource;
use App\Models\Product;
use App\Traits\SyncAttributes;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WizardService
{
    use UploadFile, SyncAttributes;


    /**
     *
     * @used \App\Http\Controllers\V1\Wizard\WizardController
     * @method setup
     */
    public function firstStepSetup(array $validation): WizardSetupResource
    {
        $validation["uuid"] = Str::uuid();

        /** @var Product $product */
        $product = Product::query()->create($validation);

        DB::transaction(function () use ($product, $validation) {

            $this->uploadMultiple($product, "place");

            collect($validation['contacts'])
                ->each(
                    function (array $contact) use ($product) {
                        $product->contacts()->create([
                            "product_id" => $product->id,
                            "name" => $contact["name"],
                            "phone_number" => $contact["number"]
                        ]);
                    }
                );


        });

        return WizardSetupResource::make($product);
    }

    /**
     *
     * @used \App\Http\Controllers\V1\Wizard\WizardController
     * @method services
     */
    public function secondStepServices(array $validation, Product $product): WizardServicesResource
    {
        $this->attachAttributes($validation["attributes"], $product);
        return WizardServicesResource::make($product->load("attributes"));
    }


    /**
     *
     * @used \App\Http\Controllers\V1\Wizard\WizardController
     * @method living
     */
    public function thirdStepLiving(array $validation, Product $product): WizardServicesResource
    {
        $this->attachAttributes($validation["attributes"], $product);
        return WizardServicesResource::make($product->load("attributes"));
    }


    /**
     *
     * @used \App\Http\Controllers\V1\Wizard\WizardController
     * @method payment
     */
    public function fourthStepPayment(array $validation, Product $product): WizardLivingResource
    {
        $this->attachAttributes($validation["attributes"], $product);
        return WizardLivingResource::make($product->load("attributes"));
    }


    /**
     *
     * @used \App\Http\Controllers\V1\Wizard\WizardController
     * @method rooms
     */
    public function lastStepRooms(array $validation, Product $product): WizardRoomResource
    {

        $validation["product_id"] = $product->id;

        $this->uploadMultiple($product, "rooms");

        $data = $product->entities()->create($validation);

        return WizardRoomResource::make($data);

    }

}