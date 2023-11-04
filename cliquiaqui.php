<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Currículo</title>
</head>

<body>
    <h1>Formulário de Currículo</h1>
    <center>
        <form action="processar_curriculo.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required><br><br>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required><br><br>

            <label for="experiencia">Experiência:</label>
            <textarea id="experiencia" name="experiencia" rows="5" required></textarea><br><br>

            <label for="formacao">Formação Acadêmica:</label>
            <textarea id="formacao" name="formacao" rows="5" required></textarea><br><br>

            <input type="submit" value="Enviar">
        </form>
    </center>
</body>

</html>