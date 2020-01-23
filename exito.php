<?php
  
  // [EXTRA] Escreva um código logo abaixo desse comentário que verifique se existe um usuário logado, 
  // caso não exista, ele redireciona para a página de login.

  if ($_POST) {
    //Apos fazer o logout, redirecione o usuário para a página de login
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2 align="center">Bem vindo <?php echo $_SESSION["usuario"]; ?></h2>
    <p align="center">Seu login foi realizado com sucesso</p>
     <form class="" action="exito.php" method="post" align="center">
       <button type="submit" name="logout">Logout</button>
     </form>
  </body>
</html>
