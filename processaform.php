<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST['camponome'];
    $email = $_POST['campoemail'];
    $telefone = $_POST['campotelefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $destinatario="thiagogabriel.d.s.p@gmail.com";
    $fonte="Mensagem de contatos";

    $corpo = "Nome do contato: $nome \n";
    $corpo = "Nome do contato: $email \n";
    $corpo = "Nome do contato: $telefone \n";
    $corpo = "Assunto: $assunto \n";
    $corpo = "Mensagem: $mensagem \n";

    mail($destinatario, $assunto, $corpo);

    header("Location:obrigado.html");
    exit()






}