<?php
$senha = "123456";

$novaSenha = base64_encode($senha);
echo "base64 encoded: ".$novaSenha."<br>";
echo "Sua senha é: ".base64_decode($novaSenha)."<br>";

echo "<hr>";

echo "MD5: ".md5($senha);

echo "<hr>";

echo "Sha1: ".sha1($senha)."<br>";

echo "<hr>";

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
$senha_db = '$2y$10$IsNqK/vC7r8o/evNfUbZXe91/VWlKvTuyv4oRchC1R5QSZ4dO1ATG';

if(password_verify($senha, $senha_db)):
  echo "Senha válida";
else:
  echo "Senha inválida";
endif;
