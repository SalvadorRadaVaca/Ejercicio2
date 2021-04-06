<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Models\User;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('users.index')->with([
            'users' => User::all(),
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserCreateRequest $request)
    {
        User::create($request->all());

        Session::flash('message', 'El usuario fue creado con éxito');
        return Redirect::to('/usuarios');
    }

    public function show($id)
    {   
        //
    } 

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with([
            'user' => $user,
        ]);
    } 

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message', 'El usuario fue editado con éxito');
        return Redirect::to('/usuarios');
    } 

    public function destroy(User $user, Request $request, $id)
    {
        if ($request->ajax()){

            $user = User::findOrFail($id);

            if ($user){

                $user->delete();

                return response()->json(array('success' => true));
            }

        }
    }
}
