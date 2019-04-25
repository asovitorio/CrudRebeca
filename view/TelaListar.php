<?php
require_once '../dao/Conexao.php';
$con = new Conexao();
$dbcon = $con->conectar();
$sql = "SELECT * FROM cadastro";
$res=mysqli_query($dbcon,$sql);
?>
<!doctype html>
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
      <div><img class="responsive-img logo" src="../imagem/logo.png"></div> 
     <nav class="navbar navbar-expand-lg navbar-light alert alert-primary">
  <a class="navbar-brand" href="#"></a>
  
  <a href="../index.php"><h5>Voltar</h5></a>
       
  </div>
  
</nav>
      <h3>Lista</h3>
      <div >
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Cidade</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
     <?php while ($resutado = mysqli_fetch_array($res)){?>
    <tr>
        <th scope="row"><?php echo $resutado['id'];?></th>
        <td><?php echo $resutado['nome']; ?></td>
       <td><?php echo $resutado['sexo']; ?></td>
      <td><?php echo $resutado['cidade']; ?></td>
      <td><a class="btn-floating btn-floating waves-effect waves-light blue" href="../view/TelaAtualizar.php?acao=atualizar &id= <?php echo $resutado['id'];?>&cidade=<?php echo $resutado['cidade'] ?>&nome= <?php echo $resutado['nome']?>"><i class="material-icons">edit</i></a> &nbsp;
          <a class="btn-floating btn-floating waves-effect waves-light red" href="../contoroller/PessoaController.php?id=<?php echo $resutado['id'];?>&acao=deletar"><i class="material-icons">delete</i></a>    
          </td>
          
          
    </tr>
     <?php } ?>
   
  </tbody>
</table>
        
</div>
     
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