<div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
            @if ($esportes->count() > 0)
                {{-- {{dd($esportes)}} --}}
                <x-esportes-table :listEsportes="$esportes" type="striped"/>
            @else
                <p>Esportes não encontrados! </p>
            @endif
        </div>
    </div>
</div>
