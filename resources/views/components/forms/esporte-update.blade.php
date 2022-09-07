<div class="flex flex-col w-full h-full pt-40 bg-gray-600/50" >
    <div class="flex flex-col justify-center w-1/2 shadow dark:bg-gray-700 h-auto m-5 p-3 bg-white self-center rounded-md">
        <div x-data="{
        {{-- esporte: @js($esporte), --}}
        modalidade:'{{$esporte->modalidade}}',
        desc_modalidade:'{{$esporte->desc_modalidade}}',
        nr_jogadores:'{{$esporte->nr_jogadores}}',
        update(id){

            $wire.set('modalidade', this.modalidade)
            $wire.set('nr_jogadores', this.nr_jogadores)
            $wire.set('desc_modalidade', this.desc_modalidade)
            $wire.update(id);
        }
        }">
            <form @submit.prevent="update({{$esporte->id_esporte}})" id="esporte-update-{{$esporte->id_esporte}}">
                @csrf
                <table>
                    <tr>
                        <td>Modalidade:</td>
                        <td><input x-model='modalidade' type="text" name="modalidade" value="{{$esporte->modalidade}}" /></td>
                    </tr>
                    <tr>
                        <td>Descrição Modalidade:</td>
                        <td>
                            <input x-model='desc_modalidade'  type="tel" name="desc_modalidade"  value="{{$esporte->desc_modalidade}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Nº de Jogadores:</td>
                        <td><input x-model='nr_jogadores'  type="text" name="nr_jogadores"  value="{{$esporte->nr_jogadores}}"/></td>
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
                            <Button @click="idmodal=null;" form="esporte-update-{{$esporte->id_esporte}}"
                            class='btn btn-success bg-'>Atualizar
                            </Button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
