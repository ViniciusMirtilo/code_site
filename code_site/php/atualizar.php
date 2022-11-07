<?php

  require("../php/conexao.php");

  $id = $_GET["id"];

  $consulta_id = "SELECT * FROM `vinicius_users` WHERE id = $id";

  $resultado_id = $conexao->query($consulta_id);

  $atualiza_usuario = $resultado_id->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Josefin+Sans:ital,wght@1,300&family=Permanent+Marker&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../style/atualizar.css" />

  <script src="https://kit.fontawesome.com/7048b0b83b.js" crossorigin="anonymous"></script>
  <title>Art Box - Atualizar Dados</title>
</head>
<body>

  <header>
    <div class="center">
      <div class="logo">
        <h2>Art box</h2>
      </div>
      <!--Logo-->
      <div class="menu">
        <a class="Login" href="../Home.php">Sair</a>
      </div>
      <!--Menu-->
    </div>
    <!--Center-->
  </header>


  <legend>Atualizar Cadastro de usuario</legend>

  <div class="atualizar">
  <form action="edit_save.php" method="post">

    <?php
      foreach($atualiza_usuario as $user){
    ?>
      <input type="hidden" name="id" value="<?php echo $user['id'];?>">

      <label for="email">Email: </label>
      <input type="text" name="email" id="email" value="<?php echo $user['email'];?>"><br><br>

      <label for="senha">Senha:</label>
      <input type="text" name="senha" id="senha" value="<?php echo $user['senha'];?>"><br><br>
      
      <input type="submit" class="btn btn_info" value="Atualizar Cadastro do Aluno">
    <?php
      }
    ?>

    </form>
  </div>
</body>
</html>