<?php 
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 3</h1>


    <?php

    function lerPalavra(int $numpalavra):string {
        return $_POST["palavra$numpalavra"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        try {
            $palavra1 = (string) lerPalavra(1);
            $palavra2 = (string) lerPalavra(2);

            $isContida = (bool) str_contains($palavra1, $palavra2);

            if ($isContida) {
                echo "A palavra $palavra2 está contida em $palavra1";
            } else {
                echo "A palavra $palavra2 não está contida em $palavra1";
            }


        } catch (Exception $e) {
            echo "Erro: ".$e->getMessage();
        }
    }


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>