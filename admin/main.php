<?php
  include "../security/sessionvalidate.php";
?>
<h1>Página Principal de Administrador! Boa noite, <?php echo $_SESSION['usuario']; ?></h1>
<ul>
  <li><a href="teste.php">Teste</a></li>
  <li><a href="../logout.php">Sair</a></li>
</ul>
