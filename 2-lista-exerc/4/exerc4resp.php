<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 4</h1>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        try {
            $valor1 = (int) $_POST["valor1"] ?? 0;
            $valor2 = (int) $_POST["valor2"] ?? 0;

            if ($valor2 == 0){
              echo "<p> Você tentou dividir $valor1 por 0. Isso é impossível";
            } else {
        
              $resultado = $valor1 / $valor2;

              echo "<p>Divisão: $resultado </p>";

            }




        } catch(Exception $e) {
            echo "Erro: ". $e->getMessage();
        }
    }
    
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>