<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Exercício 5</h1>



    <?php 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
               
                $mes = (int) $_POST["mes"];

                switch ($mes) {
                    case 1:
                        $mes_associado = (string) "Janeiro";
                        break;
                    case 2:
                        $mes_associado = (string) "Fevereiro";
                        break;
                    case 3:
                        $mes_associado = (string) "Março"; 
                        break;
                    case 4:
                        $mes_associado = (string) "Abril";
                        break;
                    case 5:
                        $mes_associado = (string) "Maio";
                        break;
                    case 6:
                        $mes_associado = (string) "Junho";
                        break;
                    case 7:
                        $mes_associado = (string) "Julho";
                        break;
                    case 8: 
                        $mes_associado = (string) "Agosto";
                        break;
                    case 9:
                        $mes_associado = (string) "Setembro";
                        break;
                    case 10:
                        $mes_associado = (string) "Outubro";
                        break;
                    case 11:
                        $mes_associado = (string) "Novembro";
                        break;
                    case 12: 
                        $mes_associado = (string) "Dezembro";
                        break;
                }

                echo "<p> Mês: $mes_associado. </p>";

            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>