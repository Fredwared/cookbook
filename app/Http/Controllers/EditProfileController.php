<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfileRequest;
use App\Models\User;

class EditProfileController extends Controller
{
    public function edit(User $user): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view("auth.edit",compact("user"));
    }

    public function update(EditProfileRequest $request,User $user): \Illuminate\Http\RedirectResponse
    {
        $fields = $request->validated();

        $user->update($fields);

        return to_route("dashboard");
    }
}
