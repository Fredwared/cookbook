<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Products\StoreReviewRequest;
use App\Http\Requests\Api\V1\Products\UpdateReviewRequest;
use App\Http\Resources\V1\Products\ReviewResource;
use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ReviewController extends Controller
{

    /**
     * Show collection of reviews
     *
     *
     * @return AnonymousResourceCollection
     *
     * @apiResource App\Http\Resources\V1\Products\ReviewResource
     * @apiResourceModel App\Models\Review
     *
     */
    public function index(): AnonymousResourceCollection
    {
        $reviews = Review::query()->with("products")->get();
        return ReviewResource::collection($reviews);
    }

    /**
     * Create a new review
     *
     * @bodyParam content required string Body of the review. Example: the worst product ever
     * @bodyParam product_id required ID of product related to the review
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @apiResource App\Http\Resources\V1\Products\ReviewResource
     * @apiResourceModel App\Models\Review
     *
     * @responseFile storage/responses/products/review.json
     *
     * @param StoreReviewRequest $request
     *
     * @return JsonResponse
     */
    public function store(StoreReviewRequest $request): JsonResponse
    {
        $fields = $request->validated();


        $review = Review::query()->create($fields);

        return response()->json([
            "message" => "Review created successfully",
            "data" => new ReviewResource($review)
        ]);
    }


    /**
     * Show each individual category
     *
     * @param Review $review
     *
     * @return ReviewResource
     *
     * @apiResource App\Http\Resources\V1\Products\ReviewResource
     * @apiResourceModel App\Models\Review
     */
    public function show(Review $review): ReviewResource
    {
        return new ReviewResource($review);
    }

    /**
     * Update a existing resource
     *
     * @bodyParam content required string Body of the review. Example: the worst product ever
     * @bodyParam product_id required ID of product related to the review
     *
     * @header Content-Type application/json
     * @header Accept application/json
     *
     * @apiResource App\Http\Resources\V1\Products\ReviewResource
     * @apiResourceModel App\Models\Review
     *
     * @responseFile storage/responses/products/updateReview.json
     *
     * @param UpdateReviewRequest $request
     * @param Review $review
     *
     * @return JsonResponse
     */

    public function update(UpdateReviewRequest $request, Review $review): JsonResponse
    {

        $fields = $request->validated();

        $review->update($fields);

        return response()->json([
            "message" => "Review updated successfully",
            "data" => new ReviewResource($review->refresh())
        ]);
    }

    /**
     * Delete existing review
     *
     * @param Review $review
     *
     * @return JsonResponse
     *
     */
    public function destroy(Review $review): JsonResponse
    {
        $review->delete();

        return response()->json([
            "message" => "Review deleted successfully"
        ]);
    }
}
