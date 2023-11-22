<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        define('BD_URL', 'endereço_bd_dev');
        define('BD_USER', 'usuário_dev');
        define('BD_SENHA', 'senha_dev');

        echo BD_URL .'<br>';
        echo BD_USER .'<br>';
        echo BD_SENHA;
    ?>
</body>
</html>