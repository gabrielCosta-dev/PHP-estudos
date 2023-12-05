<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        //gettype()
        //FLoat, double
        //String
        //Integer
        //Bool, boolean
        $valor = '10';
        $valor2 = (bool)$valor;

        echo gettype($valor2);
    ?>
</body>
</html>