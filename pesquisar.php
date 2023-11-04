<?php
echo "<h1>Listagem de login dos usuários<h3><hr>";
$conexao = mysqli_connect("localhost", "root", "", "bdlogin1") or die("Erro ao conectar");
$sql = "select * from tblogin";
$result = mysqli_query($conexao, $sql);
while ($reg = mysqli_fetch_array($result)) {
    echo "Usuário: " . $reg['email'];
    echo "<br>Senha: " . $reg['senha'] . "<hr>";
}
mysqli_close($conexao);
