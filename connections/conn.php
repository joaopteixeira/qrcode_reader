<?php
  $user= "rlt";
  $pass=  "rlt";
  $server= "localhost";
  //Estabelecer conecção
  $conn = mysqli_connect($server, $user, $pass);
  //Caso haja erro reportar
  if(!$conn){
    die("Erro de Ligação: " .mysqli_connect_error());
  }
  mysqli_select_db($conn, "eventdb");//inserir conecção e a base dados
  mysqli_set_charset($conn, 'utf8');//Ligação ao dicionario de portugues
 ?>
