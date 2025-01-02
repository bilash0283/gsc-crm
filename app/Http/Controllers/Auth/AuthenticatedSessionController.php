<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthenticatedSessionController extends Controller
{

    public function create(){
        return Inertia::render('Auth/Login',[
            'title' => 'Login' ,
        ]);
    }
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        if (auth()->user()->type === ADMIN){
            return redirect()->route('admin.dashboard');
        }elseif (auth()->user()->type === AGENT){
            return redirect()->route('agent.dashboard');
        }elseif (auth()->user()->type === STUDENT){
            return redirect()->route('user.dashboard');
        }else{
            return response()->noContent();
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
