<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home()
    {
        return Inertia::render('Frontend/Home');
    }

    public function signUp(){
        return Inertia::render('Frontend/Signup');
    }

    public function student(){
        return Inertia::render('Frontend/service/Student');
    }

    public function agent(){
        return Inertia::render('Frontend/service/Agent');
    }

    public function serviceproviders(){
        return Inertia::render('Frontend/Home');
    }

    public function institute(){
        return Inertia::render('Frontend/service/Institutes');
    }

    public function usa(){
        return Inertia::render('Frontend/Studydestinations/Usa');
    }
    
    public function event(){
        return Inertia::render('Frontend/Event');
    }

    public function about(){
        return Inertia::render('Frontend/About');
    }


    

}
