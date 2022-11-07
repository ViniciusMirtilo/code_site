<?php
  require("./php/conexao.php");

  $sql = "SELECT * FROM vinicius_users";

  $resultado = $conexao->query($sql);
  $busca = $resultado->fetchAll();

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

  <link rel="stylesheet" href="./style/user_page.css">

  <script src="https://kit.fontawesome.com/7048b0b83b.js" crossorigin="anonymous"></script>

  <title>Art box - Adm Page</title>
</head>
<body>

  <header>
    <div class="voltar">
      <a class="Home" href="Home.php">Sair</a>
    </div>
  </header>

  <div class="Titulo"> 
    <h3>Lista de usuario</h3>
  <table class="tabela">
        <thead>
          <tr>
            <th>Email:</th>
            <th>Senha:</th>
          </tr>
        </thead>
        <tbody>
          <h1>teste</h1>
          <h1>teste</h1>
          <?php foreach($busca as $dados) {  ?>
               
                  <tr>
                    <td><?php echo $dados['email']; ?>
                    <td><?php echo $dados['senha']; ?>
                    <td><a href="../php/atualizar.php?id=<?php echo $dados['id'];?>">Atualizar</a><i class="fa-solid fa-user-pen"></i></td>
                    <td><a href="../php/excluir_usuario.php?id=<?php echo $dados['id'];?>">Excluir</a><i class="fa-solid fa-trash"></i></td>
                </tr>
                
          <?php } ?>
        </tbody>
  </table>
</div>
</body>
</html>

