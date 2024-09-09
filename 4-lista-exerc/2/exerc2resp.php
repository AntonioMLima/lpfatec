<?php 
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 2</h1>


    <?php

    function transformar(string $escolha, string $palavra):string {
        if ($escolha == "MIN") {
            return strtolower($palavra);
        } elseif ($escolha == "MAI") {
            return strtoupper($palavra);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        try {
            $palavra = $_POST["palavra"];
    
            $palavra_mai = (string) transformar("MAI", $palavra);
            $palavra_min = (string ) transformar("MIN", $palavra);
    
            echo"<p>Palavra minúscula: $palavra_min</p>
                <p> Palavra maiúscula: $palavra_mai</p>";
        } catch (Exception $e) {
            echo "Erro: ".$e->getMessage();
        }
    }


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>