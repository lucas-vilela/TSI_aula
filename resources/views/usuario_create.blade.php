<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Usuario</title>
</head>

<body>
    <h1>Insert new User</h1>
    <form action="/usuario" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"/></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone"/></td>
            </tr>
            <tr>
                <td>Permissão:</td>
                <td><input type="number" name="permissao"/></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email"/></td>
            </tr>
            <tr>
                <td>Imagem perfil:</td>
                <td><input type="text" name="img_perfil"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="text" name="password"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/usuarios" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>