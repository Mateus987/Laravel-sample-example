<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
        {
            return response()->json([
                "pedidos" => "teste"
            ]);
        }

    public function store(Request $request)
        {
            $dados = $request->all();

            return response()->json([
                "recebido" => $dados
            ]);
        }
}
