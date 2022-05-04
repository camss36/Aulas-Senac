<?php
include_once('index.php');
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$data=$_POST['data_nas'];
$senha=$_POST['senha'];

$sql= "INSERT INTO formlog
(Nome, CPF, Email, Nascimento, Senha) VALUES
('$nome', '$cpf', '$email', '$data', '$senha')";
$query= mysqli_query($conexão, $sql);

?>
