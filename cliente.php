<!-- XYZ Code - Meu site -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Code - Coordenamos ideias, codificamos soluções</title>

    <!-- Descrição do site (SEO e compartilhamento) -->
    <meta name="description"
        content="Cliente - XYZCode é a agência/estúdio onde cada pixel e cada linha de código são posicionados com precisão, como pontos em um espaço 3D. Criamos soluções digitais completas — do front ao back — com a mesma exatidão de um sistema de coordenadas.">

    <!-- Palavras-chave  -->
    <meta name="keywords"
        content="agência, front-end, back-end, app, banco de dados, desenvolvimento de site, site barato, PWA">

    <!-- Autor do site -->
    <meta name="author" content="Equipe XYZ Code">

    <!-- Open Graph (Quando tiver um compartilhamento com Whats, Face, LinkedIn) -->
    <meta property="og:title" content="XYZ Code - Coordenamos ideias, codificamos soluções">
    <meta property="og:description"
        content="XYZCode é a agência/estúdio onde cada pixel e cada linha de código são posicionados com precisão, como pontos em um espaço 3D. Criamos soluções digitais completas — do front ao back — com a mesma exatidão de um sistema de coordenadas.">
    <meta property="og:image" content="https://">
    <meta property="og:type" content="website">

    <!-- Icon favicon e app -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
    <link rel="manifest" href="img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#00c2ff">
    <meta name="msapplication-TileImage" content="img/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#00c2ff">

    <link rel="stylesheet" href="css/reset.css">

    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />

    <!-- LITY -->
    <link rel="stylesheet" href="css/lity.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>

    <!-- Inicio: Cabeçalho -->
    <?php require_once("conteudo/topo.php"); ?>
    <!-- FIM: Cabeçalho -->

    <main>
        <!-- Inicio: Banner Cliente -->
        <section class="clienteTopo">
            <img src="img/cliente-banner.png" alt="Case de trabalhos realizados">
        </section>
        <!-- Fim: Banner Cliente -->

        <!-- Inicio: Area-->
        <?php require_once("conteudo/area.php"); ?>
        <!-- Fim: Area-->

        <!-- Inicio Cliente -->
        <section class="cliente">
            <div class="container">
                
                <div class="cliente-item">
                    <img src="img/clientes/cliente1.png" alt="Portfólio Cliente">
                    <a href="#">
                        <div class="conteudo">
                            <span>Nome do Cliente</span>
                            <h4>Trabalho Realizado</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>

                <div class="cliente-item">
                    <img src="img/clientes/cliente2.png" alt="Portfólio Cliente">
                    <a href="#">
                        <div class="conteudo">
                            <span>Nome do Cliente</span>
                            <h4>Trabalho Realizado</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>

                <div class="cliente-item">
                    <img src="img/clientes/cliente3.png" alt="Portfólio Cliente">
                    <a href="#">
                        <div class="conteudo">
                            <span>Nome do Cliente</span>
                            <h4>Trabalho Realizado</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>

                <div class="cliente-item">
                    <img src="img/clientes/cliente4.png" alt="Portfólio Cliente">
                    <a href="#">
                        <div class="conteudo">
                            <span>Nome do Cliente</span>
                            <h4>Trabalho Realizado</h4>
                        </div>
                    </a>
                </div>

            </div>
        </section>
        <!-- Fim Cliente -->


        <!-- INICIO PQ nos Escolher -->
        <?php require_once("conteudo/pq-escolher.php"); ?>
        <!-- FIM PQ nos Escolher -->


        <!-- Inicio Depoimento -->
        <?php require_once("conteudo/depo.php"); ?>
        <!-- Fim Depoimento -->

    </main>

    <?php require_once("conteudo/rodape.php"); ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/animacao.js"></script>

</body>

</html>