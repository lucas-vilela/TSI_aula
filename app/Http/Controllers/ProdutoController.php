<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    protected $produto;

    public function __construct(){
        $this->produto = new Produto();
    }

    function index(){
        //return response()->json($this->produto->all());
        return view('produtos', ['produtos'=>$this->produto->all()]);
    }

    function show($id){

        return view('show_produto', ['produto' => $this->produto->find($id)]);
        

    }
}
