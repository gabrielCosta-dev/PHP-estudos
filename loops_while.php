<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        
        #$array = array(1, 2, 3, 4, 5);
        $a = 0;

        while ($a <= 10) {
           /*  if ($a < 25) {
                echo ($a+=5) . ' ';
            } else {
                break;
            } */
            
            echo $a++ . ' ';
            continue;
            echo ($a+=5) . ' ';
        }
        
    ?>
</body>
</html>