<html>
  <body>
    <?php
      /* Validaçõs
      * Funcões (filter_input - filter_var)
      * FILTER_VALIDADE_INT
      * FILTER_VALIDADE_EMAIL
      * FILTER_VALIDADE_FLOAT
      * FILTER_VALIDADE_IP
      * FILTER_VALIDADE_URL
      */

      /* Sanitização
      * Funções (filter_input - filter_var)
      * FILTER_SANITIZE_SPECIAL_CHARS
      * FILTER_SANITIZE_INT
      * FILTER_SANITIZE_EMAIL
      * FILTER_SANITIZE_URL
      */
    ?>
    <?php
      if(isset($_POST['enviar-formulario'])):
        // Array de erros
        $erros = array();

        // Sanitização e Validação
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade, FILTER_VALIDATE_INT)):
          $erros[] = "IDADE PRECISA SER UM INTEIRO";
        endif;

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
          $erros[] = "EMAIL INVÁLIDO";
        endif;

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        if(!filter_var($url, FILTER_VALIDATE_URL)):
          $erros[] = "URL INVÁLIDA";
        endif;

        // Exibindo Mensagens
        if(!empty($erros)):
          foreach($erros as $erro):
            echo "<li> $erro </li>";
          endforeach;
        else:
          echo "Parabéns, seus dados estão corretos";
        endif;
      endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      Idade: <input type="text" name="idade"><br>
      Email: <input type="text" name="email"><br>
      Nome: <input type="text" name="nome"><br>
      URL: <input type="text" name="url"><br>
      <button type="submit" name="enviar-formulario">Enviar</button><br>
    </form>

  </body>
</html>
