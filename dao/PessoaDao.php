<?php
require_once '../dao/Conexao.php';

class PessoaDao {
   
        
         function inserir($nome,$sexo,$cidade){
   
     $con = new Conexao();
        $dbcon = $con->conectar();
         $sql = $dbcon->query("INSERT INTO cadastro (nome, sexo, cidade) VALUES ('$nome', '$sexo', '$cidade')");
         
         if($sql>0){
             echo'<div class="alert alert-primary " role="alert">
  <h4 class="alert-heading">Notificação</h4>
  <p></p>
  <hr>
  <p class="mb-0"><strong>Pessoa Inserida com sucesso</strong> <a href="../view/TelaListar.php" class="alert-link"><i class="material-icons">add_box</i>Continuar</a>'; 
 echo'</div>;</p>
</div>';
        
                
         }  else {
             echo "Erro ao salvar";
         }
         
         
         
    }
    
    
    function listar(){
           $con = new Conexao();
        $dbcon = $con->conectar();
         $sql = $dbcon->query("SELECT * FROM cadastro") or die($mysqli->error);
         
         echo $sql;
       
       }
       
       
       function deletar($id){
           $con = new Conexao();
        $dbcon = $con->conectar();
        $sql = "DELETE FROM cadastro WHERE id = $id";
       if( $resultado = mysqli_query($dbcon,$sql)){
           echo '<div class="alert alert-danger" role="alert">';
 echo '<strong>Pessoa deletada com sucesso</strong> <a href="../view/TelaListar.php" class="alert-link"><i class="material-icons">delete</i>Continuar</a>'; 
 echo'</div>';
       }  
       }
       
       function atualizar($id,$nome,$sexo,$cidade){  
        $con = new Conexao();
        $dbcon = $con->conectar();
       
        $sql = "UPDATE cadastro SET nome = '$nome',sexo='$sexo',cidade='$cidade' where id ='$id'";
        $resultado = mysqli_query($dbcon,$sql);
           echo '<div class="alert alert-secondary" role="alert">';
 echo '<strong>Pessoa Atualizada com sucesso</strong> <a href="../view/TelaListar.php" class="alert-link"><i class="material-icons">delete</i>Continuar</a>'; 
 echo'</div>';
       
       }

}
       
    
        
        
   
