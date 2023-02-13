<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Products\StoreProductRequest;
use App\Http\Resources\V1\Products\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

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
        $products = Product::query()->with(["category", "brand", "reviews"])->get();
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
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @param StoreProductRequest $request
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\ProductResource
     * @apiResourceModel App\Models\Product
     *
     * @responseFile storage/responses/products/product.json
     *
     */

    public function store(StoreProductRequest $request): JsonResponse
    {

        $fields = $request->validated();

        $product = Product::query()->create($fields);


        return response()->json([
            "message" => "Product created successfully",
            "data" => new ProductResource($product)
        ]);
    }

    /**
     * Show individual product
     *
     *
     * @param Product $product
     *
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\ProductResource
     * @apiResourceModel App\Models\Product
     */

    public function show(Product $product): JsonResponseq
    {
        return response()->json(new ProductResource($product));
    }

    /**
     * Update existing product
     *
     * @bodyParam name string required Name of the product. Example:gaming pc
     * @bodyParam description required Description of the product. Example: this is the last gen gaming pc,
     * @bodyParam category required Category of the product. Example:pc
     * @bodyParam brand required Brand of the product. Example:samsung
     * @bodyParam price required Price of the product. Example:120.99
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @param StoreProductRequest $request
     * @param Product $product
     *
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\ProductResource
     * @apiResourceModel App\Models\Product
     *
     * @responseFile storage/responses/products/updateProduct.json
     *
     */

    public function update(StoreProductRequest $request, Product $product): JsonResponse
    {
        $fields = $request->validated();

        $product->update($fields);

        return response()->json(
            [
                "message" => "Product updated successfully",
                "data" => new ProductResource($product->refresh())
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

}
