<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Esporte</title>
</head>

<body>
    <h1>Edição {{$esporte->nome}}</h1>
    <form action="{{route('update_esporte', $esporte->id_esporte)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Modalidade:</td>
                <td><input type="text" name="modalidade"/ value="{{$esporte->modalidade}}"></td>
            </tr>
            <tr>
                <td>Descricao:</td>
                <td><textarea name="desc_modalidade" id="" cols="30" rows="10">{{$esporte->desc_modalidade}}</textarea></td>
            </tr>
            <tr>
                <td>Número total de jogadores:</td>
                <td><input type="number" name="nr_jogadores" value="{{$esporte->nr_jogadores}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Editar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/esportes" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>