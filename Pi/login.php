<?php

if(isset($_POST['usuario']) && isset($_POST['senha'])) {
    
    include('conexao.php');

    $email = $conexao->escape_string($_POST['usuario']);
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM formlog WHERE Email = '$email' and Senha = '$senha'";
    $sql_query = $conexao->query($sql_code) or die($conexao->error);

    if($sql_query->num_rows == 0) {
        echo "O usuario informado é incorreto";
    } else {
        $usuario = $sql_query->fetch_assoc();
        if(password_verify($senha, $usuario['senha'])) {
            echo "A senha informada está incorreta";
        } else {
            if(!isset($_SESSION))
                session_start();
                $_SESSION['usuario'] = $usuario['Nome'];
            header("Location: index.php");
        }
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Assistente Saúde</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="scripts/login.js"></script>
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
        <h2>Faça seu login, e tenha acesso a todas as abas oferecidas</h4><br>
    </section>

    <div class="form">
    <form name="login" onsubmit="return validar();" method="post" autocomplete="off">
        <input type="text" name="usuario" maxlength="100" placeholder="Login"><br>
        <input type="password" name="senha" maxlength="25" placeholder="Senha"><br>
        <button type="" id="enviar">Entrar</button>
        <div id="bot"></div>
    </form>
    </div>

    <a href="#" id="aparecer" onclick="openFormlog()">Não é registrado? Registre-se</a>

        <div class="desaparecer" id="esconde">
            <form method="POST" name="cadastro" onsubmit="return condicoes()" action="salva.php" autocomplete="off">
                <input type="text" name="nome" placeholder="Insira seu nome completo" required>
                <input type="number" name="cpf" placeholder="Insira seu CPF somente os números" required>
                <input type="email" name="email" placeholder="Inaira seu E-mail" required><br>
                <input type="date" name="data_nas" required>
                <input type="password" name="senha" placeholder="Crie uma senha" required><br>
                <div id="cad"></div>
                <button type="submit" id="enviar">Cadastrar</button>
                <button type="button" id="close" onclick="closeFormlog()">Fechar</button>
            </form>
        </div>


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