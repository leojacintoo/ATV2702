<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sql = "UPDATE pessoa SET nome=?, idade=? WHERE id=?";
    $update = $conn->prepare($sql) or die($conn->error);
    if (!$update) {
        echo "Erro na atualização!".$conn->errno.'-'.$conn->error;
    }
    $update->bind_param('ssi', $nome, $idade, $id);
    $update->execute();
    $update->close();
    header("Location: index.php");
?>