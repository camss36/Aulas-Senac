<?php
include('conexao.php');
$exame=$_POST['nomeexam'];
$n_exame=$_POST['nuexam'];
$dataexam=$_POST['dataexame'];
$obs=$_POST['obser'];
$arquivo=$_POST['pdfexam'];

$sql= "INSERT INTO cadexames
(Nomeexame, Numexame, Datareal, Observacao, Fila) VALUES
('$nomeexam', '$nuexam', '$dataexame', '$obser', '$pdfexam')";
$query= mysqli_query($conexão, $sql);
if (!$query) {
    echo "falha".mysqli_connect_error();
}

?>

<script>
    alert("Exame salvo com sucesso!")
    window.location.href = "exames.html"
</script>