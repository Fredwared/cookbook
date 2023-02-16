<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait UploadFile
{

    protected function upload(Model $model): void
    {

        $model->addMultipleMediaFromRequest(['images'])
            ->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('images');
            });

    }

    protected function clearCollection(Model $model, string $collectionName): void
    {
        $model->clearMediaCollection($collectionName);

    }

}