<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Products\ProductResource;
use App\Models\Product;
use App\Services\Products\CurrencyService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{


    /**
     * Show collection of products
     *
     *
     *
     * @apiResource App\Http\Resources\V1\Products\ProductResource
     * @apiResourceModel App\Models\Product
     */
    public function index(): AnonymousResourceCollection
    {
        $products = Product::query()
            ->with(["category", "reviews", "images", "entities", "contacts", "city", "country", ])
            ->get();


        /** @var CurrencyService $currency */
        $currency = app(CurrencyService::class)->getCurrency(request("currency", "usd"));

        request()->merge(['rate' => $currency->value]);

        return ProductResource::collection($products);
    }


    /**
     * Show individual product
     *
     *
     * @param Product $product
     *
     * @return ProductResource
     *
     * @apiResource App\Http\Resources\V1\Products\ProductResource
     * @apiResourceModel App\Models\Product
     */

    public function show(Product $product): ProductResource
    {
        $product->load(["category", "reviews", "images", "entities", "contacts", "city", "languages", "country"]);
        $currency = app(CurrencyService::class)->getCurrency(request("currency", "usd"));

        request()->merge(['rate' => $currency->value]);
        return ProductResource::make($product);
    }


    /**
     * Update Current Preview
     *
     * @param Product $product
     * @param Media $media
     * @return JsonResponse
     */
    public function updateMainImage(Product $product, Media $media): JsonResponse
    {

        $product->getMedia("images")
            ->each(
                fn(Media $image) => $image->setCustomProperty("is_main", $image->id == $media->id)->save()
            );

        return response()->json([
            "message" => "Preview  updated successfully"
        ]);


    }

}
