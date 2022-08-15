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
    <style>    
        body{
            background-color: #65ab4b;
            font-family: 'Ubuntu Condensed', sans-serif;
            
        }
        h1{
            text-align: center;
            margin: 20px auto;
            font-size: 48px;
            font-family: 'Fredericka the Great', cursive;
        }
        table {
            box-shadow: 1px 1px 10px black;
            border-spacing: 2px;
            margin: 0 auto;
            /* border: 0px solid #040404; */
            padding: 10px;
            border-radius: 5px;
            background-color: #ffffff;
        }
        td{

            text-align: center;
        }
        tr{
            
            cursor: default;
        }
        tr:nth-child(odd):hover{
            background-color: rgba(0, 0, 0, .1);
        }
        tr:nth-child(even){
            background-color: rgba(0, 0, 0, .1);
        }
        /* td:nth-child(2){
            text-align: left;
        } */
        th{ 
            border-radius: 50px;
            padding: 5px 50px;
            margin: 0 10px;
        }
        a{
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
        }
        a.voltar{
            background-color: white;
            padding: 5px;
            border-radius: 10px;
        }
        a.voltar:hover{
            transition: all .1s ease-in-out;
            background-color: rgba(0, 0, 0, .1);
        }
        thead{
            padding: 5px;
            background-color: black;
            color: #65ab4b;
        }
        a{
            color: black;  
        }
    </style>
</head>
<body>
    <h1>{{$usuario->modalidade}}</h1>
    @if ($usuario->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$usuario->id_user}}</td>
                <td>{{$usuario->nome}}</a></td>
                <td>{{$usuario->telefone}}</td>
                <td>{{$usuario->email}}</td>
            </tr>
        </tbody>
    </table>
    @else
    <p>Usuario não encontrado! </p>
    @endif
    <a class="voltar" href="/usuarios">Voltar</a>
</body>
</html>