<?php

session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nota = filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$poster = filter_input(INPUT_POST, 'poster', FILTER_SANITIZE_STRING);
$assistido = filter_input(INPUT_POST, 'assistido', FILTER_SANITIZE_STRING);
$favorito = filter_input(INPUT_POST, 'favorito', FILTER_SANITIZE_STRING);
$backg = filter_input(INPUT_POST, 'backg', FILTER_SANITIZE_STRING);
$sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_STRING);
$genero1 = filter_input(INPUT_POST, 'genero1', FILTER_SANITIZE_STRING);
$genero2 = filter_input(INPUT_POST, 'genero2', FILTER_SANITIZE_STRING);
$genero3 = filter_input(INPUT_POST, 'genero3', FILTER_SANITIZE_STRING);

$result = "INSERT INTO filmes (nome, nota, data, poster, assistido, favorito, backg, sinopse, genero1, genero2, genero3) 
VALUE ('$nome', '$nota', '$data', '$poster', '$assistido', '$favorito', '$backg', '$sinopse', '$genero1', '$genero2', '$genero3')";
$resultado = mysqli_query($conn, $result);

?>