
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
      <h3>Cadastro</h3>
      <div class="row">
          <form class="col s12" method="get"  action="../contoroller/PessoaController.php" >
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" name="nome" type="text" class="validate">
          <label for="icon_prefix">Nome</label>
        </div>
      </div>
        
         <div class="form-group col-md-2">
      <label for="inputState">Sexo</label>
      <select id="inputState"  name="sexo"class="form-control">
        <option selected>Masculino</option>
        <option>Feminino</option>
        <option>Outros</option>
        
      </select>
    </div>
        
        <div class="input-field col s12">
          <i class="material-icons prefix">edit_location</i>
          <input id="icon_sexo" name="cidade" type="text" class="validate">
          <label for="icon_telephone">Cidade</label>
        </div>
        
              <button class="btn waves-effect waves-light" name="acao" value="inserir" type="submit" >Salvar
    <i class="material-icons right">send</i>
  </button>
        
    </form>
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
