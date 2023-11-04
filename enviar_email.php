<?php
$para = "lucasbenedito7@hotmail.com"; // Insira o endereço de e-mail do destinatário aqui
$assunto = "Exemplo de E-mail"; // Insira o assunto do e-mail aqui
$mensagem = "Olá, este é um exemplo de e-mail enviado através do PHP."; // Insira a mensagem do e-mail aqui

// Cabeçalhos do e-mail
$headers = "De: lucasbenedito7@hotmail.com" . "\r\n" .
    "Responder para: lucasbenedito7@hotmail.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// Enviar o e-mail
if (mail($para, $assunto, $mensagem, $headers)) {
    echo "E-mail enviado com sucesso.";
} else {
    echo "Falha ao enviar o e-mail.";
}
