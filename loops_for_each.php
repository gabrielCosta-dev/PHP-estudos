<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        
        $itens = ['Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira'];
        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach ($itens as $key => $value) {
            //echo $itens[$key]. '</br>';
            echo $key. '</br>';
        }

        /* foreach (array/objeto as $chave(índice) => $valor) {
           #LÓGICA
        } */
        
    ?>
</body>
</html>