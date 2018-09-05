<?php

  $usuario  = $_POST['usuario'];
  $senha    = $_POST['senha'];
  $msg      = "";
  $status   = "danger";
  $link     = "index.php";

  if($usuario == ""){
    $msg = "Preencha o usuário.";
  }else if($senha == ""){
    $msg = "Preencha a senha.";
  }else{
    include "database/conexao.php";

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha' ";

    $res = mysqli_query($con, $sql);

    if(mysqli_num_rows($res)>0){
      //$msg = "Autenticado com sucesso.";
      //$status = "success";
      //não precisa mais, pois está fazendo o redirecionamento
      session_start();
      $_SESSION['usuario']    = $usuario;
      $_SESSION['id_sessao']  = session_id();

      //var_dump($_SESSION);
      //die();
      $link = "admin/main.php";
    }else{
      $msg = "Usuário ou senha incorretos.";
    }

  }
  header("Location: $link?mensagem=".$msg."&status=".$status);
  /*
  testes:
    var_dump($array);
    print_r($array);
  */
  /*
    Não está completo o processo de autenticação. Falta utilizar as sessões e fazer as
    devidas validações.
  */
?>
