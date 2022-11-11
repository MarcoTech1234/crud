<?php

    include 'conexao.php';

    $id = $_GET['ID'];

    $excluir = "DELETE FROM alunos WHERE ID = $id";

    mysqli_query($conexao, $excluir);

    header('location: ver_aluno.php');

?>