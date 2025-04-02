<?php

// UserController.php
namespace App\Http\Controllers;

use App\Http\Requests\ClientFormRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Log;


class ClientController extends Controller
{
    public function register(ClientFormRequest $request)
    {
        try {
            Log::info('Dados recebidos:', $request->validated());
            $user = Client::create($request->validated());
            return response()->json(['message' => 'Usuário registrado com sucesso', 'user' => $user], 201);
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error('Erro no banco de dados:', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Erro no banco de dados', 'details' => $e->getMessage()], 500);
        } catch (\Exception $e) {
            Log::error('Erro geral:', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Erro ao criar usuário', 'details' => $e->getMessage()], 500);
        }
    }
    public function getClients()
    {
        try {
            $users = Client::orderBy('created_at', 'desc')->get();
            return response()->json(['clients' => $users]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter usuáriosaaaaaaaa'], 500);
        }
    }

    public function getClientById($id)
    {
        try {
            $user = Client::findOrFail($id);
            return response()->json(['user' => $user]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter usuário'], 500);
        }
    }
    public function update(ClientFormRequest $request, $id)
    {
        try {
            if (!isset($id) || empty($id)) {

                return response()->json(['error' => 'Erro ao atualizar usuário'], 500);
            }
            $user = Client::findOrFail($id);
            $user->update($request->all());
            return response()->json(['message' => 'Usuário atualizado com sucesso']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao atualizar usuário'], 500);
        }
    }
    public function delete($id)
    {
        try {
            $user = Client::findOrFail($id);
            $user->delete();
            return response()->json(['message' => 'Registro deletado com sucesso']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao deletar Registro'], 500);
        }
    }
}
