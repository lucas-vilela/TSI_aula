<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form usuario</title>
</head>

<body>
    <h1>Edição {{$usuario->nome}}</h1>
    <form action="{{route('update_usuario', $usuario->id_user)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"/ value="{{$usuario->nome}}"></td>
            </tr>
            <tr>
                <td>Permissão:</td>
                <td><input type="text" name="permissao"/ value="{{$usuario->permissao}}"></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone" value="{{$usuario->telefone}}"/></td>
            </tr>
            <tr>
                <td>Imagem perfil:</td>
                <td><input type="text" name="img_perfil" value="{{$usuario->img_perfil}}"/></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email" value="{{$usuario->email}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Editar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/usuarios" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>