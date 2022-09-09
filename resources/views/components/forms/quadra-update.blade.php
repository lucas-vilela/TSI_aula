<div class="flex flex-col w-full h-full pt-40 bg-gray-600/50" >
    <div class="flex flex-col justify-center w-1/2 shadow dark:bg-gray-700 h-auto m-5 p-3 bg-white self-center rounded-md">
        <div x-data="{
        {{-- quadra: @js($quadra), --}}
        nome_quadra:'{{$quadra->nome_quadra}}',
        dimensoes:'{{$quadra->dimensoes}}',
        piso:'{{$quadra->piso}}',
        update(id){

            $wire.set('nome_quadra', this.nome_quadra)
            $wire.set('dimensoes', this.dimensoes)
            $wire.set('piso', this.piso)
            $wire.update(id);
        }
        }">
            <form @submit.prevent="update({{$quadra->id_quadra}})" id="quadra-update-{{$quadra->id_quadra}}">
                @csrf
                <table>
                    <tr>
                        <td>Nome Quadra</td>
                        <td><input x-model='nome_quadra' type="text" name="nome_quadra" value="{{$quadra->nome_quadra}}" /></td>
                    </tr>
                    <tr>
                        <td>Dimensões</td>
                        <td>
                            <input x-model='dimensoes'  type="text" name="dimensoes"  value="{{$quadra->dimensoes}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo de piso</td>
                        <td>
                            <input x-model='piso'  type="text" name="piso"  value="{{$quadra->piso}}">
                        </td>
                    </tr>
                </table>
                <table>
                    <tr align="center">
                        <td>
                            <button @click="idmodal=null;" class='btn btn-danger'>
                                Cancelar
                            </button>
                        </td>
                        <td>
                            <Button @click="idmodal=null;" form="quadra-update-{{$quadra->id_quadra}}"
                            class='btn btn-success bg-'>Atualizar
                            </Button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
