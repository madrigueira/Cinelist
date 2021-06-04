<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <script src="JQuery.js"></script>
    <script src="script.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Cadastro | CineList</title>
</head>
<body>
    <div id="bg">

    <!-- Header -->
    <div class="header">
            <div class="grid-header">
                <img src="logo.png" class="logo">
                <div><p class="title-cadastro">Cadastro de Filmes</p></div>
                <div class="div-cadastro">
                <a href="index.php"><button><img src="plus.png" class="x" width="92%"></button></a>
                </div>

            </div>
    </div>

    <!-- Corpo -->   
    <div class="body-todos">
    <iframe name="fica" id="fica" style="display: none;"></iframe>
        <form method="post" action="bd_up.php" target="fica">
            <div class="card-cadastro">
                <div>
                    <div class="row">
                        <div class="input-field col s10" style="margin-left:8.2%; margin-top:6%">
                            <input id="nome" style="color:#fff" name="nome" type="text">
                            <label for="nome">Nome</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s3" style="margin-left:8.2%; margin-top:1%">
                            <input id="nota" style="color:#fff" name="nota" step=".5" min=0 max=10 type="number">
                            <label for="nota">Nota</label>
                        </div>

                        <div class="input-field col s6" style="margin-left:8%; margin-top:1%">
                            <input id="poster" style="color:#fff" name="poster" type="text">
                            <label for="poster">Poster</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s3" style="margin-left:8.2%; margin-top:1%">
                                <input id="data" style="color:#fff" name="data" type="text">
                                <label for="data">Data</label>
                            </div>

                        <div class="input-field col s6" style="margin-left:8%; margin-top:1%">
                            <input id="backg" style="color:#fff; background-color: transparent" name="backg" type="text">
                            <label for="backg">Background</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s10" style="margin-left:8.2%; margin-top:1%">
                            <textarea id="sinopse" name="sinopse" class="materialize-textarea" style="color:#fff"></textarea>
                            <label for="sinopse">Sinopse</label>
                        </div>
                    </div>

                    <center><p class="title-genero">Gêneros</p></center>

                    <div class="row">
                        <div class="input-field col s3" style="margin-left:8.2%; margin-top:3%">
                            <input id="genero1" style="color:#fff" name="genero1" type="text">
                            <label for="genero1">Gênero 1</label>
                        </div>

                        <div class="input-field col s3" style="margin-left:4%; margin-top:3%">
                            <input id="genero2" style="color:#fff" name="genero2" type="text">
                            <label for="genero2">Gênero 2</label>
                        </div>

                        <div class="input-field col s3" style="margin-left:4%; margin-top:3%">
                            <input id="genero3" style="color:#fff" name="genero3" type="text">
                            <label for="genero3">Gênero 3</label>
                        </div>
                    </div>

                    <center>
                        <label>
                            <input type="checkbox" id="assistido" name="assistido" Onchange="habilitar()" value="true" checked="checked" class="filled-in">
                            <span>Assistido</span>
                        </label>
                        <label style="margin-left:12%">
                            <input type="checkbox" id="favorito" name="favorito" value="true" class="filled-in">
                            <span>Adicionar aos Favoritos</span>
                        </label>
                    </center>

                    <center>
                        <button type="submit" class="btn-submit" onclick="alert('Filme Cadastrado com Sucesso!'); ">CONFIRMAR</button>
                    </center>
                </div>
            </div>
        </form>
    </div>
<br>
</div>
</body>
</html>