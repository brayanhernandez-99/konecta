<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\ViewName;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        $users = User::all();
        $title = 'Listado Usuarios';
        return view('users.home', compact('title', 'users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        $title = 'Detalle Usuario';
        return view('users.show', compact('title', 'user'));
    }

    public function register()
    {
        $title = 'Crear Usuario';
        return view('users.register', compact('title'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $title = 'Editar Usuario';
        return view('users.edit', compact('title', 'user'));
    }

    public function create()
    {
        $title = 'Usuario Registrado';
        $data = request()->validate([
            'name' => 'required|string',
            'document' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string'
        ]);

        try {
            User::create([
                'name' => $data['name'],
                'document' => $data['document'],
                'email' => $data['email'],
                'address' => $data['address']
            ]);
            return view('users.create', compact('title', 'data'));
        } catch (\Throwable $error) {
            throw $error;
        }
    }

    public function update()
    {
        $title = 'Usuario Actualizado';
        $data = request()->validate([
            'name' => 'required|string',
            'document' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required|string'
        ]);

        try {
            $affectedRows = User::where('email', '=', $data['email'])->update($data);
            return view('users.update', compact('title', 'affectedRows', 'data'));
        } catch (\Throwable $error) {
            throw $error;
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        $title = 'Usuario Eliminado';

        try {
            $affectedRows = User::where('id', '=', $id)->delete();
            return view('users.delete', compact('title', 'user', 'affectedRows'));
        } catch (\Throwable $error) {
            throw $error;
        }
    }
}
