<?php

namespace App\Http\Controllers\Backend\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashbaordController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Backend/Agent/Dashboard/Dashboard',[
            'title' => 'Dashbaord',
        ]);
    }
}
