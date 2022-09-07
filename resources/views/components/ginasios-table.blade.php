<div x-data="{
  open: false,
  idmodal: null
}">
  <table {{ $attributes->merge(['class' => "table table-$type"]) }}>
      <thead>
          <tr>
              <th><a href="#" wire:click="reverter">Id</a></th>
              <th><a href="#" wire:click="orderByName">Nome</a></th>
              <th>Telefone</th>
              {{-- <th><a href="#" wire:click="orderByPrice">Preço</a></th>
              <th>Importado</th> --}}
              <th colspan="2">
                  <x-button x-on:click="open = !open" class="mt-2 ml-3 bg-green-500 hover:bg-green-900 ">
                      Cadastrar
                  </x-button>
              </th>
          </tr>
      </thead>
      <tbody>
        {{-- {{ route('show_ginasio', ['id' => $ginasio->id]) }} --}}
          @foreach ($listGinasios as $ginasio)
              <tr>
                  <td><a href="/ginasio/{{$ginasio->id_ginasio}}">
                          {{ $ginasio->id_ginasio }}
                      </a>
                  </td>
                  <td>{{ $ginasio->nome }}</td>
                  {{-- <td>{{ $ginasio->qtd_estoque }}</td> --}}
                  <td>{{ $ginasio->telefone }}</td>
                  {{-- <td>{{ $ginasio->importado ? 'Sim' : 'Não' }}</td> --}}
                  <td>
                    {{-- {{ route('edit_ginasio', $ginasio->id) }} --}}
                      {{-- <a href="/ginasio/{{$ginasio->id_ginasio}}/edit">
                          <button class='btn btn-primary btn-sm'>Editar</button>
                      </a> --}}
                      <x-button @click=" idmodal = 'modal-up-{{ $ginasio->id_ginasio }}'">
                        Editar
                    </x-button>
                  </td>
                  <td>
                      <x-button-error @click=" idmodal = 'modal-rm-{{ $ginasio->id_ginasio }}'">
                          Remover
                      </x-button-error>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>

    <div>
        @foreach ($listGinasios as $ginasio)
            <div id='modal-rm-{{ $ginasio->id_ginasio }}'
                x-show="idmodal == $el.id"
                :class="idmodal == $el.id ? $el.className =
                    'overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full md:h-full' :
                    'hidden'">
                <x-forms.ginasio-remove :ginasio="$ginasio" />
            </div>
        @endforeach
    </div>

    <div>
        @foreach ($listGinasios as $ginasio)
            <div id='modal-up-{{ $ginasio->id_ginasio }}'
                x-show="idmodal == $el.id"
                :class="idmodal == $el.id ? $el.className =
                    'overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full md:h-full' :
                    'hidden'">
                <x-forms.ginasio-update :ginasio="$ginasio" />
            </div>
        @endforeach
    </div>

  

    <div x-show="open"
      x-bind:class="!open ? 'hidden' :
          'overflow-y-auto overflow-x-hidden pl-60 fixed top-0 right-0 left-0 z-50 h-modal md:h-full bg-gray'">
      <div class="flex flex-col w-1/2 pt-10 " @click.away="open = false">
          <x-forms.ginasio-create />
          {{-- <x-forms.ginasio-update /> --}}
      </div>
    </div>
  
</div>
