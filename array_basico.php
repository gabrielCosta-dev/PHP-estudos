<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        //Array Básico
        //$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
        /* $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
        $lista_frutas[0] = 'Abacaxi';
        echo $lista_frutas[0];
        
        var_dump($lista_frutas);
        print_r($lista_frutas); */

        //Array Multidimensional
        $lista_coisas = ['frutas'=>['Banana', 'Maçã', 'Morango', 'Uva'], 'pessoas'=>['Pedro', 'Ana', 'Lucas', 'Renata']];
        $lista_coisas['frutas'][4] = 'Laranja';

        echo '<pre>';
        print_r($lista_coisas);
        echo '<pre>';
    ?>
</body>
</html>