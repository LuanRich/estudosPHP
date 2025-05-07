<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert-info">
                <h2 class="text-center text-dark">
                    trabalhando com array</h2>

                    <h2 class=" text-dark">
                   construindo um  array</h2>

                    <p class=" text-dark">
                    $fruta = array( banana,maça, goiaba);</p>

                    <p class=" text-dark">
                    $fruta = [ banana,maça, goiaba]; </p>

                    <p class=" text-dark">
                   imprimindo o array na tela com o comando var_dump(); </p>
                   <?php 
                   $fruta= ['banana, maça, goiaba'];
                   var_dump($fruta);

                   ?>


                    <h4 class=" text-dark">
                    imprimindo o array na tela de forma organizada com o json_encode();</h4>
                    <?php 
                    json_encode($fruta);
                    ?>
 
                   
                
                   <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert-info">
                <h2 class="text-center text-dark">
                    trabalhando com array associativo </h2>
                    
                    <h4 class="  text-dark">
                      construindo um array  associativo</h4>
                      
                   
                      <p class=" text-dark">
                      $dados = [ 'nome ' => 'jao ', 
                      'diciplina  ' => 'pw ', 
                      'escola ' => 'etec ', 
                      ]; 
                    </p>
                      <h4 class="  text-dark">
                      imprimindo  o  um array  associativo  usando  o comando var_dump();</h4>
                      <?php
                      $dados = [ 'nome ' => 'jao ', 
                      'diciplina  ' => 'pw ', 
                      'escola ' => 'etec ', 
                      ];
                      var_dump($dados)
                      ?>

                       <h4 class="  text-dark">
                      imprimindo de forma organizada  o  um array  associativo  usando  o comando json_encode();</h4>
<?php
   echo json_encode($dados);
                   ?>  

<h4 class="  text-dark">
    imprimindo so  o nome:

</h4>
<?php
echo $dados 
?>

               
                   
</body>
</html>