<?php

$servidor="sql108.byetcluster.com";
$usuario="sql108.epizy.com";
$senha="eVQmB4YkOdj";
$database="epiz_31956943_ProjetoIntegrador";

$conexão=mysqli_connect($servidor, $usuario, $senha, $database);

if($conexão){
    echo 'Conectado com sucesso!';

}else{
    echo 'Falha ao conectar';
}

?>