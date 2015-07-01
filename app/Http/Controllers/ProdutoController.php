<?php

namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller
{

    public function lista()
    {

        $produtos = \DB::select("select * from produtos");

        return view('produto.listagem')->withProdutos($produtos);
    }

    public function mostra($id)
    {

        $resposta = \DB::select("select * from produtos where id = ?", [$id]);

        if(empty($resposta)){
            return "Este produto não existe";
        }
        return view('produto.detalhes')->with('p', $resposta[0]);
    }
}
