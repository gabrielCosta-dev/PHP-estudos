<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        table{
            margin: 10px auto; font-family: Arial;
            border-collapse: collapse
        }

        td, th{
            padding: 10px; border: 1px solid purple
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>BASE DE CÁLCULO</th>
            <th>ALÍQUOTA</th>
        </thead>
        <tr>
            <td>Até R$1903,00</td>
            <td>Isento</td>
        </tr>

        <tr>
            <td>De R$1903,99 até R$2826,55</td>
            <td>7,5%</td>
        </tr>

        <tr>
            <td>De R$2826,66 até R$3751,05</td>
            <td>15%</td>
        </tr>

        <tr>
            <td>De R$3751,06 até R$4664,68</td>
            <td>22,5%</td>
        </tr>

        <tr>
            <td>Acima de R$4664,68</td>
            <td>27,5%</td>
        </tr>
    </table>

    <?php 
    
        function calcularImpostoRenda($salario){
            $impostoRenda = 0;

            if ($salario <= 1903) {

                return 'Você está isento do imposto de renda.';

            } else if($salario >=1903.99 && $salario<= 2826.55){

                $impostoRenda = 0.075;
                return 'Seu imposto de renda é de 7,5% e você terá de pagar R$'.($salario * $impostoRenda). ' de imposto de renda.';

            } else if($salario >=2826.56 && $salario<= 3751.05){

                $impostoRenda = 0.15;
                return 'Seu imposto de renda é de 15% e você terá de pagar R$'.($salario * $impostoRenda). ' de imposto de renda.';

            } else if($salario >=3751.06 && $salario<= 4664.68){

                $impostoRenda = 0.225;
                return 'Seu imposto de renda é de 22,5% e você terá de pagar R$'.($salario * $impostoRenda). ' de imposto de renda.';

            } else{

                $impostoRenda = 0.275;
                return 'Seu imposto de renda é de 27,5% e você terá de pagar R$'.($salario * $impostoRenda). ' de imposto de renda.';

            }
            
        }

       $res = calcularImpostoRenda(7289);
       echo "<div> $res <div/>";

    ?>

    
</body>
</html>