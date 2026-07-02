<?php

namespace Modules\User\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\User\App\Models\User;

class AuthController extends Controller
{
    public function login(
        Request $request
    ) {

        if (
            ! Auth::attempt(
                $request->only(
                    'email',
                    'password'
                )
            )
        ) {

            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }

        /** @var User $user */
        $user = Auth::user();

        $token = $user
            ->createToken('api-token')
            ->plainTextToken;

        return response()->json([
            'token' => $token,
        ]);
    }

    public function logout(
        Request $request
    ) {

        $request->user()
            ->currentAccessToken()
            ->delete();

        return response()->json([
            'message' => 'Logged out',
        ]);
    }
}
