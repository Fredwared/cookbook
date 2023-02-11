<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Products\StoreCategoryRequest;
use App\Http\Resources\V1\Products\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategoryController extends Controller
{


    /**
     * Show each individual category
     *
     *
     * @return AnonymousResourceCollection
     *
     * @apiResource App\Http\Resources\V1\Products\CategoryResource
     * @apiResourceModel App\Models\Category
     *
     * @responseFile storage/responses/products/category.json
     */

    public function index(): AnonymousResourceCollection
    {
        $categories = Category::query()->where('parent_id', '=', null)->with("childrens")->get();
        return CategoryResource::collection($categories);
    }


    /**
     * Create a new category
     *
     * @bodyParam name string required Name of the category. Example:sport
     * @bodyParam parent_id int nullable ID of the parent category for subcategory.
     *
     * @param StoreCategoryRequest $request
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\CategoryResource
     * @apiResourceModel App\Models\Category
     *
     * @responseFile storage/responses/products/category.json
     *
     */
    public function store(StoreCategoryRequest $request): \Illuminate\Http\JsonResponse
    {
        $fields = $request->validated();
        $category = Category::query()->create($fields);

        return response()->json([
            "message" => "New category created successfully",
            "data" => new CategoryResource($category)

        ]);
    }

    /**
     * Show each individual category
     *
     * @param Category $category
     *
     * @return CategoryResource
     *
     * @apiResource App\Http\Resources\V1\Products\CategoryResource
     * @apiResourceModel App\Models\Category
     *
     * @responseFile storage/responses/products/category.json
     *
     */

    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }


    /**
     * Update existing category or it's subcategories
     *
     * @bodyParam name string required Name of the category. Example:sport
     * @bodyParam parent_id int nullable ID of the parent category for subcategory.
     *
     * @param StoreCategoryRequest $request
     * @param Category $category
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\CategoryResource
     * @apiResourceModel App\Models\Category
     *
     * @responseFile storage/responses/products/category.json
     *
     */
    public function update(StoreCategoryRequest $request, Category $category): JsonResponse
    {
        $fields = $request->validated();

        $updatedCategory = $category->update($fields);
        return response()->json([
            "message" => "Category updated successfully",
            "data" => new CategoryResource($updatedCategory)
        ]);
    }

    /**
     * Update existing category or it's subcategories
     *
     *
     *
     * @param Category $category
     * @return JsonResponse
     *
     * @apiResource App\Http\Resources\V1\Products\CategoryResource
     * @apiResourceModel App\Models\Category
     *
     * @response 200
     * {
     * "message":"Category deleted successfully"
     * }
     *
     */

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            "message" => "Category deleted successfully"
        ]);
    }
}
