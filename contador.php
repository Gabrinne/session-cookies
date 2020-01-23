<?php
  session_start(); // Iniciando a sessão

  if (!$_POST || isset($_POST["reiniciar"])) {
    $_SESSION["contador"] = 0;
  }

  if (isset($_POST["aumento"])) {
    $_SESSION["contador"] += 1;
  }

  echo "O contador tem o valor de: " . $_SESSION["contador"];
 ?>

  <form action="contador.php" method="post">
    <input type="submit" name="aumento" value="Aumentar"><!-- Botão para aumentar o valor do contador -->
    <input type="submit" name="reiniciar" value="Reiniciar"><!-- Botão para zerar o contador -->
  </form>
