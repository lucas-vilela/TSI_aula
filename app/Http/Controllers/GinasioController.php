<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ginasio;

class GinasioController extends Controller
{
    public function __construct()
    {
       $this->ginasio = new Ginasio(); 
    }

    public function index()
    {
      return view('ginasios', ['ginasios'=>$this->ginasio->all()]);
    }

    public function show($id)
    {
        return view('show_ginasio', ['ginasio'=>$this->ginasio->find($id)]);
    }

    public function create()
    {
      return view('ginasio_create');
    }

    public function store(Request $request)
    {
      $newGinasio = $request->all();
      $newGinasio['bebidas'] = ($request->bebidas)?true:false;
      $newGinasio['area_kids'] = ($request->area_kids)?true:false;
      $newGinasio['wifi'] = ($request->wifi)?true:false;
      $newGinasio['estacionamento'] = ($request->estacionamento)?true:false;
      $newGinasio['churrasqueira'] = ($request->churrasqueira)?true:false;
      $newGinasio['tv_assinatura'] = ($request->tv_assinatura)?true:false;
      $newGinasio['arquibancada'] = ($request->arquibancada)?true:false;
      $newGinasio['lanches'] = ($request->lanches)?true:false;


      if (Ginasio::create($newGinasio))
      return redirect('/ginasios');
      else
        dd("Erro ao inserir novo ginásio !");
    }

    public function edit($id)
    {
      
      $data = ['ginasio' => Ginasio::find($id)];
      
      return view('ginasio_edit', $data);
    }

    public function update(Request $request, $id)
    {
      
      $newGinasio = $request->all();
      $newGinasio['bebidas'] = ($request->bebidas)?true:false;
      $newGinasio['area_kids'] = ($request->area_kids)?true:false;
      $newGinasio['wifi'] = ($request->wifi)?true:false;
      $newGinasio['estacionamento'] = ($request->estacionamento)?true:false;
      $newGinasio['churrasqueira'] = ($request->churrasqueira)?true:false;
      $newGinasio['tv_assinatura'] = ($request->tv_assinatura)?true:false;
      $newGinasio['arquibancada'] = ($request->arquibancada)?true:false;
      $newGinasio['lanches'] = ($request->lanches)?true:false;


      if (Ginasio::find($id)->update($newGinasio))
      return redirect('/ginasios');
      else
        dd("Erro ao atualizar ginasio !");
    }

    public function remove($id)
    {
      $data = ['ginasio' => Ginasio::find($id)];
      return view('ginasio_delete_confirm', $data);
    }

    public function delete($id)
    {
      if (Ginasio::destroy($id))
      return redirect('/ginasios');
      else
        dd("Erro ao deletar ginasio !");
    }

}
