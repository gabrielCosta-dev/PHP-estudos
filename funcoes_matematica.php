<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        
        $numero = 2.39;

        //ceil() - Arredonda para cima
        echo "Número original: $numero <br> ceil(): ".ceil($numero). '<hr>';

        //floor() - Arredonda para baixo
        echo "Número original: $numero <br> floor(): ".floor($numero). '<hr>';

        //round() - Arredonda com base nos valores decimais
        echo "Número original: $numero <br> round(): ".round($numero). '<hr>';

        //rand() - Gera um valor aleatório inteiro com um intervalo específico ou não
        echo 'rand(): '.rand(5, 17). '<hr>';

        //sqrt() - Retorna a raiz quadrada
        echo 'sqrt(): '.sqrt(16);

    ?>
</body>
</html>