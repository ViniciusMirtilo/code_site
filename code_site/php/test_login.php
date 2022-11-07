<?php
  //print_r($_REQUEST);

  include('conexao.php');

  if(empty($_POST['txtemail']) || empty($_POST['txtPassword'])){
    header('location: ../login.php?login=erro');
  }

  $busca = $conexao->query("
    select * from vinicius_users;
  ");

  $consulta = $busca->fetchAll(PDO::FETCH_ASSOC);

  $login = false;

  foreach ($consulta as $user) {
    if($_POST['txtemail'] == $user['email'] && $_POST['txtPassword'] == $user['senha']){
      $login = true;
      $_SESSION['user'] = $user['user'];
      $_SESSION['id'] = $user['id'];
    }
  }
  if($login && $_SESSION['user'] == 'adm'){
    header('location: ../lista_usuario.php');
  }else if($login){
    header('location: ../user_page.php');
  }else{
    header('location: ../login.php?erro=erro');
  }

  //echo $email.'<br>';
  //echo $password.'<br>';


?>