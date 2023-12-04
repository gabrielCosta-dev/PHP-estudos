<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        $opcao = 2;

        switch ($opcao) {
            case 1:
                print('Case 1');
                break;
            
            case 2:
                print('Case 2');
                break;

            default:
            print('Default');
                break;
        }
    ?>
</body>
</html>