<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        #$array = 'String';
        $lista_frutas = [1=>'Banana', 2=>'Maçã', 3=>'Laranja', 4=>'Jabuticaba', 5=>'Abacaxi', 6=>'Pêra'];
        $lista_pessoas = ['Pedro', 'Ana', 'Lucas', 'Renata', 'Luzia', 'Mauri'];
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';
        echo '<br>';
        //is_array(array)
        #$retorno = is_array($lista_frutas);

        //array_keys(array)
        //array_key_first(array)
        //array_key_last(array)
        //array_key_exists(key, array)
        /* $chaves_array = array_keys($lista_frutas);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>'; */

        //sort(array)
        //asort(array)
        /* asort($lista_frutas);
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>'; */

        //count(array/object)
        /* echo '<pre>';
            echo count($lista_frutas);
        echo '</pre>'; */

        //array_merge()
        /* $merge_arrays = array_merge($lista_frutas, $lista_pessoas);
        echo '<pre>';
            print_r($merge_arrays);
        echo '</pre>'; */

        //explode('delimitador', string)
        /* $data = '31/02/1969';
        print_r(explode('/', $data)); */

        //implode(',', array)
        $retorno_string = implode(', ', $lista_frutas);

        echo '<pre>';
            echo $retorno_string;
        echo '</pre>';
     ?>
</body>
</html>