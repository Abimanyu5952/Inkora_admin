<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JwtLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = auth('api')->attempt($credentials)) {
            // For web, redirect back with error
            return back()->with('error', 'Unauthorized');
        }

        // If the request expects JSON (API), return JSON
        if ($request->expectsJson() || $request->wantsJson()) {
            return response()->json([
                'access_token' => $token,
                'user' => auth('api')->user(),
                'role' => auth('api')->user()->role,
                'token_type' => 'bearer',
                'expires_in' => auth('api')->factory()->getTTL() * 60
            ]);
        }

        // For web, redirect to cart with success message
        return redirect()->route('cart')->with('success', 'Login successful!');
    }
    
    public function logout(Request $request)
    {
        if ($request->expectsJson() || $request->wantsJson()) {
            // API logout (JWT)
            auth('api')->logout();
            return response()->json(['message' => 'Successfully logged out']);
        } else {
            // Web logout (session)
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login')->with('success', 'Logged out successfully!');
        }
    }
}