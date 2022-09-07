<div class="flex flex-col w-full h-full pt-40 bg-gray-600/50" @click="idmodal=null">
    <div class="flex flex-col justify-center w-1/2 shadow dark:bg-gray-700 h-auto m-5 p-3 bg-white self-center rounded-md">

        <div class="p-2 mb-2 border-b-2 border-gray-300 ">
                <h1 class="text-2xl">{{ $esporte->modalidade }}</h1>
        </div>
        <p>{{ $esporte->desc_modalidade }}</p>
        
        <form id="{{$esporte->id_esporte}}"
             wire:submit.prevent=
                "remove({{ $esporte->id_esporte }})">
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste esporte?</h4>
        </form>
        <table>
            <tr align="center">
                <td>
                    <button class='btn btn-info' @click="idmodal=null">Cancelar</button></a>
                </td>
                <td>
                    <x-button-error @click="idmodal=null;" form="{{$esporte->id_esporte}}" type="submit"
                        name='confirmar' class='btn btn-danger bg-'>Deletar
                    </x-button-error>
                </td>
            </tr>
        </table>
    </div>
</div>
