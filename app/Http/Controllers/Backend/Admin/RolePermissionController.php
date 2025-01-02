<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Backend/Admin/Role/Index', [
            'title' => 'Role',
            'roles' => Role::query()->with('permissions')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Backend/Admin/Role/Create', [
            'title' => 'Role Create',
            'modules' => Permission::query()->get()->groupBy('module'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'required|array|min:1',
            'permissions.*' => 'exists:permissions,id',
        ],[
            'permissions.required' => "Please select at least one permission",
        ]);

        if (!empty($request->input('permissions'))){
            $role = Role::create(['name'=>$request->input('name')]);
            $role->givePermissionTo($request->input('permissions'));
        }

        return redirect()->route('admin.role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Inertia::render('Backend/Admin/Role/Edit', [
            'title' => 'Role Edit',
            'modules' => Permission::query()->get()->groupBy('module'),
            'role' => Role::with('permissions')->findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'permissions' => 'required|array|min:1',
            'permissions.*' => 'exists:permissions,id',
        ],[
            'permissions.required' => "Please select at least one permission",
        ]);


        $role = Role::findOrFail($id);
        if (!empty($request->input('permissions'))){
            $role->update(['name'=>$request->input('name')]);
            $role->syncPermissions($request->input('permissions'));
            return redirect()->route('admin.role.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Role::query()->findOrFail($id)->delete();
        return redirect()->route('admin.role.index');
    }
}
