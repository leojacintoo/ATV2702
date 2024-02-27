<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM pessoa WHERE id=$id";
    $query = $conn->query($sql);
    while ($dados = $query->fetch_array()) {
        $nome = $dados['nome'];
        $idade = $dados['idade'];
    }
?>
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
        <form action="upnome.php?id=<?php echo $id;?>" method="post">
            <label>NOME</label><br/>
            <input type="text" name="nome" value="<?php echo $nome;?>" required/>
            <br/><br/>
            <label>IDADE</label><br/>
            <input type="number" name="idade" value="<?php echo $idade;?>" required/>
            <br/><br/>
            <button type="submit" class="btn btn-outline-secondary">ATUALIZAR</button>
        </form>
    </body>
</html>