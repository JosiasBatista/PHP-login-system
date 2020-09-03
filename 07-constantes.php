<?php
// Constantes
define("NOME", "Unknow");
define("IDADE", 24);
define("ALTURA", 1.70);
define("CASADO", false);
define("TIMES", ['cavaliers', 'celtics', 'lakers']);

echo 'Meu nome é '.NOME;
echo "<hr>";
echo TIMES[0];

echo "<hr>";

function exibeNome() {
 echo NOME;
}

exibeNome();
