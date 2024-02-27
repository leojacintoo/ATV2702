<?php
    $conn = mysqli_connect("localhost","root","","crud");
    mysqli_set_charset($conn, "utf8");
    if (!$conn) {
        echo "Erro: ".mysqli_connect_error().PHP_EOL;
    }
?>