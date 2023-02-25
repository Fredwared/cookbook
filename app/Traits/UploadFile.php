<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

trait UploadFile
{

    protected function upload(HasMedia $model): void
    {
        $model->addMultipleMediaFromRequest(['images'])
            ->each(function ($fileAdder) {
                $fileAdder->withCustomProperties(["is_main" => false]);
                $fileAdder->toMediaCollection('images');
            });

        $model->getFirstMedia("images")
            ->setCustomProperty("is_main", true)
            ->save();


    }


    protected function clearCollection(Model $model, string $collectionName): void
    {
        $model->clearMediaCollection($collectionName);

    }

}