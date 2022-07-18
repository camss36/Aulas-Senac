<?php
include('conexao.php');
if(!isset($_SESSION))
    session_start();


$user = $_SESSION['usuario'];
$sql= "SELECT * FROM formlog";
$query= $conexao->query($sql) or die ($conexao->error);
$num_clientes= $query->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades de Saúde/assistentesaude</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="scripts/unidades.js"></script>
    
</head>
<body>

    <nav class="menu" style="position: fixed;">
        <img src="img/logopi.png" alt="" width="100%">
        <div class="links">
            <a href="index.php">Início</a>
            <a href="exames.php">Exames</a>
            <a href="unidades.php">Rede de Saúde</a>
        </div>
    </nav>

    <section class="box"> 
        <h2> <?php echo $user;?> </h4><br>
        <p style="font-size:25px ;">De acordo com sua localização a Unidade mais próxima é:</p>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1801.4192396400024!2d-49.276834648098465!3d-25.44366302550822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce48b9900e07f%3A0xce494dd214e747b9!2sUnidade%20de%20Sa%C3%BAde%20Ouvidor%20Pardinho!5e0!3m2!1spt-BR!2sbr!4v1654624819642!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Inicio</a></li>
                <li class="list-inline-item"><a href="termos.html">Termos</a></li>
            </ul>
            <p class="copyright">ASSISTENTE_SAÚDE© 2022</p>
        </footer>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>