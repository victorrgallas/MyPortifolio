<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "victorrgallas@gmail.com";
    $assuntos = "Info site portifolio!";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Assunto: ".$assunto."\n"."Mensagem: ".$mensagem;

    $cabeca = "From victorrgallas@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assuntos,$corpo,$cabeca)){
        echo("Enviado com sucesso!")
    } else {
        echo("Não foi possível enviar");
    }

?> 