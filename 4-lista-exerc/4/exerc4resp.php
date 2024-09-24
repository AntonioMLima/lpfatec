<?php 
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 4</h1>


    <?php

    
    function apresentarData(int $dia, int $mes, int $ano) {
      $data = new DateTime("$ano-$mes-$dia");
      $data = $data->format('d/m/Y');

      echo "<p>Data: $data</p>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      
      
      
      try {
          $dia = (int) $_POST["dia"];
          $mes = (int) $_POST["mes"];
          $ano = (int) $_POST["ano"];
            

          $is_data_valida = (bool) checkdate($mes, $dia, $ano);

          if ($is_data_valida) {
            echo "<p> Essa data é valida. </p>";
            apresentarData($dia, $mes, $ano);
          } else {
            echo "<p> Data Inválida. </p>";
          }

        } catch (Exception $e) {
            echo "Erro: ".$e->getMessage();
        }
    }


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>