<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        {{-- <link rel="stylesheet" type="text/css" href="../resources/css/normalize.css" /> --}}
<style>
  body {
    margin:0px;
    display: flex;
    justify-content: space-between; 
    flex-direction: column;  
    background-color: #bbdefb;
    height: 100%;
  }

  body div{
    background: #ffecb3;
    border: 3px solid #ffcc80;
    border-radius: 5px;
  }


  .item1 { 
    /* flex:0 1 auto; */
    align-self:auto;
    
  }
			
  .item2 { 
    /* flex:1 1 auto; */
    flex-grow:1;
    margin-top: 5px;
    height:100vh;
  }
			

</style>

    </head>
    <body>
        <div class="flex-container">
            <div class="item1">Atividade 5</div>
            <div class="item2">item 2</div>
        </div>
    </body>
</html>

