<h1>Login</h1>

<?php
  if($_GET['Usuario'] == "admin" &&  $_GET['Senha'] == 123){
    echo "Usuário Logado";
  }else{
    echo "Usuário ou senha inválidos";
  }
     