<?php

namespace App\Services\Wizard;

use App\Http\Resources\V1\Wizard\WizardSetupResource;
use App\Models\Product;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WizardService
{
    use UploadFile;

    public function firstStepSetup(array $validation): WizardSetupResource
    {
        $validation["uuid"] = Str::uuid();

        /** @var Product $product */
        $product = Product::query()->create($validation);

        DB::transaction(function () use ($product, $validation) {


            $this->uploadMultiple($product, "images");

            foreach ($validation["contacts"] as $contact) {
                $name = $contact["name"];
                $number = $contact["number"];
            }

            $product->contacts()->create([
                "product_id" => $product->id,
                "name" => $name,
                "phone_number" => $number
            ]);

        });

        return WizardSetupResource::make($product);
    }

}