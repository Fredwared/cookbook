<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Resources\V1\Products\BrandResource;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    /**
     * Show collection of brands
     *
     *
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\BrandResource
     * @apiResourceModel App\Models\Brand
     *
     */
    public function index(): JsonResponse
    {
        $brands = Brand::all();

        return response()->json(BrandResource::collection($brands));
    }

    /**
     * Create a new brand
     * @bodyParam name required Name of the brand. Example apple
     *
     * @param StoreBrandRequest $request
     *
     * @return JsonResponse
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @apiResource App\Http\Resources\V1\Products\BrandResource
     * @apiResourceModel App\Models\Brand
     *
     * @responseFile storage/responses/products/brand.json
     */
    public function store(StoreBrandRequest $request): JsonResponse
    {
        $brand = Brand::query()->create($request->validated());

        return response()->json([
            "message" => "New brand created successfully",
            "data" => new BrandResource($brand)
        ]);
    }


    /**
     * Show individual Brand
     *
     *
     * @param Brand $brand
     *
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\BrandResource
     * @apiResourceModel App\Models\Brand
     */

    public function show(Brand $brand): JsonResponse
    {
        return response()->json(new BrandResource($brand));
    }

    /**
     * Update an existing brand
     *
     * @bodyParam name required Name of the brand. Example apple
     *
     * @param StoreBrandRequest $request
     * @param Brand $brand
     *
     * @return JsonResponse
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @apiResource App\Http\Resources\V1\Products\BrandResource
     * @apiResourceModel App\Models\Brand
     *
     * @responseFile storage/responses/products/updateBrand.json
     */
    public function update(StoreBrandRequest $request, Brand $brand): JsonResponse
    {
        $fields = $request->validated();

        $brand->update($fields);

        return response()->json([
            "message" => "Brand updated successfully",
            "data" => new BrandResource($brand->refresh())
        ]);
    }

    /**
     * Delete existing brand
     *
     * @param Brand $brand
     *
     * @return JsonResponse
     */
    public function destroy(Brand $brand): JsonResponse
    {
        $brand->delete();

        return response()->json([
            "message" => "Brand deleted successfully"
        ]);
    }
}
