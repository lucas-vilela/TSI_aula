<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/app.css"/> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Ubuntu+Condensed&display=swap" rel="stylesheet">    
    @vite(['resources/css/esportes.css'])
</head>
<body >
    <h1>Usuários</h1>
    @if ($usuarios->count()>0)
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $user)
            <tr>
                <td><a href="/usuario/{{$user->id_user}}">{{$user->nome}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->telefone}}</td>
                <td><a class="editar" href="{{route('edit_usuario',$user->id_user)}}">Editar</a></td>
                <td><a class="excluir" href="{{route('remove_usuario',$user->id_user)}}">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    
    @else
    <p>usuarios não encontrados! </p>
    @endif
    <a class="voltar" href="/usuario">Criar</a>
</body>
</html>