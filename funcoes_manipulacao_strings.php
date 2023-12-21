<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        
        //strtolower()- String to lowercase
        $texto = 'UVA OU ABACAXI.<hr>';
        print('To Lowercase: ' .strtolower($texto));

        //strtoupper() - String to uppercase
        $texto1 = 'morango ou banana.<hr>';
        print('To Uppercase: ' .strtoupper($texto1));

        //ucfirst() - Uppercase first
        $texto2 = 'mamão ou manga.<hr>';
        print('UC First: ' .ucfirst($texto2));

        //strlen() - String length
        $texto3 = 'Maracujá ou limão.<hr>';
        print('Strlen: ' .strlen($texto3). '<hr>');

        //str_replace() - String replace
        $texto4 = 'Melão ou goiaba.';
        print('Str_replace: <br> Original: ' .$texto4. '<br> Replace: '. str_replace('goiaba', 'tomate', $texto4). '<hr>');

        //substring() - Submit string
        $texto5 = 'Chuchu ou pepino.';
        print('Substring: ' .substr($texto5, 6, 4));


    ?>
</body>
</html>