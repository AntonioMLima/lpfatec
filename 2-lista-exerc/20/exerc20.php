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

       <form action="exerc20resp.php" method="POST">
            <div class="row pb-3">
                <div class="col">
                    <label for="distancia" class="form-label"> Distância em km: </label>
                    <input type="number" class="form-control form-control-sm" name="distancia" id="distancia">
                </div> 
                
                <div class="col">
                    <label for="tempo" class="form-label"> Tempo em horas: </label>
                    <input type="number" step=0.01 class="form-control form-control-sm" name="tempo" id="tempo">
                </div> 
            </div>        

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary"> Enviar </button>
                </div>
            </div>

       </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>