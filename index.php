<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="assets/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.js"></script>
    <title>Web Dev - Basics</title>
  </head>
  <body>
    <div class="container-fluid">
      <header>
        <h1>
          Web Dev Basics
        </h1>
      </header>
      <div class="row">
        <div class="col-4">
          <?php
            if(isset($_GET['mensagem'])&&isset($_GET['status'])){
          ?>
              <div class="alert alert-<?php echo $_GET['status']; ?>" role="alert">
          <?php      echo $_GET['mensagem'];  ?>
              </div>
          <?php
            }
          ?>
          <form name="login" action="login.php" method="POST" class="px-4 py-3">
            <div class="form-group">
              <label for="user">Usuário</label>
              <input type="text" class="form-control" id="user" placeholder="Dilma" name="usuario">
            </div>
            <div class="form-group">
              <label for="pass">Senha</label>
              <input type="password" class="form-control" id="pass" placeholder="*****" name="senha">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="dropdownCheck">
              <label class="form-check-label" for="dropdownCheck">
                Lembrar
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
          </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cadastre-se</a>
          <a class="dropdown-item" href="#">Recuperar senha</a>
        </div>
      </div>
    </div>
  </body>
</html>
