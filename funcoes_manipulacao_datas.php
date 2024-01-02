<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        /* echo date_default_timezone_get();
        echo '<br>';
        //date_default_timezone_set('America/Sao_Paulo');

        //Recuperação data atual/Data corrente 
        $data = date('d/m/Y  H:i');
        echo $data; */

        $data_inicial = '2024-01-02';
        $data_final = '2023-12-13';

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo "$data_inicial - $time_inicial <br>";
        echo "$data_final - $time_final <br>";

        $diferenca_times = ($time_inicial - $time_final);
        //echo $diferenca_times;

        $segundos_dia = 24*60*60;
        $res = $diferenca_times/$segundos_dia;

        echo "Diferença de dias entre as datas: $res";
    ?>
</body>
</html>