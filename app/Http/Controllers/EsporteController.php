<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Esporte;

class EsporteController extends Controller
{
    public function __construct()
    {
       $this->esporte = new Esporte(); 
    }

    public function index()
    {
      return view('esportes', ['esportes'=>$this->esporte->all()]);
    }

    public function show($id)
    {
        return view('show_esporte', ['esporte'=>$this->esporte->find($id)]);
    }

    public function create()
    {
      return view('esporte_create');
    }

    public function store(Request $request)
    {
      $newEsporte = $request->all();

      if (Esporte::create($newEsporte))
      return redirect('/esportes');
      else
        dd("Erro ao inserir novo esporte !");
    }

    public function edit($id)
    {
      
      $data = ['esporte' => Esporte::find($id)];
      
      return view('esporte_edit', $data);
    }

    public function update(Request $request, $id)
    {
      
      $updatedEsporte = $request->all();

      if (Esporte::find($id)->update($updatedEsporte))
      return redirect('/esportes');
      else
        dd("Erro ao inserir novo esporte !");
    }

    public function remove($id)
    {
      $data = ['esporte' => Esporte::find($id)];
      return view('esporte_delete_confirm', $data);
    }

    public function delete($id)
    {
      if (Esporte::destroy($id))
      return redirect('/esportes');
      else
        dd("Erro ao deletar esporte !");
    }
}
