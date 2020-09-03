<?php
/*
* Condicionais
* if
* else
* elseif
*
*/

$numero = 8;

if ($numero == 10):
  echo "É igual a 10";
elseif ($numero <= 9):
  echo "É menor ou igual a 9";
else:
  echo "É maior que 10";
endif;

echo "<hr>";

$media = 7;

echo ($media >= 7) ? "Aprovado!" : "Reprovado!";
echo "<hr>";

/* Condicionais
* switch
* case
*/

$cor = "Vermelho";

switch ($cor):
  case "Vermelho":
    echo "Sua cor preferida é vermelho";
    break;
  case "Amarelo":
    echo "Sua cor preferida é amarelo";
    break;
  case "Azul":
    echo "Sua cor preferida é azul";
    break;
  default:
    echo "Sua cor preferida não é vermelho, verde, nem azul";
    break;
endswitch;
