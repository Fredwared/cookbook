<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function showPasswordResetForm(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view("auth.reset-password");
    }

    public function updatePassword(ResetPasswordRequest $request,User $user): \Illuminate\Http\RedirectResponse
    {
        $fields = $request->validated();

        $currentPassword = Hash::check($fields["current_password"],auth()->user()->password);

        if ($currentPassword) {
         $user->update(["password" => bcrypt($fields["password"])]);

         return to_route("dashboard");
        }

        return back();

    }
}
