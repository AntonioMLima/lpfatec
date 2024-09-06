<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 20</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          try {
            $tempo = (double) $_POST["tempo"];
            $distancia = (double) $_POST["distancia"] ?? 0;

            if ($tempo <= 0) {
              echo "Valor de tempo inválido";
            } else {
              $vel_media = (double) number_format($tempo / $distancia, 2);
              echo "Velocidade média: $vel_media km/h";
            }

          } catch (Exception $e) {
            echo "Erro: ". $e->getMessage();
          }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 