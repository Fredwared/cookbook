<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class ApiCreatedResponse implements Responsable
{

    protected mixed $data;
    protected string $message;
    protected int $code;

    public function __construct($data, $message, $code)
    {
        $this->data = $data;
        $this->message = $message;
        $this->code = $code;
    }

    public function toResponse($request): JsonResponse
    {
        return response()->json([
            "success" => true,
            "message" => $this->message,
            "data" => $this->data
        ], $this->code);
    }


}