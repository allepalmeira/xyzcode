<!-- XYZ Code - Meu site -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - XYZ Code - Coordenamos ideias, codificamos soluções</title>

    <!-- Descrição do site (SEO e compartilhamento) -->
    <meta name="description"
        content="XYZCode é a agência/estúdio onde cada pixel e cada linha de código são posicionados com precisão, como pontos em um espaço 3D. Criamos soluções digitais completas — do front ao back — com a mesma exatidão de um sistema de coordenadas.">

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
        <!-- Inicio: Banner -->
        <section class="servicoTopo">
            <img src="img/servico-banner.png" alt="Serviços XYZ Code">
        </section>
        <!-- Fim: Banner -->

        <!-- Inicio: Area-->
        <?php require_once("conteudo/area.php"); ?>
        <!-- Fim: Area-->

        <!-- LISTA DE SERVIÇOS -->
        <section class="pg-servico">
            <div class="container">

                <div class="topo">
                    <h2>Serviços</h2>
                    <h3>O que a XYZ Code faz por você</h3>
                </div>

                <ul>
                    <li>
                        <a href="#">
                            <figure><img src="img/servicos/servico1.png" alt="Interfaces Front End modernas e responsivas"></figure>
                            <div class="lista-conteudo">
                                <h3>Desenvolvimento Front End</h3>
                                <p>Criamos interfaces rápidas, responsivas e acessíveis — do layout ao componente reusável.</p>
                                <span>Ver detalhes</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <figure><img src="img/servicos/servico9.png" alt="APIs e bancos de dados com segurança e performance"></figure>
                            <div class="lista-conteudo">
                                <h3>Desenvolvimento Back End</h3>
                                <p>APIs, integrações e bancos de dados com segurança, escalabilidade e arquitetura sólida.</p>
                                <span>Ver detalhes</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <figure><img src="img/servicos/servico4.png" alt="Aplicativos e PWAs para Android e iOS"></figure>
                            <div class="lista-conteudo">
                                <h3>Desenvolvimento Mobile</h3>
                                <p>Aplicativos nativos e PWAs que oferecem alta performance e excelente experiência de uso.</p>
                                <span>Ver detalhes</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <figure><img src="img/servicos/servico10.png" alt="SEO, conteúdo e mídia paga para resultados reais"></figure>
                            <div class="lista-conteudo">
                                <h3>Marketing Digital</h3>
                                <p>Estratégias de SEO, conteúdo e campanhas de mídia paga para atrair, engajar e converter.</p>
                                <span>Ver detalhes</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <figure><img src="img/servicos/servico11.png" alt="Gestão de banco de dados e infraestrutura de servidores"></figure>
                            <div class="lista-conteudo">
                                <h3>Banco de Dados</h3>
                                <p>Administração de servidores, backup e otimização de consultas para máxima disponibilidade.</p>
                                <span>Ver detalhes</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <figure><img src="img/servicos/servico12.png" alt="Criação de identidades visuais e branding"></figure>
                            <div class="lista-conteudo">
                                <h3>Design</h3>
                                <p>Construímos identidades visuais que refletem a essência e os valores da sua marca.</p>
                                <span>Ver detalhes</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <figure><img src="img/servicos/servico7.png" alt="Automação e integração de sistemas corporativos"></figure>
                            <div class="lista-conteudo">
                                <h3>Automação e Integração</h3>
                                <p>Conectamos plataformas e otimizamos processos para reduzir custos e aumentar produtividade.</p>
                                <span>Ver detalhes</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <figure><img src="img/servicos/servico8.png" alt="Monitoramento e suporte técnico especializado"></figure>
                            <div class="lista-conteudo">
                                <h3>Suporte e Monitoramento</h3>
                                <p>Suporte técnico contínuo e monitoramento de sistemas para garantir estabilidade e segurança.</p>
                                <span>Ver detalhes</span>
                            </div>
                        </a>
                    </li>
                </ul>



            </div>
        </section>



        <!-- Inicio ferramentas -->
        <?php require_once("conteudo/ferramentas.php"); ?>
        <!-- Fim ferramentas -->







        <!-- INICIO Vídeo -->
        <section class="video">
            <a href="https://www.youtube.com/watch?v=qHZgosHjlZc" data-lity>
                <img src="img/play.png" alt="Vídeo XYZ Code">
            </a>
        </section>
        <!-- FIM Vídeo -->



    </main>

    <?php require_once("conteudo/rodape.php"); ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/animacao.js"></script>

</body>

</html>