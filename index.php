<!doctype html>
<html lang="en">


  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>L.DADO....S</title>
      

</head>
  
<body>

  <div>
  <a class="btn btn-primary" href="index.php?jogar=1" role="button">Jogar Dados</a>

<?php

if(isset($_GET['jogar'])){

    $dado1Usuario    = rand(1,6);
    $dado1Computador = rand(1,6);
    $dado2Usuario    = rand(1,6);
    $dado2Computador = rand(1,6);

    echo '<br>Dado 1 Usuário:    ' . strval($dado1Usuario)    . '<br>';
    echo '<img height = 300 width = 300 src="Imagens/'. strval($dado1Usuario) .'.gif"/>';
    echo '<br>Dado 2 Usuário:    ' . strval($dado2Usuario)    . '<br>';
    echo '<img height = 300 width = 300 src="Imagens/'. strval($dado2Usuario) .'.gif"/>';
    
    echo '<br>Dado 1 Computador: ' . strval($dado1Computador)    . '<br>';
    echo '<img height = 300 width = 300 src="Imagens/'. strval($dado1Computador) .'.gif"/>';
    echo '<br>Dado 2 Computador: ' . strval($dado2Computador) . '<br>';
    echo '<img height = 300 width = 300 src="Imagens/'. strval($dado2Computador) .'.gif"/>';

    $somaDadoUsuario    = $dado1Usuario    + $dado2Usuario;
    $somaDadoComputador = $dado2Computador + $dado2Computador;
      if($somaDadoUsuario > $somaDadoComputador){
          echo '<br>Usuário ganhou!';
        }else{
          if($somaDadoUsuario < $somaDadoComputador){
            echo '<br>Computador ganhou!';
          }else{
            echo '<br>Empate!';
          }
        }

      }

    ?>



    
  


  </div>


  
    
 </body>


</html>
      



    

    

    
   

 
    


  
  