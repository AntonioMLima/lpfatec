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


    <form action="exerc3resp.php" method="POST">
        <div class="row pb-3">
            <div class="col">
                <label for="palavra1"  class="form-label"> Primeira palavra:  </label>
                <input type="text" class="form-control form-control-sm" name="palavra1" id="palavra1">
            </div>

            <div class="col">
                <label for="palavra2"  class="form-label"> Segunda palavra:  </label>
                <input type="text" class="form-control form-control-sm" name="palavra2" id="palavra2">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button class="btn btn-primary"> Enviar </button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>