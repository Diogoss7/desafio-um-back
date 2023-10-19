<?php

// UserController.php
namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(UserFormRequest $request)
    {
        try {
            $user = User::create($request->all());
            return response()->json(['message' => $user]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao criar usuário'], 500);
        }
    }
    public function getUsers()
    {
        try {
            $users = User::orderBy('created_at', 'desc')->get();
            return response()->json(['users' => $users]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter usuários'], 500);
        }
    }
    public function update(UserFormRequest $request, $id)
    {
        try {
            if (!isset($id) || empty($id)) {

                return response()->json(['error' => 'Erro ao atualizar usuário'], 500);
            }
            $user = User::findOrFail($id);
            $user->update($request->all());
            return response()->json(['message' => 'Usuário atualizado com sucesso']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao criar usuário'], 500);
        }
    }
    public function delete($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json(['message' => 'Registro deletado com sucesso']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao deletar Registro'], 500);
        }
    }
}
