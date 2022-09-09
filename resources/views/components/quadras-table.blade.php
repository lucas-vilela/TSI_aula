<div x-data="{
  open: false,
  idmodal: null
}">
  <table {{ $attributes->merge(['class' => "table table-$type"]) }}>
      <thead>
          <tr>
              <th><a href="#" wire:click="reverter">id_quadra</a></th>
              <th><a href="#" wire:click="orderByName">Nome Quadra</a></th>
              <th>Email</th>
              <th colspan="2">
                  <x-button x-on:click="open = !open" class="mt-2 ml-3 bg-green-500 hover:bg-green-900 ">
                      Cadastrar
                  </x-button>
              </th>
          </tr>
      </thead>
      <tbody>
          @foreach ($listQuadras as $quadra)
              <tr>
                  <td><a href="/quadra/{{$quadra->id_quadra}}">
                          {{ $quadra->id_quadra }}
                      </a>
                  </td>
                  <td>{{ $quadra->nome_quadra }}</td>                  
                  <td>{{ $quadra->dimensoes }}</td>
                  <td>{{ $quadra->piso }}</td>
                  <td>
                    {{-- {{ route('edit_ginasio', $quadra->id_quadra) }} --}}
                      {{-- <a href="/ginasio/{{$quadra->id_quadra}}/edit">
                          <button class='btn btn-primary btn-sm'>Editar</button>
                      </a> --}}
                      <x-button @click=" idmodal = 'modal-up-{{ $quadra->id_quadra }}'">
                        Editar
                    </x-button>
                  </td>
                  <td>
                      <x-button-error @click=" idmodal = 'modal-rm-{{ $quadra->id_quadra }}'">
                          Remover
                      </x-button-error>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>

    <div>
        @foreach ($listQuadras as $quadra)
            <div id='modal-rm-{{ $quadra->id_quadra }}'
                x-show="idmodal == $el.id"
                :class="idmodal == $el.id ? $el.className =
                    'overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full md:h-full' :
                    'hidden'">
                <x-forms.quadra-remove :quadra="$quadra" />
            </div>
        @endforeach
    </div>

    <div>
        @foreach ($listQuadras as $quadra)
            <div id='modal-up-{{ $quadra->id_quadra }}'
                x-show="idmodal == $el.id"
                :class="idmodal == $el.id ? $el.className =
                    'overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full md:h-full' :
                    'hidden'">
                <x-forms.quadra-update :quadra="$quadra" />
            </div>
        @endforeach
    </div>
  
</div>