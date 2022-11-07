<?php
  require_once("conexao.php");
  
  if((!isset($_POST['email'])) || (!isset($_POST['password']))){
    header('location: ../cadastro.php?cadastro=fail');
  }

  $conexao->query("
    insert into vinicius_users(
      email,
      senha,
      user
    )values(
      '{$_POST['email']}',
      '{$_POST['password']}',
      'user'
    );
  ");

  header('location: ../login.php?cadastro=success');

?>