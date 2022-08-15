<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Usuário</title>
    
</head>

<body>
    <h1>Delete usuario</h1>
    <p>
    Nome: {{$usuario->nome}}
    </p>
    <p>
    E-mail: {{$usuario->email}}
    </p>
    <p>
    Telefone: {{$usuario->telefone}}
    </p>

    <form action="{{route('remove_usuario', $usuario->id_user)}}" method="POST">
        @csrf
        <input type="submit" value="Confirmar">
    </form>
    <a href="/usuarios" style="display: inline">&#9664;&nbsp;Voltar</a>
</body>

</html>