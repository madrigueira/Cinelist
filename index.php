<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- CSS arquivos -->
    <link rel="stylesheet" href="./style.css">
    <title>CineList</title>
</head>

<body>
    <div id="bg">

        <!-- Header -->
        <div class="header">
            <div class="grid-header">
                <li id="home"><a><img src="logo.png" class="logo" onclick="habilitar_home()"></a></li>
                <nav class="menu">
                    <ul>
                        <li onclick="habilitar_assistido()" id="assistido"><a href="#">Assistidos</a></li>
                        <li onclick="habilitar_interesse()" id="interesse"><a href="#">Interesses</a></li>
                        <li onclick="habilitar_favorito()" id="favorito"><a href="#">Favoritos</a></li>
                    </ul>
                </nav>

                <div class="div-cadastro">
                    <a href="cadastro.php"><button><img src="plus.png" class="plus" width="92%"></button></a>
                </div>

            </div>
        </div>

        <!-- Corpo -->

        <!-- Body Home -->
        <div class="body-home" id="body-home">

            <!-- BANNER DO FILME -->
            <?php while ($filme = $con_home->fetch_array()) { ?>

                <div class="content-bg">
                    <img src="<?= $filme["backg"] ?>" class="fundo-bg">
                    <div class="grid-home-bg">
                        <div>
                            <p class="titulo-bg"><?= $filme["nome"] ?></p>
                            <p class="sinopse-bg"><?= $filme["sinopse"] ?></p>
                        </div>
                        <div class="content-poster-bg">
                            <img src="<?= $filme["poster"] ?>" class="poster-bg" width="100%">
                        </div>
                        <p class="genero-bg"><?= $filme["genero1"] ?>⠀⠀⠀<?= $filme["genero2"] ?>⠀⠀⠀<?= $filme["genero3"] ?></p>
                    </div>
                </div>
            <?php } ?>

            <!-- POSTERS: ÚLTIMOS ASSISTIDOS (NOVO) -->
            <div style="margin-bottom: 5%">
                <p class="title-home-poster">Últimos Assistidos ≫</p>
                <div class="grid-poster">
                    <?php while ($filme = $con_last_assistido->fetch_array()) { ?>
                        <div class="content-home">
                            <img src="<?= $filme["poster"] ?>" class="poster" width="100%">
                            <div class="content-nota fadeIn-nota">
                                <div class="box-nota">
                                    <p>☆ <?= $filme["nota"] ?></p>
                                </div>
                                <div class="content-data fadeIn-data">
                                    <div class="box-data">
                                        <p><?= $filme["data"] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- POSTERS: SÓ NOTA 10 -->
            <div style="margin-bottom: 5%">
                <p class="title-home-poster">Mais Bem Avaliados ≫</p>
                <div class="grid-poster">
                    <?php while ($filme = $con_nota10->fetch_array()) { ?>
                        <div class="content-home">
                            <img src="<?= $filme["poster"] ?>" class="poster" width="100%">
                            <div class="content-nota fadeIn-nota">
                                <div class="box-nota">
                                    <p>☆ <?= $filme["nota"] ?></p>
                                </div>
                                <div class="content-data fadeIn-data">
                                    <div class="box-data">
                                        <p><?= $filme["data"] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- POSTERS: DRAMINHA AIAI QUE TRISTE KKKKK -->
            <div style="margin-bottom: 5%">
                <p class="title-home-poster">Filmes de Romance ≫</p>
                <div class="grid-poster">
                    <?php while ($filme = $con_genero_romance->fetch_array()) { ?>
                        <div class="content-home">
                            <img src="<?= $filme["poster"] ?>" class="poster" width="100%">
                            <div class="content-nota fadeIn-nota">
                                <div class="box-nota">
                                    <p>☆ <?= $filme["nota"] ?></p>
                                </div>
                                <div class="content-data fadeIn-data">
                                    <div class="box-data">
                                        <p><?= $filme["data"] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- POSTERS: AÇÃO AI AI QUE PORRADÃO KKKK -->
            <div style="margin-bottom: 5%">
                <p class="title-home-poster">Filmes de Quadrinhos ≫</p>
                <div class="grid-poster">
                    <?php while ($filme = $con_genero_hqs->fetch_array()) { ?>
                        <div class="content-home">
                            <img src="<?= $filme["poster"] ?>" class="poster" width="100%">
                            <div class="content-nota fadeIn-nota">
                                <div class="box-nota">
                                    <p>☆ <?= $filme["nota"] ?></p>
                                </div>
                                <div class="content-data fadeIn-data">
                                    <div class="box-data">
                                        <p><?= $filme["data"] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="footer">
                <p>© 2021 Cinelist</p>
                <h1>Site feito por Matheus Negrini</h1>
            </div>
        </div>

        <!-- Body com os Filmes Assistidos -->
        <div class="body" id="body-assistido">
            <div class="grid-poster">

                <?php while ($filme = $con_assistido->fetch_array()) { ?>
                    <div class="content">
                        <img src="<?= $filme["poster"] ?>" class="poster" width="100%">
                        <div class="content-nota fadeIn-nota">
                            <div class="box-nota">
                                <p>☆ <?= $filme["nota"] ?></p>
                            </div>
                            <div class="content-data fadeIn-data">
                                <div class="box-data">
                                    <p><?= $filme["data"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br><br><br>
            <div class="footer">
                <p>© 2021 Cinelist</p>
                <h1>Site feito por Matheus Negrini</h1>
            </div>
        </div>

        <!-- Body com os Filmes que Quero Assistir -->
        <div class="body" id="body-interesse">
            <div class="grid-poster">

                <?php while ($filme = $con_interesse->fetch_array()) { ?>
                    <div class="content">
                        <img src="<?= $filme["poster"] ?>" class="poster" width="100%">
                        <div class="content-nota fadeIn-nota">
                            <div class="content-data fadeIn-data">
                                <div class="box-data">
                                    <p><?= $filme["data"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br><br><br>
            <div class="footer">
                <p>© 2021 Cinelist</p>
                <h1>Site feito por Matheus Negrini</h1>
            </div>
        </div>

        <!-- Body com os Filmes Favoritados -->
        <div class="body" id="body-favorito">
            <div class="grid-poster">

                <?php while ($filme = $con_favorito->fetch_array()) { ?>
                    <div class="content">
                        <img src="<?= $filme["poster"] ?>" class="poster" width="100%">
                        <div class="content-nota fadeIn-nota">
                            <div class="box-nota">
                                <p>☆ <?= $filme["nota"] ?></p>
                            </div>
                            <div class="content-data fadeIn-data">
                                <div class="box-data">
                                    <p><?= $filme["data"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br><br><br>
            <div class="footer">
                <p>© 2021 Cinelist</p>
                <h1>Site feito por Matheus Negrini</h1>
            </div>
        </div>

    </div>

    <!-- JS arquivos -->
    <script src="./JQuery.js"></script>
    <script src="./script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>