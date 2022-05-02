<?php
include_once('index.php');
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$data=$_POST['data_nas'];
$senha=$_POST['senha'];

$sql= "INSERT INTO testes
(nome, cpf, email, data_nas, senha) VALUES
('$nome', '$cpf', '$email', '$data, '$senha')";
$query= mysqli_query($conexão, $sql);

?>

<script>
    alert
</script>