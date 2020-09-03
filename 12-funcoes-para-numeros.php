<?php
// Funções para Números

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(3.6);
echo "<br>";

echo ceil(8.1);
echo "<br>";

echo floor(8.9);
echo "<br>";

echo rand(1, 20);
