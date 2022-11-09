<?php



//Para estabelecer uma comunicação, são necessários 4 parametros



    $servidor = "localhost";

    $usuario = "root";

    $senha = "";

    $banco = "escola";




    //Função que estabelece uma conexão

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);




?>