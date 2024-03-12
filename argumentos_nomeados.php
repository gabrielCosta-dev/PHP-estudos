<?php 
    function sendMail($destinatarios = '', $cc = '', $assunto = '', $mensagem = ''){
        echo "Destinatários: $destinatarios. </br>";
        echo "CC: $cc. </br>";
        echo "Assunto: $assunto. </br>";
        echo "Mensagem: $mensagem. </br>";
    }

    sendMail(
        destinatarios: 'teste@teste.com',
        assunto: 'Argumentos nomeados',
        mensagem: 'Dominando a feature de argumentos nomeados do PHP 8'
    );

    echo "<hr>";

    sendMail(
        'adm@teste.com',
        'teste@teste.com',
        'Argumentos nomeados',
        'Dominando a feature de argumentos nomeados do PHP 8'
    )
?>