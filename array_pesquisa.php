<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        $lista_coisas = ['frutas'=> $lista_frutas, 'pessoas'=>['Pedro', 'Ana', 'Lucas', 'Renata']];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        //in_array()
        #echo in_array('Limão', $lista_frutas);

        //array_search()
        $existe = array_search('Lucas', $lista_coisas['pessoas']);

        if ($existe) {
            echo 'O valor e existe e está localizado no índice ' .$existe.'.';
        } else {
            echo 'O valor não existe.';
        }
        
    ?>
</body>
</html>