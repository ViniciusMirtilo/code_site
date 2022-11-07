<?php

  include_once('conexao.php');
  if(isset($_POST['id']))
  {
      $id = $_GET['id'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      
      $sqlInsert = "UPDATE vinicius_users
      SET email='$email',senha='$senha' WHERE id=$id";
      $result = $conexao->query($sqlInsert);
      print_r($result);
  }
  else{
    echo "erro";
  }
?>