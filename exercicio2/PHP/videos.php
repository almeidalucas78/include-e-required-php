    <!doctype html>
    <html lang="pt-br">

    <head>
        <title>Videos Favoritos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../CSS/videos.css" type="text/css" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>

        <?php require "menu.php"; ?>

        <div class="container">
            <!-- Conteudo  -->
            <div class="row">
                <div class="titulo-page">
                    <p>VIDEOS FAVORITOS</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="area-conteudo">
                        <object width="450" height="250">
                            <param name="movie" value="https://www.youtube.com/embed/TV4Vzda09Ck" />
                            <embed src="https://www.youtube.com/embed/TV4Vzda09Ck" type="application/x-shockwave-flash" width="425" height="350" />
                        </object>
                        <div class="titulo">
                            <h5 class="titulo-heroi">

                                <?php echo readfile("../txt/video1"); ?>

                            </h5>
                        </div>
                        <div class="subtitulo-heroi">

                            <?php echo readfile("../txt/video1legenda"); ?>


                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="area-conteudo">
                        <object width="450" height="350">
                            <param name="movie" value="https://www.youtube.com/embed/rlR4PJn8b8I" />
                            <embed src="https://www.youtube.com/embed/rlR4PJn8b8I" type="application/x-shockwave-flash" width="425" height="350" />
                        </object>
                        <div class="titulo">
                            <h5 class="titulo-heroi">

                                <?php echo readfile("../txt/video2"); ?>


                            </h5>
                        </div>
                        <div class="subtitulo-heroi">

                            <?php echo readfile("../txt/video2legenda"); ?>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="area-conteudo">
                        <object width="450" height="350">
                            <param name="movie" value="https://www.youtube.com/embed/pOpJ124j0gQ" />
                            <embed src="https://www.youtube.com/embed/pOpJ124j0gQ" type="application/x-shockwave-flash" width="425" height="350" />
                        </object>
                        <div class="titulo">
                            <h5 class="titulo-heroi">

                                <?php echo readfile("../txt/video3"); ?>

                            </h5>
                        </div>
                        <div class="subtitulo-heroi">

                            <?php echo readfile("../txt/video3legenda"); ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="area-conteudo">
                        <object width="450" height="350">
                            <param name="movie" value="https://www.youtube.com/embed/uHgfFv4fvLA" />
                            <embed src="https://www.youtube.com/embed/uHgfFv4fvLA" type="application/x-shockwave-flash" width="425" height="350" />
                        </object>
                        <div class="titulo">
                            <h5 class="titulo-heroi">

                                <?php echo readfile("../txt/video4"); ?>


                            </h5>
                        </div>
                        <div class="subtitulo-heroi">

                            <?php echo readfile("../txt/video4legenda"); ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php require "footer.php"; ?>

<!-- end conteudo -->


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

    </body>

    </html>