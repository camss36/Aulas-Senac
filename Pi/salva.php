<?php
include_once('conexao.php');
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$data=$_POST['data_nas'];
$senha=$_POST['senha'];

$sql= "INSERT INTO formlog
(Nome, CPF, Email, Nascimento, Senha) VALUES
('$nome', '$cpf', '$email', '$data', '$senha')";
$resultado= $conexao->query($sql) or die ($conexao->error);

if ($resultado) {
    echo 'sucesso';
}
?>

<script>
    alert("Cadastrado(a) com sucesso!")
    window.location.href = "index.html"
</script>