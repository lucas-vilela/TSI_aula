<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Ginásio</title>
</head>

<body>
    <h1>Edição {{$ginasio->nome}}</h1>
    <form action="{{route('update_ginasio', $ginasio->id_ginasio)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$ginasio->nome}}"/></td>
            </tr>
            <tr>
                <td>Imagem de capa:</td>
                <td><input type="text" name="img_capa" value="{{$ginasio->img_capa}}"/></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone" value="{{$ginasio->telefone}}"/></td>
            </tr>
            <tr>
                <td>CEP:</td>
                <td><input type="text" name="cep" value="{{$ginasio->cep}}"/></td>
            </tr>
            {{-- <tr>
                <td>Data de registro:</td>
                <td><input type="date" name="data_registro" value="{{$ginasio->data_registro}}"/></td>
            </tr> --}}
            <tr>
                <td>Número de vestiários:</td>
                <td><input type="number" name="qtd_vestiarios" value="{{$ginasio->qtd_vestiarios}}"/></td>
            </tr>
            <tr>
                <td>Número de banheiros:</td>
                <td><input type="number" name="qtd_banheiros" value="{{$ginasio->qtd_banheiros}}"/></td>
            </tr>
            <tr>
                <td>Lanches:</td>
                <td><input type="checkbox" name="lanches" {{($ginasio->lanches)?'checked':''}}/></td>
            </tr>
            <tr>
                <td>Bebidas:</td>
                <td><input type="checkbox" name="bebidas" {{($ginasio->bebidas)?'checked':''}}/></td>
            </tr>
            <tr>
                <td>Area kids:</td>
                <td><input type="checkbox" name="area_kids" {{($ginasio->area_kids)?'checked':''}}/></td>
            </tr>
            <tr>
                <td>wifi:</td>
                <td><input type="checkbox" name="wifi" {{($ginasio->wifi)?'checked':''}}/></td>
            </tr>
            <tr>
                <td>Estacionamento próprio:</td>
                <td><input type="checkbox" name="estacionamento" {{($ginasio->estacionamento)?'checked':''}}/></td>
            </tr>
            <tr>
                <td>Churrasquira:</td>
                <td><input type="checkbox" name="churrasqueira" {{($ginasio->churrasqueira)?'checked':''}}/></td>
            </tr>
            <tr>
                <td>TV por assinatura:</td>
                <td><input type="checkbox" name="tv_assinatura" {{($ginasio->tv_assinatura)?'checked':''}}/></td>
            </tr>
            <tr>
                <td>Arquibancada:</td>
                <td><input type="checkbox" name="arquibancada" {{($ginasio->arquibancada)?'checked':''}}/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Editar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/ginasios" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>