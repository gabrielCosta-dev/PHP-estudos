<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        //String
        $nome = 'Gabriel';

        #Number
        $idade = 27;

        //Float
        $peso = 80.1;

        #Boolean
        $fumante_sn = false; // OU true
     ?>

     <h1>Ficha cadastral</h1>
     <p>Nome: <?= $nome ?></p>
     <p>Idade: <?= $idade ?></p>
     <p>Peso: <?= $peso ?></p>
     <p>Fumante: <?php 
        if ($fumante_sn == true) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
        
     ?></p>
</body>
</html>