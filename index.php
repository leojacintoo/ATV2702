<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="margin: 20px;">
        <center><h1>CRUD</h1></center>
        <hr/>
        <br/>
        <center><a href="cadastro.php" class="btn btn-outline-secondary" tabindex="-1" role="button">Cadastrar um novo nome</a></center>
        <br/>
        <center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>IDADE</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conecta.php';
                        $nomes = mysqli_query($conn, "SELECT * FROM pessoa");
                        $row = mysqli_num_rows($nomes);
                        if ($row > 0) {
                            while($registro = $nomes->fetch_array()){
                                $id = $registro['id'];
                                echo '<tr>';
                                    echo '<td>'.$registro['id'].'</td>';
                                    echo '<td>'.$registro['nome'].'</td>';
                                    echo '<td>'.$registro['idade'].'</td>';
                                    echo '<td><a href="editar.php?id='.$id.'">Editar</a> | <a href="excluir.php?id='.$id.'">Excluir</a></td>';
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                        else {
                            echo "Não existem nomes cadastrados!";
                            echo '</tbody>';
                            echo '</table>';
                        }
                    ?>
        </center>
    </body>
</html>