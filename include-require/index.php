<?php 
  // Require interrompe o script gerando um erro caso haja alguma falha em sua importação
  // require_once
  require 'header.php';
?>

<?php echo "Olá pessoal!"; ?>

<?php
  // Include não interrompe o scrip, gera somente um warning informando a impossibilidade de importação
  // include_once
  include 'footer.php';
?>
