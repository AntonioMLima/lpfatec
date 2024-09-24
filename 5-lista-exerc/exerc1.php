<?php 
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 1</h1>

    

    <form action="" method="POST">
        <div class="row pt-4">
            <?php 
            for($i = 0; $i <= 5; $i++)  :?>
                <div class="col pe-4">

                    
                    <h3>Contato <?php echo $i+1?></h3>

                    <label for="nomes[]" class="form-label"> Nome: </label>
                    <input type="text" name="nomes[]" class="form-control form-control-sm">
                    
                    <label for="telefones[]" class="form-label"> Telefone: </label>
                    <input type="text" name="telefones[]" class="form-control form-control-sm">
                 
                    
                </div>
                <?php endfor; ?>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary mt-4"> Salvar contato</button>
                </div>
            </div>
    </form>

    <?php
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            try {

                $nomes = $_POST["nomes"];
                $telefones = $_POST["telefones"];
                $listaContatos = array();
                
    
                for ($i = 0; $i < 5;$i++) {
                    $chavesctt = array_keys($listaContatos);
                    $valoresctt = array_values($listaContatos);
    
    
                    if ((!in_array($nomes[$i], $chavesctt) && !in_array($telefones[$i], $valoresctt))) {
                        $listaContatos[$nomes[$i]] = $telefones[$i];
                    }  
                }

                ksort($listaContatos);
    
    
                echo '<pre>'; print_r($listaContatos); echo '</pre>';

    
            
            } catch (Exception $e) {
                echo "<p> Erro: ". $e->getMessage(). "</p>";
            }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>