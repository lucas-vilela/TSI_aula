<div class=" w-fit h-auto m-2 p-3 drop-shadow-2xl bg-white self-center rounded-md pt-6">
    <h1 class="text-xl">Cadastrar Novo Ginásio</h1>
    <div x-data="{
        nome:'',
        telefone:'',
        cep:'',
        img_capa: '',
        data_registro: '',
        qtd_banheiros:0,
        qtd_vestiarios:0,
        estacionamento:false,
        lanches:false,
        bebidas:false,
        area_kids:false,
        arquibancada:false,
        churrasqueira:false,
        tv_assinatura:false,
        wifi:false,
        save(){
            $wire.set('nome', this.nome)
            $wire.set('img_capa', this.img_capa)
            $wire.set('cep', this.cep)
            $wire.set('data_registro', this.data_registro)
            $wire.set('telefone', this.telefone)
            $wire.set('qtd_banheiros', this.qtd_banheiros)
            $wire.set('qtd_vestiarios', this.qtd_vestiarios)
            $wire.set('estacionamento', this.estacionamento)
            $wire.set('lanches', this.lanches)
            $wire.set('bebidas', this.bebidas)
            $wire.set('area_kids', this.area_kids)
            $wire.set('arquibancada', this.arquibancada)
            $wire.set('churrasqueira', this.churrasqueira)
            $wire.set('tv_assinatura', this.tv_assinatura)
            $wire.set('wifi', this.wifi)
            $wire.save();
        }
    }">
    
        <form @submit.prevent="save()" id="ginasio-create">
            @csrf
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input x-model="nome" type="text" name="nome" /></td>
                </tr>
                <tr>
                    <td>telefone:</td>
                    <td>
                        <input x-model="telefone" type="tel" name="telefone" >
                    </td>
                </tr>
                <tr>
                    <td>Cep:</td>
                    <td><input x-model="cep" type="text" name="cep" /></td>
                </tr>
                <tr>
                    <td>Data registro:</td>
                    <td><input x-model="data_registro" type="date" name="data_registro" /></td>
                </tr>
                
                <tr>
                    <td>Qtd_banheiros:</td>
                    <td><input x-model="qtd_banheiros" type="text" name="qtd_banheiros" /></td>
                </tr>
                <tr>
                    <td>Qtd_vestiarios:</td>
                    <td><input x-model="qtd_vestiarios" type="text" name="qtd_vestiarios" /></td>
                </tr>
                <tr>
                    <td>Estacionamento:</td>
                    <td><input x-model="estacionamento" type="checkbox" name="estacionamento" /></td>
                </tr>
                <tr>
                    <td>lanches:</td>
                    <td><input x-model="lanches" type="checkbox" name="lanches" /></td>
                </tr>
                <tr>
                    <td>bebidas:</td>
                    <td><input x-model="bebidas" type="checkbox" name="bebidas" /></td>
                </tr>
                <tr>
                    <td>area_kids:</td>
                    <td><input x-model="area_kids" type="checkbox" name="area_kids" /></td>
                </tr>
                <tr>
                    <td>arquibancada:</td>
                    <td><input x-model="arquibancada" type="checkbox" name="arquibancada" /></td>
                </tr>

                <tr>
                    <td>churrasqueira:</td>
                    <td><input x-model="churrasqueira" type="checkbox" name="churrasqueira" /></td>
                </tr>
                <tr>
                    <td>tv_assinatura:</td>
                    <td><input x-model="tv_assinatura" type="checkbox" name="tv_assinatura" /></td>
                </tr>
                <tr>
                    <td>wifi:</td>
                    <td><input x-model="wifi" type="checkbox" name="wifi" /></td>
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
