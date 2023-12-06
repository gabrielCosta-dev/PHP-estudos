<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h3>Pós-incremento</h3>
    <?php 
        $a = 7;
        echo "O valor contido em a é $a <br>.";
        $a++;
        echo "O valor contido em a é $a <br>.";
    ?>

    <h3>Pré-incremento</h3>
    <?php 
        $a = 7;
        echo "O valor contido em a é $a <br>.";
        ++$a;
        echo "O valor contido em a é $a <br>.";
    ?>

<h3>Pós-decremento</h3>
    <?php 
        $a = 7;
        echo "O valor contido em a é $a <br>.";
        $a--;
        echo "O valor contido em a é $a <br>.";
    ?>

    <h3>Pré-decremento</h3>
    <?php 
        $a = 7;
        echo "O valor contido em a é $a <br>.";
        --$a;
        echo "O valor contido em a é $a <br>.";
    ?>
</body>
</html>