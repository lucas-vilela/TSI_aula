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
    <h1>{{$esporte->modalidade}}</h1>
    @if ($esporte->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Modalidade</th>
                <th>Descrição</th>
                <th>Número Total de Jogadores</th>
                <!-- <th>Churrasquira</th>
                <th>Area Kids</th>
                <th>Bebidas</th>
                <th>Lanches</th>
                <th>Estacionamento</th>
                <th>Wifi</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$esporte->id_esporte}}</td>
                <td>{{$esporte->modalidade}}</a></td>
                <td>{{$esporte->desc_modalidade}}</td>
                <td>{{$esporte->nr_jogadores}}</td>
                {{-- <!-- <td>{{($esporte->churrasqueira)?'Sim':'Não'}}</td>
                <td>{{($esporte->area_kids)?'Sim':'Não'}}</td>
                <td>{{($esporte->bebidas)?'Sim':'Não'}}</td>
                <td>{{($esporte->lanches)?'Sim':'Não'}}</td>
                <td>{{($esporte->estacionamento)?'Sim':'Não'}}</td>
                <td>{{($esporte->wifi)?'Sim':'Não'}}</td> --> --}}
            </tr>
        </tbody>
    </table>
    @else
    <p>Esporte não encontrado! </p>
    @endif
    <a class="voltar" href="/esportes">Voltar</a>
</body>
</html>