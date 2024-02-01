<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        
        $registros = array(
            ['titulo'=>'Título notícia 1', 'conteudo'=>'Conteúdo notícia 1'],
            ['titulo'=>'Título notícia 2', 'conteudo'=>'Conteúdo notícia 2'],
            ['titulo'=>'Título notícia 3', 'conteudo'=>'Conteúdo notícia 3'],
            ['titulo'=>'Título notícia 4', 'conteudo'=>'Conteúdo notícia 4']
        );

        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<hr>';

        /* $idx = 0;
        while ($idx < 3) {
            echo '<h3>'.$registros[$idx]['titulo'].'</h3>'.'</br>';
            echo '<p>'.$registros[$idx]['conteudo'].'</p>'.'<hr>';
            echo '</br>';
            
            $idx++;
        } */

        /* do {
            echo '<h3>'.$registros[$idx]['titulo'].'</h3>'.'</br>';
            echo '<p>'.$registros[$idx]['conteudo'].'</p>'.'<hr>';
            echo '</br>';
            
            $idx++;
        } while ($idx < 3) */

        for ($idx=0; $idx < count($registros); $idx++) { 

            echo '<h3>'.$registros[$idx]['titulo'].'</h3>'.'</br>';
            echo '<p>'.$registros[$idx]['conteudo'].'</p>'.'<hr>';
            echo '</br>';

        }
    ?>
</body>
</html>