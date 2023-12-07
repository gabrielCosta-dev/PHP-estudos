<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        //Void
        function exibirBoasVindas() {
            echo 'Seja bem-vindo! <br>';
        }

        exibirBoasVindas();

        //Com retorno
        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;

            return $area;
        }

        $resultado = calcularAreaTerreno(30, 50);
        echo "<hr> $resultado";
    ?>
</body>
</html>