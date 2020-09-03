<?php
// Arrays
$carros = array("BMW", "Veloster", "Hilux");
$carros[] = "Amarok";

print_r($carros);
echo "<hr>";

$clientes = ["Flávio Augusto", "Caito", "Carlos Wizard"];
print_r($clientes);
echo "<hr>";

// Count
echo count($carros);
echo "<hr>";

// Foreach
foreach($carros as $valor) {
  echo $valor;
  echo "<br>";
}

echo "<hr>";

// Arrays associativos
$pessoa = array("nome"=> "Rodrigo", "idade"=> 23, "altura"=> 1.75);
$pessoa["cidade"] = "Itabuna";
print_r($pessoa);
echo "<br>";

foreach($pessoa as $indice => $valor) {
  echo $indice.":".$valor."<br>";
}
echo "<hr>";

// Arrays multidimesionais
$times = array("cariocas"=> array("Vasco", "Flamengo", "Botafogo"),
               "paulistas"=> array("Santos", "São Paulo", "Palmeiras"),
               "baianos"=> array("Bahia", "Vitoria", "Itabuna")
               );
echo $times["cariocas"][0];
