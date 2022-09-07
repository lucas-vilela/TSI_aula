<div class="flex flex-col w-full h-full pt-40 bg-gray-600/50" >
    <div class="flex flex-col justify-center w-1/2 shadow dark:bg-gray-700 h-auto m-5 p-3 bg-white self-center rounded-md">
        <div x-data="{
        {{-- ginasio: @js($ginasio), --}}
        nome:'{{$ginasio->nome}}',
        telefone:'{{$ginasio->telefone}}',
        cep:'{{$ginasio->cep}}',
        img_capa: '{{$ginasio->img_capa}}',
        data_registro: '{{$ginasio->data_registro}}',
        qtd_banheiros:'{{$ginasio->qtd_banheiros}}',
        qtd_vestiarios:'{{$ginasio->qtd_vestiarios}}',
        estacionamento:{{$ginasio->estacionamento}},
        lanches:{{$ginasio->lanches}},
        bebidas:{{$ginasio->bebidas}},
        area_kids:{{$ginasio->area_kids}},
        arquibancada:{{$ginasio->arquibancada}},
        churrasqueira:{{$ginasio->churrasqueira}},
        tv_assinatura:{{$ginasio->tv_assinatura}},
        wifi:{{$ginasio->wifi}},
        update(id){

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
            $wire.update(id);
        }
        }">
            <form @submit.prevent="update({{$ginasio->id_ginasio}})" id="ginasio-update-{{$ginasio->id_ginasio}}">
                @csrf
                <table>
                    <tr>
                        <td>Nome:</td>
                        <td><input x-model='nome' type="text" name="nome" value="{{$ginasio->nome}}" /></td>
                    </tr>
                    <tr>
                        <td>telefone:</td>
                        <td>
                            <input x-model='telefone'  type="tel" name="telefone"  value="{{$ginasio->telefone}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Cep:</td>
                        <td><input x-model='cep'  type="text" name="cep"  value="{{$ginasio->cep}}"/></td>
                    </tr>
                    <tr>
                        <td>Data registro:</td>
                        <td><input x-model='data_registro'  type="date" name="data_registro"  value="{{$ginasio->data_registro}}"/></td>
                    </tr>
                    
                    <tr>
                        <td>Qtd_banheiros:</td>
                        <td><input x-model='qtd_banheiros'  type="text" name="qtd_banheiros" value="{{$ginasio->qtd_banheiros}}" /></td>
                    </tr>
                    <tr>
                        <td>Qtd_vestiarios:</td>
                        <td><input x-model='qtd_vestiarios'  type="text" name="qtd_vestiarios" value="{{$ginasio->qtd_vestiarios}}" /></td>
                    </tr>
                    <tr>
                        <td>Estacionamento:</td>
                        <td><input x-model='estacionamento'  type="checkbox" name="estacionamento" {{($ginasio->estacionamento)?'checked':null}} /></td>
                    </tr>
                    <tr>
                        <td>lanches:</td>
                        <td><input x-model='lanches'  type="checkbox" name="lanches" {{($ginasio->lanches)?'checked':null}} /></td>
                    </tr>
                    <tr>
                        <td>bebidas:</td>
                        <td><input x-model='bebidas'  type="checkbox" name="bebidas" {{($ginasio->bebidas)?'checked':null}} /></td>
                    </tr>
                    <tr>
                        <td>area_kids:</td>
                        <td><input x-model='area_kids' type="checkbox" name="area_kids" {{($ginasio->area_kids)?'checked':null}} /></td>
                    </tr>
                    <tr>
                        <td>arquibancada:</td>
                        <td><input x-model='arquibancada'  type="checkbox" name="arquibancada" {{($ginasio->arquibancada)?'checked':null}} /></td>
                    </tr>
        
                    <tr>
                        <td>churrasqueira:</td>
                        <td><input x-model='churrasqueira'  type="checkbox" name="churrasqueira" {{($ginasio->churrasqueira)?'checked':null}} /></td>
                    </tr>
                    <tr>
                        <td>tv_assinatura:</td>
                        <td><input x-model='tv_assinatura'  type="checkbox" name="tv_assinatura" {{($ginasio->tv_assinatura)?'checked':null}} /></td>
                    </tr>
                    <tr>
                        <td>wifi:</td>
                        <td><input x-model='wifi'  type="checkbox" name="wifi" {{($ginasio->wifi)?'checked':null}} /></td>
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
                            <Button @click="idmodal=null;" form="ginasio-update-{{$ginasio->id_ginasio}}"
                            class='btn btn-success bg-'>Atualizar
                            </Button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
