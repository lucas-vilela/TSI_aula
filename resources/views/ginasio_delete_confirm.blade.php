<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Esporte</title>
</head>

<body>
    <h1>Delete Ginásio</h1>
    <p>
    Nome: {{$ginasio->nome}}
    </p>
    <p>
    Id: {{$ginasio->id_ginasio}}
    </p>
    <p>
    CEP: {{$ginasio->cep}}
    </p>
    <p>
    Telefone: {{$ginasio->telefone}}
    </p>

    <form action="{{route('remove_ginasio', $ginasio->id_ginasio)}}" method="POST">
        @csrf
        <input type="submit" value="Confirmar">
    </form>
    <a href="/ginasios" style="display: inline">&#9664;&nbsp;Voltar</a>
</body>

</html>