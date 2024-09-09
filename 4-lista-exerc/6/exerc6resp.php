<?php 
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 6</h1>


    <?php

    

    function arrendondarNum(float $numero, int $opcao):float {
        if ($opcao == 1) {
            $numero_arr = (float) round($numero, 0, PHP_ROUND_HALF_UP);
        } elseif ($opcao == 2) {
            $numero_arr = (float) round($numero, 0, PHP_ROUND_HALF_DOWN);
        } elseif ($opcao == 3) {
            $numero_arr = (float) round($numero, 0, PHP_ROUND_HALF_EVEN);
        } elseif ($opcao == 4) {
            $numero_arr = (float) round($numero, 0, PHP_ROUND_HALF_ODD);
        }

        return $numero_arr;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      
      
      try {
        $numero = (float) $_POST["numero"];

        $numero_arr = (float) arrendondarNum($numero, 4); 

        echo "<p> Número arredondado: $numero_arr";

        } catch (Exception $e) {
            echo "Erro: ".$e->getMessage();
        }
    }


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>