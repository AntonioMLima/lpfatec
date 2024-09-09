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


    <form action="exerc7resp.php" method="POST">
        <div class="row pb-3">
            <div class="col">
                <label for="data1"  class="form-label"> Primeira data: </label>
                <input type="date" class="form-control form-control-sm" name="data1" id="data1">
            </div>

            <div class="col">
                <div class="col">
                    <label for="data2" class="form-label"> Segunda data: </label>
                    <input type="date" class="form-control form-control-sm" name="data2" id="data2">
                </div>
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