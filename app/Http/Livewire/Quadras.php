<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quadra;

class Users extends Component
{
    public $quadras;
    public $orderAsc;

    public $id_quadra;
    public $nome_quadra ;
    public $dimensoes;
    public $piso;
    

    public function mount(){
        $this->quadras = Quadra::all();
        $this->orderAsc = TRUE;
    }

    public function reverter(){
        $this->quadras=$this->quadras->reverse();
    }

    public function orderByName(){
        $this->orderBy('nome_quadra');
    }

    public function orderBy($column){
        $this->quadras = Quadra::orderBy($column,$this->orderAsc?'asc':'desc')->get();
        $this->orderAsc = !$this->orderAsc;
    }


    public function save(){
        $quadra = [
            "nome_quadra"=>$this->nome_quadra,
            "dimensoes"=>$this->dimensoes,
            "piso"=>$this->piso,
        ];
        Quadra::create($quadra);
        $this->clear();
        $this->orderAsc = false;
        $this->list();
        
    }

    public function update($id_quadra){
        
        $quadra = [
            "nome_quadra"=>$this->nome_quadra,
            "dimensoes"=>$this->dimensoes,
            "piso"=>$this->piso,
        ];
        //dd($quadras);
        //dd(Quadra::find($id_quadra));
        Quadra::find($id_quadra)->update($quadra);
        $this->clear();
        $this->orderAsc = false;
        $this->list();
        
    }

    private function list(){
        if($this->orderAsc)
            $this->quadras = Quadra::all();
         else $this->quadras = Quadra::all()->reverse();
     }

    public function remove($id_quadra){
        if(!Quadra::destroy($id_quadra))
            return "Erro!";
        $this->list();
    }

    private function clear()
    {
        $this->nome_quadra = '';
        $this->dimensoes = '';
        $this->piso = '';
    }

    public function render()
    {
        return view('livewire.quadras');
    }
}
