<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Esporte;

class Esportes extends Component
{
    public $esportes;
    public $orderAsc;

    public $id_esporte;
    public $modalidade ;
    public $desc_modalidade;
    public $nr_jogadores;
    

    public function mount(){
        $this->esportes = Esporte::all();
        $this->orderAsc = TRUE;
    }

    public function reverter(){
        $this->esportes=$this->esportes->reverse();
    }

    public function orderByName(){
        $this->orderBy('modalidade');
    }

    // public function orderByPrice(){
    //     $this->orderBy('nr_jogadores');
    // }

    public function orderBy($column){
        $this->esportes = Esporte::orderBy($column,$this->orderAsc?'asc':'desc')->get();
        $this->orderAsc = !$this->orderAsc;
    }


    public function save(){
        $Esporte = [
            "modalidade"=>$this->modalidade,
            "desc_modalidade"=>$this->desc_modalidade,
            "nr_jogadores"=>$this->nr_jogadores,
        ];
        Esporte::create($Esporte);
        $this->clear();
        $this->orderAsc = false;
        $this->list();
        
    }

    public function update($id){
        
        $Esporte = [
            "modalidade"=>$this->modalidade,
            "desc_modalidade"=>$this->desc_modalidade,
            "nr_jogadores"=>$this->nr_jogadores,
        ];
        //dd($Esporte);
        //dd(Esporte::find($id));
        Esporte::find($id)->update($Esporte);
        $this->clear();
        $this->orderAsc = false;
        $this->list();
        
    }

    private function list(){
        if($this->orderAsc)
            $this->esportes = Esporte::all();
         else $this->esportes = Esporte::all()->reverse();
     }

    public function remove($id){
        if(!Esporte::destroy($id))
            return "Erro!";
        $this->list();
    }

    private function clear()
    {
        $this->modalidade = '';
        $this->desc_modalidade = '';
        $this->nr_jogadores = '';
    }

    public function render()
    {
        return view('livewire.esportes');
    }

}
