<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    public function __construct()
    {
       $this->usuario = new Usuario(); 
    }

    public function index()
    {
      return view('usuarios', ['usuarios'=>$this->usuario->all()]);
    }

    public function show($id)
    {
        return view('show_usuario', ['usuario'=>$this->usuario->find($id)]);
    }

    public function create()
    {
      return view('usuario_create');
    }

    public function store(Request $request)
    {
      $newUsuario = $request->all();

      if (usuario::create($newUsuario))
      return redirect('/usuarios');
      else
        dd("Erro ao inserir novo usuario !");
    }

    public function edit($id)
    {
      
      $data = ['usuario' => usuario::find($id)];
      
      return view('usuario_edit', $data);
    }

    public function update(Request $request, $id)
    {
      
      $updatedUsuario = $request->all();

      if (usuario::find($id)->update($updatedUsuario))
      return redirect('/usuarios');
      else
        dd("Erro ao inserir novo usuario !");
    }

    public function remove($id)
    {
      $data = ['usuario' => usuario::find($id)];
      return view('usuario_delete_confirm', $data);
    }

    public function delete($id)
    {
      if (usuario::destroy($id))
      return redirect('/usuarios');
      else
        dd("Erro ao deletar usuario !");
    }
}
