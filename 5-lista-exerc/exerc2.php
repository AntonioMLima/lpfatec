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

    

    <form action="" method="POST">
        
            <?php 
            for($i = 1; $i <= 5; $i++)  :?>
                

                <div class="row">
                    <h4> Aluno <?php echo $i?></h4>
                </div>
                    <div class="row">

                        <div class="col-2 pb-3">
                            
                            <label for="nomes[]" class="form-label"> Nome: </label>
                            <input type="text" name="nomes[]" class="form-control form-control-sm">
                            
                        </div>
                            
                            <?php 
                            for($d = 1; $d <= 3; $d++) :?>
                                
                                <div class="col-2">
                                    <label for="nota<?php echo "nota{$d}[]"; ?>" class="form-label"> Nota <?php echo $d?> </label>
                                    <input type="number" step="0.1" name="<?php echo "nota{$d}[]"?>" class="form-control form-control-sm" required>
                                </div>
                                
                                <?php endfor; ?>
                            </div>
                    
                    
                
                <?php endfor; ?>
            
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary mt-4"> Enviar</button>
                </div>
            </div>
    </form>

    <?php
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {

                $nomes = $_POST['nomes'];
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];
                $media = array();
                $boletimClasse = array();

                for ($i = 0; $i < 5; $i++) {
                    $media[$i] = ($nota1[$i] + $nota2[$i] + $nota3[$i]) / 3;


                    $boletimClasse[$nomes[$i]] = $media[$i];
                }

                

                asort($boletimClasse);

                echo '<pre>'; print_r($media); echo '</pre>';
                echo '<pre>'; print_r($boletimClasse); echo '</pre>';


                
            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
            
        }


        
    
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>