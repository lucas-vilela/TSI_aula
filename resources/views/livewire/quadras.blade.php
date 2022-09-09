<div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
            @if ($quadras->count() > 0)
                {{-- {{dd($quadras)}} --}}
                <x-quadras-table :listQuadras="$quadras" type="striped"/>
            @else
                <p>Quadras não encontradas! </p>
            @endif
        </div>
    </div>
</div>
