<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

trait UploadFile
{

    protected function uploadMultiple(HasMedia $model, $collectionName): void
    {
        $model->addMultipleMediaFromRequest(["images"])
            ->each(function ($fileAdder) use ($collectionName) {
                $fileAdder->withCustomProperties(["is_main" => false]);
                $fileAdder->toMediaCollection($collectionName);
            });

        $model->getFirstMedia($collectionName)
            ->setCustomProperty("is_main", true)
            ->save();


    }


    protected function clearCollection(Model $model, string $collectionName): void
    {
        $model->clearMediaCollection($collectionName);

    }

}