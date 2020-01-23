<?php
  session_start();
  if($_POST){
    $_SESSION['cor'] = $_POST['cor_fundo'];;
  } // Definindo o valor da $_SESSION
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor="<?php echo $_SESSION['cor'];?>"> <!-- O bgcolor é um atributo para modificar a cor de fundo da página -->

    <form class="" action="cor.php" method="post">
      <input type="color" name="cor_fundo" >
      <input type="submit" name="" value="Escolher">
    </form>

  </body>
</html>
