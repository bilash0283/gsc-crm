<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\User;
use App\Notifications\AdminNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $agents = User::query()
            ->where(['type' => AGENT])
            ->with(['agent'])
            ->when($request->input('status'),
                fn($query) => $query->whereHas('agent', fn($q) => $q->where('isActive', (bool)$request->input('status')))
            )
            ->when($request->input('search'), function ($query, $search) {
                $query->where('username', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('phone', 'like', '%' . $search . '%');
            })
            ->orderBy('id', $request->input('orderBy', 'desc'))
            ->paginate($request->input('per_page', 10))
            ->withQueryString();


        return Inertia::render('Backend/Admin/Agent/Index', [
            'title' => 'All Agent',
            'agents' => $agents,
            'queries' => $request->query(),
            'url' => URL::route('admin.agent.index')
        ]);
    }

    public function getAgents(Request $request)
    {
        $agents = User::query()
            ->where(['type' => AGENT])
            ->with(['agent'])
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = DB::table('countries')->select('id', 'country_name')->get();

        return Inertia::render('Backend/Admin/Agent/Create', [
            'title' => 'Create New Agent',
            'countries' => $countries,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:15',
            'password' => 'required|string|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::query()->create([
            'username' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => uploadFile($request->file('image'), 'agent'),
            'type' => AGENT,
        ]);

        Agent::query()->create([
            'user_id' => $user->id,
            'comp_name' => $request->comp_name,
            'designation' => $request->designation,
            'country_id' => $request->country_id,
            'comp_address' => $request->comp_address,
            'comp_start_year' => $request->comp_start_year,
            'bank_name' => $request->bank_name,
            'bank_acc_name' => $request->bank_acc_name,
            'bank_acc_number' => $request->bank_acc_number,
            'bank_address' => $request->bank_address,
            'bank_branch_name' => $request->bank_branch_name,
            'bank_swift_code' => $request->bank_swift_code,
            'comp_logo' => uploadFile($request->file('comp_logo'), 'agent'),
            'comp_reg_sertificat' => uploadFile($request->file('comp_reg_sertificat'), 'agent'),
            'fb_url' => $request->fb_url,
            'web_url' => $request->web_url,
            'isActive' => false,
            'status' => PENDING,
        ]);

        $admin = Auth::user();

//        if ($user) {
//            Notification::send($admin,new AdminNotification($user));
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
