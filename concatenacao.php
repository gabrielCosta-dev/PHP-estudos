<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        $nome = 'Ral';
        $cor_preferida = 'marrom';
        $idade = 29;
        $hobby = 'ler livros';

        echo 'Olá ' .$nome. ', vi que sua cor preferida é ' .$cor_preferida. ', estou vendo também que sua idade é ' .$idade. ' anos e que você gosta de ' .$hobby. '.';

        echo '<br>';

        echo "Olá $nome, vi que sua cor preferida é $cor_preferida, estou vendo também que sua idade é $idade anos e que você gosta de $hobby."
    ?>
</body>
</html>