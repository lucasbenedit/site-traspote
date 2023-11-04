<?php

function pesquisarNoGoogle($termo)
{
    $url = "https://www.google.com/search?q=" . urlencode($termo);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resposta = curl_exec($ch);
    curl_close($ch);

    return $resposta;
}

// Exemplo de uso
$termoPesquisa = "OpenAI";
$resultado = pesquisarNoGoogle($termoPesquisa);
echo $resultado;
