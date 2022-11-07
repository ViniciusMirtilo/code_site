<?php
  try{
    session_start();  
    $dsn = 'mysql:host=ads_manha2a.mysql.dbaas.com.br;dbname=ads_manha2a';
    $user = 'ads_manha2a';
    $pass = 'AdS22Manha!';

    $conexao = new PDO($dsn,$user,$pass);
  }catch(PDOException $e){
    echo $e->getMessage();
  }

?>