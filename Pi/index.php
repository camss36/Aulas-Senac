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
    <title>Assistente Saúde</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="scripts/index.js"></script>
    

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
        <h2>Bem vindo <?php echo $user;?></h4><br>
        <p>Faça seu login, e tenha acesso a todas as abas oferecidas</p>
        <h3>Opções</h5>
        
        <main class="mini">   
            <div class="options"><a href="exames.php"><br><img src="img/exame.png" width="35%" alt=""><h1>Exames</h1></a></div>
            <div class="options"><a href="unidades.php"><img src="img/hospital.png" width="35%" alt=""><h1>Unidades de saúde mais próximas</h1></a></div>
            <div class="options"><a href="https://noticias.uol.com.br/saude/" target="blank"><br><img src="img/jornal.png" width="35%" alt=""><h1>Notícias</h1></a></div>
            <div class="options"><a href="#" onclick="openForm();" ><br><img src="img/tel.png" width="35%" alt=""><h1>Fale conosco</h1></a>
            
            </div>
        </main>
    </section>
    
    <div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container" autocomplete="off">
        <h1>Chat online</h1>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Insira seu E-mail" name="email" required>

        <label for="mens"><b>Insira sua mensagem</b></label>
        <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Escreva algo"></textarea>


        <button type="submit" class="btn">Enviar</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>
    </form>
    </div>
    <!--<p>Click on the button at the bottom of this page to open the login form.</p>
    <p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p>-->
    <div class="log"><a href="login.php"><button class="tela_login">Faça seu Login</button></a></div>
    
    <br>
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