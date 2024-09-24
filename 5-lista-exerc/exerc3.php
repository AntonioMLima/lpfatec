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

    

    <form action="" method="POST">
        <div class="row pt-4">
            <?php 
            for($i = 0; $i <= 4; $i++)  :?>
                <div class="col-2 pe-4">

                    
                    <h3>Produto <?php echo $i+1?></h3>

                    <label for="codigo[]" class="form-label"> Codigo: </label>
                    <input type="text" name="codigo[]" class="form-control form-control-sm">
                    
                    <label for="nome[]" class="form-label"> Nome: </label>
                    <input type="text" name="nome[]" class="form-control form-control-sm">
                
                    <label for="preco[]" class="form-label"> Preço: </label>
                    <input type="text" step="0.01" name="preco[]" class="form-control form-control-sm">
                                  
                    
                </div>
                <?php endfor; ?>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary mt-4"> Enviar</button>
                </div>
            </div>
    </form>

    <?php
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            try {

                $codigo = $_POST["codigo"];
                $nome = $_POST["nome"];
                $preco = $_POST["preco"];
                $listaProduto = array();
                
        
                for ($i = 0; $i <= 4; $i++) {
                    if ($preco[$i]  > 100) {
                        $preco[$i] *= 0.9; 
                    }
                    
                    $listaProduto[$codigo[$i]] = ['nome' => $nome[$i] , 'preco' => $preco[$i] ];
                }

                asort($listaProduto);
                
                echo '<pre>'; print_r($listaProduto); echo '</pre>';

    
            
            } catch (Exception $e) {
                echo "<p> Erro: ". $e->getMessage(). "</p>";
            }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>