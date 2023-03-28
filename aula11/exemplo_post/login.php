

<?php
//se existe, ou foi enviada, a variável usuário
if(isset(_POST['usuario'])){
  
}
  if($_POST['usuario'] == "admin" &&  $_POST['senha'] == 123){
    echo "Usuário Logado";
  }else{
    echo "Usuário ou senha inválidos";
  }
     
?>