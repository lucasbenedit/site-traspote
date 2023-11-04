<?php
echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <title>Tela de Login</title>
    <link rel='stylesheet' href='css/estilo.css'>
</head>
include 'pesquisar.php';
<body>
    <form class='form' action='' method='post'>
        <div class='card'>
            <div class='card-top'>
                <img class='imglogin' src='img/usuario.png'>
                <h1 class='titulo'>Painel de Controle</h1>
                <p>Gerenciar seu Negócio</p>
            </div>
            <div class='card-group'>
                <label>Email</label>
                <input type='email' name='txtemail' size='80' maxlength='80' placeholder='Digite seu email' required>
            </div>
            <div class='card-group'>
                <label>Senha</label>
                <input type='password' name='txtsenha' size='6' maxlength='6' placeholder='senha' required>
            </div>
            <div class='card-group'>
                <label><input type='checkbox'>Lembre-me</label>
            </div>
            <div class='card-group btn'>
               <button type='submit' name='btnpesquisar' value='Pesquisar'>Acessar</button>
            </div>              
    </form>
</body>";
?>

<?php
$conexao = mysqli_connect("localhost", "root", "", "bdlogin1") or die("Erro ao conectar");
if (isset($_POST['btnpesquisar'])) {
    $email = $_POST['txtemail'];
    $senha = $_POST['txtsenha'];
    $sql = "select * from tblogin where email = '$email' and senha= '$senha'";
    $result = mysqli_query($conexao, $sql);
    while ($reg = mysqli_fetch_array($result)) {
        if ($reg['email'] == 'admin@unibr.com' && $reg['senha'] == '191919') {
            header('Location: //localhost:80/login/pesquisa.php');
        }
    }
    mysqli_close($conexao);
}
?>
