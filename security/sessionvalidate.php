<?php

session_start();

if(($_SESSION['id_sessao']!=session_id()) || empty($_SESSION)){
  unset($_SESSION); //tira os valores da variavel
  session_destroy();
  header("Location: ../index.php?mensagem=É necessário fazer o login.&status=danger");
}


?>
