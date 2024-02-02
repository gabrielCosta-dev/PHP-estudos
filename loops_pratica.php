<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        
        $funcionarios = array(
            ['nome'=>'João', 'salario' => 2500], 
            ['nome'=>'Maria', 'salario' => 3000], 
            ['nome'=>'Pedro', 'salario' => 2200], 
            ['nome'=>'Milene', 'salario' => 3300]
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach ($funcionarios as $idx => $funcionario) {
            #print_r($funcionario);
            
            foreach ($funcionario as $chave => $valor) {
                echo ucfirst($chave) . " : $valor <br>";
            }

            echo '<hr>';

        }

    ?>
</body>
</html>