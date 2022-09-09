<div class=" w-fit h-auto m-2 p-3 drop-shadow-2xl bg-white self-center rounded-md pt-6">
    <h1 class="text-xl">Cadastrar Novo Usuário</h1>
    <div x-data="{
        nome_quadra:'',
        dimensoes:'',
        piso:'',

        save(){
            $wire.set('nome_quadra', this.nome_quadra)
            $wire.set('dimensoes', this.dimensoes)
            $wire.set('piso', this.piso)
            $wire.save();
        }
    }">
    
        <form @submit.prevent="save()" id="quadra-create">
            @csrf
            <table>
                <tr>
                    <td>nome_quadra:</td>
                    <td><input x-model="nome_quadra" type="text" name="nome_quadra" /></td>
                </tr>
                <tr>
                    <td>Descrição nome_quadra:</td>
                    <td>
                        <input x-model="dimensoes" type="text" name="dimensoes" >
                    </td>
                </tr>
                <tr>
                    <td>Nº de jogadores:</td>
                    <td><input x-model="piso" type="text" name="piso" /></td>
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
                        <button form="quadra-create" @click="open=false" class='btn btn-success bg-green-600'>
                            Criar
                        </button>
                    </td>
                </tr>
            </table>
        
    </div>
</div>
