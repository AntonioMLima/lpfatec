<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 7</h1>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $temp_f = (double) $_POST["temp_f"] ?? 0;

            // (32 °F − 32) × 5/9 = 0 °C


            $temp_c = ( $temp_f - 32) * 5/9;

            echo "Temperatura em C°: $temp_c";
        } catch (Exception $e) {
            echo "Erro: ". $e->getMessage();
        }
      }
    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>