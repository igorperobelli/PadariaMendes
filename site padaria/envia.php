<?php

    $nome = addcslashes($_POST['nome'])
    $email = addcslashes($_POST['email'])
    $telefone = addcslashes($_POST['telefone']);

    $para = "ihfmendes@gmail.com";
    $assunto = "Coleta de dados - Webdesigner"


    $corpo = "Nome: " .$nome. "\n"."E-mail: ".$email."\n"."Telefone".$telefone

    $cabeca = "From: igor@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion(); 

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!")
    } else {
        echo("Houve um erro ao enviar o email");
    }
    
    ?>