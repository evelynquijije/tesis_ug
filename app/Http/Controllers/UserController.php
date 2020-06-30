<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::All();
        return view('usuarios.index', ['users' => $users]);
    }


    public function create()
    {
        return view('usuarios.create');
    }


    public function store(Request $request)
    {   
        $usuario = new User();
        $usuario->name= request('name');
        $usuario->email= request('email');
        // $usuario->password= request('password');
        $password=request('password');
        $usuario->password=Hash::make($password);
        $usuario->save();
        return redirect ('usuarios');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('usuarios.edit',['user'=>User::findOrFail($id)]);
    }

    public function update(UserFormRequest $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->name= $request->get('name');
        $usuario->email= $request->get('email');
        // $usuario->password=$request->get('password');

        $usuario->update();
        return redirect('usuarios');
    }

    public function destroy($id)
    {
        //
    }
}
