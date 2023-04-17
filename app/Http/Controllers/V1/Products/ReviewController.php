<?php

namespace App\Http\Controllers\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Products\StoreReviewRequest;
use App\Http\Requests\V1\Products\UpdateReviewRequest;
use App\Http\Resources\V1\Products\ReviewResource;
use App\Http\Responses\ApiCreatedResponse;
use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

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
        $reviews = Review::query()->with("users")->get();

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
     *
     * @param StoreReviewRequest $request
     *
     * @return ApiCreatedResponse
     */
    public function store(StoreReviewRequest $request): ApiCreatedResponse
    {
        $fields = $request->validated();


        $fields["user_id"] = auth()->id();


        $review = Review::query()->create($fields);

        $data = ReviewResource::make($review);

        return new ApiCreatedResponse($data, 'Review created successfully', ResponseAlias::HTTP_CREATED);
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
        return ReviewResource::make($review);
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
     *
     * @param UpdateReviewRequest $request
     * @param Review $review
     *
     * @return ApiCreatedResponse
     */

    public function update(UpdateReviewRequest $request, Review $review): ApiCreatedResponse
    {

        $fields = $request->validated();

        $review->update($fields);

        $data = ReviewResource::make($review->refresh());

        return new ApiCreatedResponse($data, 'Review updated successfully', ResponseAlias::HTTP_OK);
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
