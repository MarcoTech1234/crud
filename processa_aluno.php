php da conexão

<?php



include_once  "conexao.php";



    $nome = $_POST['nome'];

    $idade = $_POST['idade'];

    $altura = $_POST['altura'];

    $escolaridade = $_POST['escolaridade'];



    $consulta = "INSERT INTO alunos(nome, idade, altura, escolaridade)

                        VALUES ('$nome', $idade, $altura, '$escolaridade')";

    

    mysqli_query($conexao, $consulta);



    header('location: ver_aluno.php');




    



?>