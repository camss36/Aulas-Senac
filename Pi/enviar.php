<?php
include('conexao.php');
$exame=$_POST['exame'];
$n_exame=$_POST['n_exame'];
$dataexam=$_POST['dataexam'];
$obs=$_POST['obs'];
$arquivo=$_POST['arquivo'];

$sql= "INSERT INTO cadexames
(Nomeexame, Numexame, Datareal, Observacao, Fila) VALUES
('$exame', '$n_exame', '$dataexam', '$obs', '$arquivo')";
$resultado= $conexao->query($sql) or die ($conexao->error);

if ($resultado) {
    echo 'sucesso';
}
?>

<script>
    alert("Exame salvo com sucesso!")
    window.location.href = "exames.php"
</script>