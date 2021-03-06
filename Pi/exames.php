<?php
include('conexao.php');
if(!isset($_SESSION))
session_start();

$sql= "SELECT * FROM cadexames";
$query= $conexao->query($sql) or die ($conexao->error);
$num_clientes= $query->num_rows;

$user = $_SESSION['usuario'];
$sql1= "SELECT * FROM formlog";
$query1= $conexao->query($sql1) or die ($conexao->error);
$num_clientes1= $query1->num_rows;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exames/assistentesaude</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="scripts/exames.js"></script>
</head>
<body>

    <nav class="menu">
        <img src="img/logopi.png" alt="" width="100%">
        <div class="links">
            <a href="index.php">Início</a>
            <a href="exames.php">Exames</a>
            <a href="unidades.php">Rede de Saúde</a>

        </div>
    </nav>

    <section class="box"> 
        <h2>Bem vindo  <?php echo $user;?></h4><br>
        <p>Cadastre seus exames, consulte sempre que precisar</p>
        <button type="button" id="show" onclick="openFormexam()">Cadastre seu exame aqui</button>
    </section>

    <div class="tabela">
        <form action="">
        <table class="tableprincipal" id="">
            <thead>
                <th>ID</th>
                <th>Exame</th>
                <th>Número do exame</th>
                <th>Data de Realização</th>
                <th>Observação</th>
                <th>Arquivo</th>
            </thead>
            <tbody>
                <?php
                    while ($id_exame = $query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $id_exame['id'];?></td>
                        <td><?php echo $id_exame['Nomeexame'];?></td>
                        <td><?php echo $id_exame['Numexame'];?></td>
                        <td><?php echo $id_exame['Datareal'];?></td>
                        <td><?php echo $id_exame['Observacao'];?></td>
                        <td><?php echo $id_exame['Fila'];?></td>

                        <?php } ?>
                    </tr>
                    
            </tbody>
            </table>
        </form>
    </div>
    
   
    
    <section class="exam" id="formexam">
        <h1>Cadastre seus exames aqui</h1><br>
        <form action="enviar.php" name="exames" onsubmit="vazios();" method="post" autocomplete="off">
            <input type="text" name="exame" placeholder="Nome do exame realizado" required>
            <input type="number" name="n_exame" placeholder="Insira o número do exame" required>
            <input type="date" name="dataexam" required><br>
            <input type="text" name="obs" placeholder="Possui alguma observação?">
            <input type="file" name="arquivo" required><br>
            <button id="envi" type="submit">Enviar</button>
            <button type="button" id="close" onclick="closeFormexam()">Fechar</button>

        </form>
    </section>

    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a id="back-to-top">Inicio</a></li><</li>
                <li class="list-inline-item"><a href="termos.html">Termos</a></li>
            </ul>
            <p class="copyright">ASSISTENTE_SAÚDE© 2022</p>
        </footer>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>