<?php

namespace App\Http\Controllers\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Products\StoreCategoryRequest;
use App\Http\Resources\V1\Products\CategoryResource;
use App\Http\Responses\ApiCreatedResponse;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;



/**
 * @group Categories
 *
 * End points to see list of categories and individual category
 *
 */
class CategoryController extends Controller
{


    /**
     * Show collection of categories
     *
     *
     * @return AnonymousResourceCollection
     *
     * @apiResource App\Http\Resources\V1\Products\CategoryResource
     * @apiResourceModel App\Models\Category
     *
     */

    public function index(): AnonymousResourceCollection
    {
        $categories = Category::query()->whereNull("parent_id")->with("childrens")->get();
        return CategoryResource::collection($categories);
    }


    /**
     * Create a new category
     *
     * @bodyParam name string required Name of the category. Example:sport
     * @bodyParam parent_id int nullable ID of the parent category for subcategory.
     *
     * @param StoreCategoryRequest $request
     * @return ApiCreatedResponse
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @apiResource App\Http\Resources\V1\Products\CategoryResource
     * @apiResourceModel App\Models\Category
     *
     *
     */
    public function store(StoreCategoryRequest $request): ApiCreatedResponse
    {
        $fields = $request->validated();
        $category = Category::query()->create($fields);

        $data = CategoryResource::make($category);

        return new ApiCreatedResponse($data, 'Category created successfully', ResponseAlias::HTTP_CREATED);
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
     *
     */

    public function show(Category $category): CategoryResource
    {
        return CategoryResource::make($category);
    }


    /**
     * Update existing category or it's subcategories
     *
     * @bodyParam name string required Name of the category. Example:sport
     * @bodyParam parent_id int nullable ID of the parent category for subcategory.
     *
     * @param StoreCategoryRequest $request
     * @param Category $category
     *
     *
     * @return ApiCreatedResponse
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @apiResource App\Http\Resources\V1\Products\CategoryResource
     * @apiResourceModel App\Models\Category
     *
     *
     */
    public function update(StoreCategoryRequest $request, Category $category): ApiCreatedResponse
    {
        $fields = $request->validated();

        $category->update($fields);

        $data = CategoryResource::make($category->refresh());

        return new ApiCreatedResponse($data, 'Category updated successfully', ResponseAlias::HTTP_OK);
    }

    /**
     * Delete existing category or it's subcategories
     *
     *
     *
     * @param Category $category
     * @return JsonResponse
     *
     *
     *
     */

    public function destroy(Category $category): JsonResponse
    {
        $category->delete();
        return response()->json([
            "message" => "Category deleted successfully"
        ]);
    }
}
