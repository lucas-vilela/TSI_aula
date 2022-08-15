<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Ginásio</title>
</head>

<body>
    <h1>Insert new Ginásio</h1>
    <form action="/ginasio" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"/></td>
            </tr>
            <tr>
                <td>Imagem de capa:</td>
                <td><input type="text" name="img_capa"/></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone"/></td>
            </tr>
            <tr>
                <td>CEP:</td>
                <td><input type="text" name="cep"/></td>
            </tr>
            <tr>
                <td>Data de registro:</td>
                <td><input type="date" name="data_registro"/></td>
            </tr>
            <tr>
                <td>Número de vestiários:</td>
                <td><input type="number" name="qtd_vestiarios"/></td>
            </tr>
            <tr>
                <td>Número de banheiros:</td>
                <td><input type="number" name="qtd_banheiros"/></td>
            </tr>
            <tr>
                <td>Lanches:</td>
                <td><input type="checkbox" name="lanches"/></td>
            </tr>
            <tr>
                <td>Bebidas:</td>
                <td><input type="checkbox" name="bebidas"/></td>
            </tr>
            <tr>
                <td>Area kids:</td>
                <td><input type="checkbox" name="area_kids"/></td>
            </tr>
            <tr>
                <td>Wifi:</td>
                <td><input type="checkbox" name="wifi"/></td>
            </tr>
            <tr>
                <td>Estacionamento próprio:</td>
                <td><input type="checkbox" name="estacionamento"/></td>
            </tr>
            <tr>
                <td>Churrasquira:</td>
                <td><input type="checkbox" name="churrasqueira"/></td>
            </tr>
            <tr>
                <td>TV por assinatura:</td>
                <td><input type="checkbox" name="tv_assinatura"/></td>
            </tr>
            <tr>
                <td>Arquibancada:</td>
                <td><input type="checkbox" name="arquibancada"/></td>
            </tr>
            
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/ginasios" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>