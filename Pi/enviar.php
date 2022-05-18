<?php
include_once('index.php');
$exame=$_POST['nomeexam'];
$n_exame=$_POST['nuexam'];
$dataexam=$_POST['dataexame'];
$obs=$_POST['obser'];
$arquivo=$_POST['pdfexam'];

$sql= "INSERT INTO cadexames
(Nomeexame, Numexame, Datareal, Observacao, Fila) VALUES
('$nomeexam', '$nuexam', '$dataexame', '$obser', '$pdfexam')";
$query= mysqli_query($conexão, $sql);

?>