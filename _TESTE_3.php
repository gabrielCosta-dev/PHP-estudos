<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        $mega_sena = [];
        
        
        for ($i=0; $i < 6 ; $i++) { 
            
            do{
                $num_aleatorio = rand(1, 60);
            } while(in_array($num_aleatorio, $mega_sena));

            $mega_sena[] = $num_aleatorio;

        }
        sort($mega_sena);

        echo '<pre>';
        print_r($mega_sena);
        echo '</pre>';
    ?>
</body>
</html>