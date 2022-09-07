<div x-data="{
  open: false,
  idmodal: null
}">
  <table {{ $attributes->merge(['class' => "table table-$type"]) }}>
      <thead>
          <tr>
              <th><a href="#" wire:click="reverter">Id</a></th>
              <th><a href="#" wire:click="orderByName">Modalidade</a></th>
              <th>Descrição</th>
              <th colspan="2">
                  <x-button x-on:click="open = !open" class="mt-2 ml-3 bg-green-500 hover:bg-green-900 ">
                      Cadastrar
                  </x-button>
              </th>
          </tr>
      </thead>
      <tbody>
          @foreach ($listEsportes as $esporte)
              <tr>
                  <td><a href="/esporte/{{$esporte->id_esporte}}">
                          {{ $esporte->id_esporte }}
                      </a>
                  </td>
                  <td>{{ $esporte->modalidade }}</td>                  
                  <td>{{ $esporte->desc_modalidade }}</td>
                  <td>
                    {{-- {{ route('edit_ginasio', $esporte->id) }} --}}
                      {{-- <a href="/ginasio/{{$esporte->id_esporte}}/edit">
                          <button class='btn btn-primary btn-sm'>Editar</button>
                      </a> --}}
                      <x-button @click=" idmodal = 'modal-up-{{ $esporte->id_esporte }}'">
                        Editar
                    </x-button>
                  </td>
                  <td>
                      <x-button-error @click=" idmodal = 'modal-rm-{{ $esporte->id_esporte }}'">
                          Remover
                      </x-button-error>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>

    <div>
        @foreach ($listEsportes as $esporte)
            <div id='modal-rm-{{ $esporte->id_esporte }}'
                x-show="idmodal == $el.id"
                :class="idmodal == $el.id ? $el.className =
                    'overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full md:h-full' :
                    'hidden'">
                <x-forms.esporte-remove :esporte="$esporte" />
            </div>
        @endforeach
    </div>

    <div>
        @foreach ($listEsportes as $esporte)
            <div id='modal-up-{{ $esporte->id_esporte }}'
                x-show="idmodal == $el.id"
                :class="idmodal == $el.id ? $el.className =
                    'overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full md:h-full' :
                    'hidden'">
                <x-forms.esporte-update :esporte="$esporte" />
            </div>
        @endforeach
    </div>

  

    <div x-show="open"
      x-bind:class="!open ? 'hidden' :
          'overflow-y-auto overflow-x-hidden pl-60 fixed top-0 right-0 left-0 z-50 h-modal md:h-full bg-gray'">
      <div class="flex flex-col w-1/2 pt-10 " @click.away="open = false">
          <x-forms.esporte-create />
          {{-- <x-forms.ginasio-update /> --}}
      </div>
    </div>
  
</div>