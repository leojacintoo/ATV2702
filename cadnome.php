<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $query = $conn->query("SELECT * FROM pessoa WHERE nome='$nome' AND idade='$idade'");
    if (mysqli_num_rows($query) > 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Nome já existe em nossa base de dados!');
        window.location.href='cadastro.php';
        </script>";
        mysqli_close($conn);
    }
    else {
        $sql = "INSERT INTO pessoa(nome,idade) VALUES ('$nome','$idade')";
        if (mysqli_query($conn, $sql)) {
            echo "<script language='javascript' type='text/javascript'>
        alert('Dados gravados com sucesso!');
        window.location.href='index.php';
        </script>";
        }
    }
    mysqli_close($conn);
?>