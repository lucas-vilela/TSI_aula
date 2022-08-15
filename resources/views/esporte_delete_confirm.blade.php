<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Esporte</title>
    
</head>

<body>
    <h1>Delete Esporte</h1>
    <p>
    Modalidade: {{$esporte->modalidade}}
    </p>
    <p>
    Descrição: {{$esporte->desc_modalidade}}
    </p>
    <p>
    Número de Jogadores: {{$esporte->nr_jogadores}}
    </p>

    <form action="{{route('remove_esporte', $esporte->id_esporte)}}" method="POST">
        @csrf
        <input type="submit" value="Confirmar">
    </form>
    <a href="/esportes" style="display: inline">&#9664;&nbsp;Voltar</a>
</body>

</html>