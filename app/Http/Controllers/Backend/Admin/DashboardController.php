<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use Spatie\Activitylog\Traits\LogsActivity;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Backend/Admin/Dashboard/Dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    public function logs()
    {
        return LogsActivity::getLogNameToUse();
    }
}
