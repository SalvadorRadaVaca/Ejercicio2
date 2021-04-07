<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('roles.index')->with([
            'roles' => Role::all(), 
            'users_roles' => UserRole::all(),
        ]);
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        Role::create($request->all());

        Session::flash('message', 'El role fue creado con éxito');
        return Redirect::to('/usuarios');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
