<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Products\StoreProductRequest;
use App\Http\Requests\Api\V1\Products\UpdateProductRequest;
use App\Http\Resources\V1\Products\ProductResource;
use App\Models\Product;
use App\Services\Products\ProductService;
use Illuminate\Http\JsonResponse;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{


    /**
     * Show collection of products
     *
     *
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\ProductResource
     * @apiResourceModel App\Models\Product
     *
     */
    public function index(): JsonResponse
    {
        $products = Product::query()->with("category", "brand", "reviews", "attributes")->get();
        return response()->json(ProductResource::collection($products));
    }

    /**
     * Create a new category
     *
     * @bodyParam name string required Name of the product. Example:gaming pc
     * @bodyParam description required Description of the product. Example: this is the last gen gaming pc,
     * @bodyParam category required Category of the product. Example:pc
     * @bodyParam brand required Brand of the product. Example:samsung
     * @bodyParam price required Price of the product. Example:120.99
     * @bodyParam images  required array Image of the product.
     * @bodyParam attributes required array Attributes of the product.Example:color
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @param StoreProductRequest $request
     * @param ProductService $productService
     * @return JsonResponse
     *
     *
     *
     * @apiResource App\Http\Resources\V1\Products\ProductResource
     * @apiResourceModel App\Models\Product
     *
     * @responseFile storage/responses/products/product.json
     *
     */

    public function store(StoreProductRequest $request, ProductService $productService): JsonResponse
    {
        $product = $productService->storeProduct(
            $request->validated()
        );

        return response()->json([
            "message" => "Product created successfully",
            "data" => ProductResource::make($product)
        ]);
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
        return ProductResource::make($product);
    }

    /**
     * Update existing product
     *
     * @bodyParam name string required Name of the product. Example:gaming pc
     * @bodyParam description required Description of the product. Example: this is the last gen gaming pc,
     * @bodyParam category required Category of the product. Example:pc
     * @bodyParam brand required Brand of the product. Example:samsung
     * @bodyParam price required Price of the product. Example:120.99
     * @bodyParam attributes required array Attributes of the product.Example:color
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @param UpdateProductRequest $request
     * @param Product $product
     * @param ProductService $productService
     *
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\ProductResource
     * @apiResourceModel App\Models\Product
     *
     * @responseFile storage/responses/products/updateProduct.json
     *
     *
     */

    public function update(UpdateProductRequest $request, Product $product, ProductService $productService): JsonResponse
    {


        $product = $productService->updateProduct(
            $request->validated(), $product, $request->hasFile("images")
        );


        return response()->json(
            [
                "message" => "Product updated successfully",
                "data" => ProductResource::make($product->fresh())
            ]
        );
    }

    /**
     * Delete existing product
     *
     *
     * @param Product $product
     *
     * @return JsonResponse
     *
     * @response 200
     * {
     * "message":"Product deleted successfully"
     *  }
     *
     */
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json([
            "message" => "Product deleted successfully"
        ]);
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
