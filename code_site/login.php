<?php
  if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'success'){
?>
<script>
  alert('usuario registrado com sucesso')
</script>
<?php
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Josefin+Sans:ital,wght@1,300&family=Permanent+Marker&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style/login_style.css" />
    <title>Art box - Login</title>
  </head>
  <body>
  <header>
    <div class="center">
      <div class="logo">
        <a class="Home" href="home.php"><h2>Hortifrúti</h2></a>
      </div>
      <!--Logo-->
      <div class="menu">
        <a class="Home" href="Home.php">Home</a>
        <a class="Galery" href="galery.php">Works</a>
        <a class="About" href="About.php">About</a>
      </div>
      <!--Menu-->
    </div>
    <!--Center-->
  </header>
    <div class="main_login">
      <div class="left-login">
        <h1>
          Venha fazer parte do nosso time de Artistas
        </h1>
        <img
          src="./style/mark-art.svg"
          class="left-login-image"
          alt="Artista"
        />
      </div>
      
      <form action="php/test_login.php" name="logon" method="post">
        <div class="right_login">
          <div class="card-login">
            <h1>Login</h1>
            <div class="textfield">
              <label for="email">E-mail</label>
              <input type="text" name="txtemail" placeholder="email" />
            </div>
  
            <div class="textfield">
              <label for="password">password</label>
              <input type="password" name="txtPassword" placeholder="password" />
            </div>
            
            <a type="submit" class="cadastro" href="cadastro.php">Cadastro</a>

            <button type="submit" class="btn-login">Login</button>
          </div>
        </div>
        
      </form>
    </div>
  </body>
</html>
