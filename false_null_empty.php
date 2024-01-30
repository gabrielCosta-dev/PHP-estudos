<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        #false = variável boolean
        #null e empty = valores especiais
        
        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //Null
        if (is_null($funcionario1)) {
            echo 'É null.';
        } else {
            echo 'Não é null.';
        }

        echo '</br>';

        if (is_null($funcionario2)) {
            echo 'É null.';
        } else {
            echo 'Não é null.';
        }

        echo '<hr>';

        //Empty
        if (empty($funcionario1)) {
            echo 'É empty(vazio).';
        } else {
            echo 'Não é empty(vazio).';
        }
        echo '</br>';
        if (empty($funcionario2)) {
            echo 'É empty(vazio).';
        } else {
            echo 'Não é empty(vazio).';
        }

        echo '<hr>';

        //False
        if (empty($funcionario3)) {
            echo 'É empty(vazio).';
        } else {
            echo 'Não é empty(vazio).';
        }
        echo '</br>';
        if (is_null($funcionario3)) {
            echo 'É null.';
        } else {
            echo 'Não é null.';
        }

     ?>
</body>
</html>