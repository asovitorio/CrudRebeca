<html lang="pt-br">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Rebeca Crude</title>
  </head>
  <body>
<?php
require_once '../models/Pessoa.php';
require_once '../dao/PessoaDao.php';
 $pessoaDao = new PessoaDao();
 $pessoa = new Pessoa();
 

 $acao = $_GET['acao'];
  if($acao == "inserir"){
 $pessoa->setNome($_GET['nome']);
 $pessoa->setSexo($_GET['sexo']);
 $pessoa->setCidade($_GET['cidade']);
 $pessoaDao->inserir($pessoa->getNome(), $pessoa->getSexo(), $pessoa->getCidade());
 echo "<h1>";
 echo $_GET['nome'];
 echo '<br>';
 echo $_GET['sexo'];
 echo '<br>';
 echo $_GET['cidade'];
 echo '<br>';
 echo $_GET['acao'];
 echo "<h1>";
  }else if ($acao=="listar") {
      
      $pessoaDao->listar();
    
} else if ($acao=="editar"){
    
}else if ($acao=="deletar"){
  $id = $_GET['id'];
  $pessoaDao->deletar($id);   
 
} else if($acao=="atualizar" ){
    $id = $_GET['id'];
 $nome =  $_GET['nome'];
 $sexo =  $_GET['sexo'];
 $cidade = $_GET['cidade'];
 
    $pessoaDao->atualizar($id,$nome,$sexo,$cidade);
}
?>
<!-- Optional JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">$(document).ready(function(){
    $('.sidenav').sidenav();
  });
  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

 
  