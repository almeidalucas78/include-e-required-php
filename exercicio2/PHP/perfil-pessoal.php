<!doctype html>
<html lang="pt-br">

<head>
    <title>Lucas Bolado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="imagem/png" href="../img/icone.png" />
    <link href="../CSS/perfil.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- MENU PAGE -->
    <?php require "menu.php"; ?>
    <!-- END-MEU -->

    <!-- CONTEUDO -->

    <div class="container">

            <section id="content">

                <article class="area1">

                    <img class=" rounded-circle foto-apresentacao" src="../img/apresentacao1.jpeg">

                </article>

                <article class="area2">

                    <?php echo readfile("../txt/contato.txt"); ?>

                </article>
                <article class="area3">

                    <?php echo readfile("../txt/sobre.txt"); ?>

                </article>

            </section>


    </div>











    <!-- END-CONTEUDO -->









    <!--FOTTER PAGE-->
    <?php require "footer.php"; ?>
    <!-- END-FOOTER -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   

</body>

</html>