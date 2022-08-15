<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Esportes</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/app.css"/> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Ubuntu+Condensed&display=swap" rel="stylesheet">    
    @vite(['resources/css/esportes.css'])
</head>
<body >
    <h1>Esportes</h1>
    @if ($esportes->count()>0)
    <table>
        <thead>
            <tr>
                <!-- <th>Id</th> -->
                <th>Modalidade</th>
                <th>Descricao</th>
                <th>Número Total de Jogadores</th>
                <!-- <th>Churrasquira</th>
                <th>Area Kids</th>
                <th>Bebidas</th>
                <th>Lanches</th>
                <th>Estacionamento</th>
                <th>Wifi</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($esportes as $esporte)
            <tr>
                {{-- <td>{{$esporte->id}}</td>  --}}
                <td><a href="/esporte/{{$esporte->id}}">{{$esporte->modalidade}}</a></td>
                <td>{{$esporte->desc_modalidade}}</td>
                <td>{{$esporte->nr_jogadores}}</td>
                <td><a class="editar" href="{{route('edit_esporte',$esporte->id_esporte)}}">Editar</a></td>
                <td><a class="excluir" href="{{route('remove_esporte',$esporte->id_esporte)}}">Excluir</a></td>
                {{--<td>{{($esporte->churrasqueira)?'Sim':'Não'}}</td>
                <td>{{($esporte->area_kids)?'Sim':'Não'}}</td>
                <td>{{($esporte->bebidas)?'Sim':'Não'}}</td>
                <td>{{($esporte->lanches)?'Sim':'Não'}}</td>
                <td>{{($esporte->estacionamento)?'Sim':'Não'}}</td>
                <td>{{($esporte->wifi)?'Sim':'Não'}}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    
    
    @else
    <p>Esportes não encontrados! </p>
    @endif
    <a class="voltar" href="/esporte">Criar</a>
</body>
</html>