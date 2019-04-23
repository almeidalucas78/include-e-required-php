<!doctype html>
<html lang="pt-br">

<head>
    <title>Personagens GOD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../CSS/personagens.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- background rotation page -->
    <script type="text/javascript">
        // <![CDATA[
        var imageCount = 0;
        var currentImage = 0;
        var images = new Array();

        images[0] = '../IMG/bk5.jpg';
        images[1] = '../IMG/bk6.jpg';
        images[2] = '../IMG/bk7.jpg';
        images[3] = '../IMG/bk8.jpg';
        images[4] = '../IMG/bk9.jpg';

        var preLoadImages = new Array();
        for (var i = 0; i < images.length; i++) {
            if (images[i] == "")
                break;

            preLoadImages[i] = new Image();
            preLoadImages[i].src = images[i];
            imageCount++;
        }

        function startSlideShow() {
            if (document.body && imageCount > 0) {
                document.body.style.backgroundImage = "url(" + images[currentImage] + ")";
                document.body.style.backgroundAttachment = "fixed";
                document.body.style.backgroundRepeat = "no-repeat";
                document.body.style.backgroundPosition = "left top";

                currentImage = currentImage + 1;
                if (currentImage > (imageCount - 1)) {
                    currentImage = 0;
                }
                setTimeout('startSlideShow()', 3000);
            }
        }
        startSlideShow();
        // ]]>
    </script>
    <?php require "menu.php"; ?>

    <div class="container">
        <!-- Conteudo  -->
        <div class="row">
            <div class="col-md-12">
                <div class="titulo-page">
                    <p>GAME OF THRONES</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="area-conteudo">
                    <img class="tamanho-foto" src="../img/dany.jpeg">
                    <div class="titulo">
                        <h5 class="titulo-heroi">

                            <?php echo readfile("../txt/personagem1.txt"); ?>

                        </h5>
                    </div>
                    <div class="subtitulo-heroi">

                        <?php echo readfile("../txt/info-personagem1.txt"); ?>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="area-conteudo">
                    <img class="tamanho-foto" src="../img/snow.jpg">
                    <div class="titulo">
                        <h5 class="titulo-heroi">

                            <?php echo readfile("../txt/personagem2.txt"); ?>

                        </h5>
                    </div>
                    <div class="subtitulo-heroi">

                        <?php echo readfile("../txt/info-personagem2.txt"); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="area-conteudo">
                    <img class="tamanho-foto" src="../img/tyron.jpg">
                    <div class="titulo">
                        <h5 class="titulo-heroi">

                            <?php echo readfile("../txt/personagem3.txt"); ?>


                        </h5>
                    </div>
                    <div class="subtitulo-heroi">

                        <?php echo readfile("../txt/info-personagem3.txt"); ?>


                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="area-conteudo">
                    <img class="tamanho-foto" src="../img/cersei.jpg">
                    <div class="titulo">
                        <h5 class="titulo-heroi">

                            <?php echo readfile("../txt/personagem4.txt"); ?>

                        </h5>
                    </div>
                    <div class="subtitulo-heroi">

                        <?php echo readfile("../txt/info-personagem4.txt"); ?>

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