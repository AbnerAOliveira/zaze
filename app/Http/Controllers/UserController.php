<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $validacao = Validator::make($data, [
            'email' => ['email', 'required', 'unique:users'],
            'phone' => ['required', 'unique:users'],

        ], [
            'email.unique' => 'Email já existe',
            'phone.unique' => 'Telefone já existe',
            'email.email' => 'Email inválido',
            'email.required' => 'Email obrigatório',
        ]);

        if ($validacao->fails()) {
            return $validacao->errors();
        } else {
            User::create($data, [
                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'phone' => $data['phone']
            ]);
            return 'cadastrado';
        }
    }

    public function show($id)
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
