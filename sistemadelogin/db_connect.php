<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "Unknow";
$password = "MyStrongShu23.";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
  echo "Falha na conexão: ".mysqli_connect_error();
endif;
