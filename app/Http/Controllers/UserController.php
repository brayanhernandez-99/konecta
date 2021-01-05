<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\ViewName;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $users = User::all();
        $title = 'Listado de usuarios';
        return view('users.index', compact('title', 'users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        $title = 'Detalle de usuario';
        return view('users.show', compact('title', 'user'));
    }

    public function create()
    {
        $title = 'Crear usuario';
        return view('users.create', compact('title'));
    }

    public function newuser()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'document' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string'
        ]);
        $title = 'Nuevo usuario registrado';

        try {
            User::create([
                'name' => $data['name'],
                'document' => $data['document'],
                'email' => $data['email'],
                'address' => $data['address']
            ]);
            return view('users.new', compact('title', 'data'));
        } catch (\Throwable $error) {
            throw $error;
            return view('layout');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        $title = 'Editar usuario';
        return view('users.edit', compact('title', 'user'));
    }

    public function update()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'document' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required|string'
        ]);
        $title = 'Usuario Actualizado';

        try {
            $affectedRows = User::where('email', '=', $data['email'])->update($data);
            return view('users.update', compact('title', 'affectedRows', 'data'));
        } catch (\Throwable $error) {
            throw $error;
            return view('layout');
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        $title = 'Usuario eliminado';

        try {
            $affectedRows = User::where('id', '=', $id)->delete();
            return view('users.delete', compact('title', 'affectedRows', 'user'));
        } catch (\Throwable $error) {
            throw $error;
            return view('layout');
        }
    }
}
