<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table style="border: 2px solid #ccc">
            <thead>
                <th>NOME DO ALUNO</th>
                <th>IDADE</th>
            </thead>
            <tbody>
                <?php
                include 'conexão.php';

                $consulta = "SELECT * FROM alunos";
                $consulta_alunos = mysqli_query($conexao, $consulta);
                
                while($linha = mysqli_fetch_array($consulta_alunos)){
                    echo '<tr><td>'. $linha['NOME'] . '</td>';
                    echo '<td>' . $linha['IDADE'] . '</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </body>
</html>