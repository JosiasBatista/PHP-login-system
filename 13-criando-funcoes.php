<?php
// Criando Funções

function exibirNome($nome) {
  echo "Meu nome é $nome";
}

exibirNome("Unknow");

echo "<hr>";

function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4) {
  $media = number_format((($nota1 + $nota2 + $nota3 + $nota4) / 4), 2, ",", "."); 

  if ($media >= 7):
    echo "$nome foi aprovado com a média $media. <br>";
  else:
    echo "$nome foi reprovado com a média $media. <br>";
  endif;
}

calcularMedia("Unknow", 8.5, 10, 10, 4.5);
