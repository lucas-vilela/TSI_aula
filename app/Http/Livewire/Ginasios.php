<?php

namespace App\Http\Livewire;

use App\Models\Ginasio;
use Livewire\Component;

class Ginasios extends Component
{
    
    public $ginasios;
    public $orderAsc;

    public $id_ginasio;
    public $nome ;
    public $img_capa;
    public $telefone;
    public $cep;
    public $data_registro;
    public $bebidas;
    public $area_kids;
    public $wifi;
    public $qtd_vestiarios;
    public $estacionamento;
    public $churrasqueira;
    public $qtd_banheiros;
    public $tv_assinatura;
    public $arquibancada;
    public $lanches;

    public function mount(){
        $this->ginasios = Ginasio::all();
        $this->orderAsc = TRUE;
    }

    public function reverter(){
        $this->ginasios=$this->ginasios->reverse();
    }

    public function orderByName(){
        $this->orderBy('nome');
    }

    // public function orderByPrice(){
    //     $this->orderBy('telefone');
    // }

    public function orderBy($column){
        $this->ginasios = Ginasio::orderBy($column,$this->orderAsc?'asc':'desc')->get();
        $this->orderAsc = !$this->orderAsc;
    }


    public function save(){
        $Ginasio = [
            "nome"=>$this->nome,
            "img_capa"=>$this->img_capa,
            "telefone"=>$this->telefone,
            "cep"=>$this->cep,
            "data_registro"=>$this->data_registro,
            "lanches"=>$this->lanches?true:false,
            "bebidas"=>$this->bebidas?true:false,
            "area_kids"=>$this->area_kids?true:false,
            "wifi"=>$this->wifi?true:false,
            "qtd_vestiarios"=>$this->qtd_vestiarios,
            "estacionamento"=>$this->estacionamento?true:false,
            "churrasqueira"=>$this->churrasqueira?true:false,
            "qtd_banheiros"=>$this->qtd_banheiros,
            "tv_assinatura"=>$this->tv_assinatura?true:false,
            "arquibancada"=>$this->arquibancada?true:false,
        ];
        Ginasio::create($Ginasio);
        $this->clear();
        $this->orderAsc = false;
        $this->list();
        
    }

    public function update($id){
        
        $Ginasio = [
            "nome"=>$this->nome,
            "img_capa"=>$this->img_capa,
            "telefone"=>$this->telefone,
            "cep"=>$this->cep,
            "data_registro"=>$this->data_registro,
            "lanches"=>$this->lanches?true:false,
            "bebidas"=>$this->bebidas?true:false,
            "area_kids"=>$this->area_kids?true:false,
            "wifi"=>$this->wifi?true:false,
            "qtd_vestiarios"=>$this->qtd_vestiarios,
            "estacionamento"=>$this->estacionamento?true:false,
            "churrasqueira"=>$this->churrasqueira?true:false,
            "qtd_banheiros"=>$this->qtd_banheiros,
            "tv_assinatura"=>$this->tv_assinatura?true:false,
            "arquibancada"=>$this->arquibancada?true:false,
        ];
        //dd($Ginasio);
        //dd(Ginasio::find($id));
        Ginasio::find($id)->update($Ginasio);
        $this->clear();
        $this->orderAsc = false;
        $this->list();
        
    }



    private function list(){
        if($this->orderAsc)
            $this->ginasios = Ginasio::all();
         else $this->ginasios = Ginasio::all()->reverse();
     }

    public function remove($id){
        if(!Ginasio::destroy($id))
            return "Erro!";
        $this->list();
    }

    private function clear()
    {
        $this->nome = '';
        $this->img_capa = '';
        $this->telefone = '';
        $this->qtd_vestiarios = '';
        $this->qtd_banheiros = '';
        $this->lanches = null;
        $this->data_registro = null;
        $this->bebidas = null;
        $this->area_kids = null;
        $this->wifi = null;
        $this->estacionamento = null;
        $this->churrasqueira = null;
        $this->tv_assinatura = null;
        $this->arquibancada = null;
    }

    public function render()
    {
        return view('livewire.ginasios');
    }


}
