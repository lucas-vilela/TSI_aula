<div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
            @if ($ginasios->count() > 0)
                {{-- {{dd($ginasios)}} --}}
                <x-ginasios-table :listGinasios="$ginasios" type="striped"/>
            @else
                <p>Ginásios não encontrados! </p>
            @endif
        </div>
    </div>
</div>
