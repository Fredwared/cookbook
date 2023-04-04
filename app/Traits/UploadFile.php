<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

trait UploadFile
{

    protected function uploadMultiple(HasMedia $model, $collectionName): void
    {
        $model->addMultipleMediaFromRequest(['images'])
            ->each(function ($fileAdder) use ($collectionName) {
                $fileAdder->withCustomProperties(["is_main" => false]);
                $fileAdder->toMediaCollection($collectionName);
            });

        $model->getFirstMedia($collectionName)
            ->setCustomProperty("is_main", true)
            ->save();


    }

    /**
     * @param HasMedia $model
     * @return void
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    protected function uploadAvatar (HasMedia $model): void
    {
        $model
            ->addMediaFromRequest("avatar")
            ->toMediaCollection("avatars");

    }


    protected function clearCollection(Model $model, string $collectionName): void
    {
        $model->clearMediaCollection($collectionName);

    }

}