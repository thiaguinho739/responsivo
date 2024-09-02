<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<nav>
        <input type="checkbox" id="checkbox" class="checkbox">
        <label for="checkbox" class="label-menu">Menu<span class="hamburguer"></span></label>
        <ul class="menu">
            <li><a href="index.html" onclick="window.location.reload()">Inicio</a></li>
            <li><a href="#servicos" onclick="hideMENU()">Serviços</a></li>
            <li><a href="#cases" onclick="hideMENU()">Cases</a></li>
            <li><a href="#empresa" onclick="hideMENU()">Empresa</a></li>
            <li><a href="contato.php" onclick="hideMENU()">Contato</a></li>
        </ul>
    </nav>
    <strong>Preencha o formulário para contatos</strong>
    <form class="formulario" action="processaform.php" method="POST">
        <input type="text" name="camponome" placeholder="Digite seu nome">
        <input type="email" name="campoemail" placeholder="Digite seu melhor e-mail">
        <input type="text" name="campotelefone" placeholder="Digite seu telefone">
        <input type="text" name="assunto" placeholder="Digite o assunto" class="campo">
        <textarea type="text" name="mensagem" rows="10" placeholder="sua mensagem" class="campo"></textarea>
        <input type="submit" value="Enviar" placeholder="enviar" class="botao">
    </form>

</body>
</html>