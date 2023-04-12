<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\TwoFactorRequest;
use App\Models\UserCode;
use Illuminate\Support\Facades\Session;

class TwoFactorController extends Controller
{
    public function store(TwoFactorRequest $request)
    {
        $fields = $request->validated();

        $find = UserCode::query()->where('user_id', auth()->user()->id)
            ->where('code', $fields["code"])
            ->first();

        if (!is_null($find)) {
            Session::put('user_code', auth()->id());
            return response()->json([
                "message"
            ]);
        }
    }
}
