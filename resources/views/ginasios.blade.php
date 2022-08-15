<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ginásios</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/app.css"/> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Ubuntu+Condensed&display=swap" rel="stylesheet">    
    @vite(['resources/css/esportes.css'])
</head>
<body >
    <h1>Ginásios</h1>
    @if ($ginasios->count()>0)
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CEP</th>
                <th>Telefone</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($ginasios as $ginasio)
            <tr>
                {{-- <td>{{$ginasio->id}}</td> --}}
                <td><a href="/ginasio/{{$ginasio->id_ginasio}}">{{$ginasio->nome}}</a></td>
                <td>{{$ginasio->cep}}</td>
                <td>{{$ginasio->telefone}}</td>
                <td><a class="editar" href="{{route('edit_ginasio',$ginasio->id_ginasio)}}">Editar</a></td>
                <td><a class="excluir" href="{{route('remove_ginasio',$ginasio->id_ginasio)}}">Excluir</a></td>
                {{-- <td>{{($ginasio->churrasqueira)?'Sim':'Não'}}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>ginasios não encontrados! </p>
    @endif
    <a class="voltar" href="/ginasio">Criar</a>
</body>
</html>