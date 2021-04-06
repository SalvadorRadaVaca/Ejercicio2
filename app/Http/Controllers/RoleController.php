<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('roles.index')->with([
            'roles' => Role::all(), 
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
        return Redirect::to('/roles');
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
