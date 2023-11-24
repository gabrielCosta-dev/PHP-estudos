<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        $peso = 48;
        $idade = 57;

        $idade >= 16 && $idade <= 69 && $peso >= 50 ? print('Atende aos requisitos.') : print('Não atende aos requisitos.')
    ?>
</body>
</html>