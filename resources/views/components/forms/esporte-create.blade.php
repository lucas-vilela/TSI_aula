<div class=" w-fit h-auto m-2 p-3 drop-shadow-2xl bg-white self-center rounded-md pt-6">
    <h1 class="text-xl">Cadastrar Novo Ginásio</h1>
    <div x-data="{
        modalidade:'',
        desc_modalidade:'',
        nr_jogadores:'',

        save(){
            $wire.set('modalidade', this.modalidade)
            $wire.set('desc_modalidade', this.desc_modalidade)
            $wire.set('nr_jogadores', this.nr_jogadores)
            $wire.save();
        }
    }">
    
        <form @submit.prevent="save()" id="ginasio-create">
            @csrf
            <table>
                <tr>
                    <td>Modalidade:</td>
                    <td><input x-model="modalidade" type="text" name="modalidade" /></td>
                </tr>
                <tr>
                    <td>Descrição Modalidade:</td>
                    <td>
                        <input x-model="desc_modalidade" type="tel" name="desc_modalidade" >
                    </td>
                </tr>
                <tr>
                    <td>Nº de jogadores:</td>
                    <td><input x-model="nr_jogadores" type="text" name="nr_jogadores" /></td>
                </tr>
            </table>
        </form>
            <table>
                <tr align="center">
                    <td>
                        <button @click="open=false" class='btn btn-danger'>
                            Cancelar
                        </button>
                    </td>
                    <td>
                        <button form="ginasio-create" @click="open=false" class='btn btn-success bg-green-600'>
                            Criar
                        </button>
                    </td>
                </tr>
            </table>
        
    </div>
</div>
