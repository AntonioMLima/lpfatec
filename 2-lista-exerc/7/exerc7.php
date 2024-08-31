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
      <div class="row">
          <div class="col-3" >
              <label for="temp_f" class="form-label"> Temperatura em F°</label>
              <input type="number" class="form-control form-control-sm" name="temp_f" id="temp_f">
          </div>

          <div class="row pt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary"> Enviar</button>
            </div>
          </div>

      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>