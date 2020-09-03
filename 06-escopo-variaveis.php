<?php
// ESCOPO GLOBAL
$nome = "Unknow";
$num1 = 1;
$num2 = 3;
$num3 = 7;

function exibeNome() {
  global $nome;
  echo $nome;
}

exibeNome();
echo "<hr>";


function exibeCidade() {
  // ESCOPO LOCAL
  global $cidade;
  $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;

echo "<hr>";

function somaDeValores() {
  echo $GLOBALS['num1'] + $GLOBALS['num2'] + $GLOBALS['num3'];  
}

somaDeValores();
