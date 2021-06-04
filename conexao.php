<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projetofilmes";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// CONSULTAS DAS ABAS
    $consulta_assistido = "SELECT * FROM filmes where assistido = 'true'";
    $con_assistido = $conn->query($consulta_assistido) or die($conn->error);

    $consulta_interesse = "SELECT * FROM filmes where assistido = ''";
    $con_interesse = $conn->query($consulta_interesse) or die($conn->error);

    $consulta_favorito = "SELECT * FROM filmes where favorito = 'true'";
    $con_favorito = $conn->query($consulta_favorito) or die($conn->error);

// CONSULTAS DA HOME
    $consulta_home = "SELECT * FROM filmes where assistido = 'true' ORDER BY RAND() LIMIT 1";
    $con_home = $conn->query($consulta_home) or die($conn->error);

    $consulta_last_assistido = "SELECT * FROM filmes where assistido = 'true' ORDER BY ID DESC LIMIT 5";
    $con_last_assistido = $conn->query($consulta_last_assistido) or die($conn->error);

    $consulta_nota10 = "SELECT * FROM filmes where nota = '10' or nota = '9' ORDER BY RAND() LIMIT 5";
    $con_nota10 = $conn->query($consulta_nota10) or die($conn->error);

    $consulta_genero_romance = "SELECT * FROM filmes where genero1 = 'Romance' or genero2 = 'Romance' or genero3 = 'Romance' ORDER BY RAND() LIMIT 5";
    $con_genero_romance = $conn->query($consulta_genero_romance) or die($conn->error);

    $consulta_genero_hqs = "SELECT * FROM filmes where genero1 = 'Quadrinhos' or genero2 = 'Quadrinhos' or genero3 = 'Quadrinhos' ORDER BY RAND() LIMIT 5";
    $con_genero_hqs = $conn->query($consulta_genero_hqs) or die($conn->error);

//ORDER BY RAND() LIMIT 1";
?>