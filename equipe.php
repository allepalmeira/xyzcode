<!-- XYZ Code - Meu site -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Code - Coordenamos ideias, codificamos soluções</title>

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
        <?php require_once("conteudo/banner.php"); ?>
        <!-- Fim: Banner -->

        <!-- Inicio: Area-->
        <?php require_once("conteudo/area.php"); ?>
        <!-- Fim: Area-->

        <!-- Inicio Sobre-->
        <?php require_once("conteudo/sobre.php"); ?>
        <!-- Fim Sobre-->

        <!-- Inicio ferramentas -->
        <?php require_once("conteudo/ferramentas.php"); ?>
        <!-- Fim ferramentas -->

        <!-- Inicio Serviços -->
        <section class="servico">
            <div class="container">
                <div>
                    <h2>SERVIÇOS</h2>
                    <h3>Fornecemos os melhores serviços</h3>
                </div>
                <div class="listaServico">
                    <div class="painelServico">

                        <article id="painel-front">
                            <h4>Desenvolvimento Front End</h4>
                            <p>No Front End, transformamos o design em interfaces funcionais, modernas e totalmente
                                responsivas. Nosso trabalho é garantir que cada detalhe visual seja fiel à identidade da
                                marca, oferecendo uma experiência agradável e intuitiva para o usuário. Desenvolvemos
                                layouts que se adaptam a qualquer dispositivo, seja computador, tablet ou smartphone,
                                assegurando praticidade no acesso e consistência em todas as telas.</p>
                            <a href="#">Leia mais</a>
                        </article>

                        <article class="oculto" id="painel-back">
                            <h4>Desenvolvimento Back End</h4>
                            <p>O Back End é o coração de qualquer sistema, e na XYZ Code tratamos essa parte com a
                                máxima atenção. Criamos estruturas sólidas que dão suporte ao funcionamento de sites e
                                sistemas, garantindo segurança, desempenho e escalabilidade. Trabalhamos com bancos de
                                dados bem organizados, integrações eficientes e lógica de programação otimizada para que
                                tudo funcione de forma ágil e estável. Nosso objetivo é que o usuário final tenha uma
                                experiência fluida, sem perceber a complexidade por trás das soluções que desenvolvemos.
                            </p>
                            <a href="#">Leia mais</a>
                        </article>

                        <article class="oculto" id="painel-mobile">
                            <h4>Desenvolvimento Mobile</h4>
                            <p>Vivemos em um mundo cada vez mais conectado pelos smartphones, e é por isso que o
                                desenvolvimento mobile é um dos pilares da XYZ Code. Desenvolvemos aplicativos para
                                Android e iOS que unem praticidade, design moderno e desempenho de alto nível. Nosso
                                foco é criar soluções que aproximem empresas de seus clientes, tornando os serviços
                                acessíveis na palma da mão. Seja para otimizar processos internos ou para ampliar a
                                presença digital da marca, os aplicativos desenvolvidos por nossa equipe são projetados
                                para agregar valor real ao dia a dia dos usuários.</p>
                            <a href="#">Leia mais</a>
                        </article>

                        <article class="oculto" id="painel-marketing">
                            <h4>Marketing Digital</h4>
                            <p>No universo digital, não basta apenas estar presente: é preciso ser visto e lembrado. Por
                                isso, nossas estratégias de Marketing Digital vão além da criação de campanhas.
                                Trabalhamos com SEO, redes sociais, anúncios pagos e produção de conteúdo relevante para
                                atrair, engajar e converter clientes. Cada ação é planejada com base no perfil e nos
                                objetivos de cada negócio, garantindo que a marca ganhe destaque no mercado online.
                                Acreditamos que marketing eficaz é aquele que gera resultados reais, e nossa missão é
                                construir a ponte entre empresas e seus clientes por meio de estratégias inteligentes e
                                personalizadas.</p>
                            <a href="#">Leia mais</a>
                        </article>

                    </div>

                    <div class="tabPainel">
                        <a id="tab-front" class="tabAtivo">Desenvolvimento Front End</a>
                        <a id="tab-back">Desenvolvimento Back End</a>
                        <a id="tab-mobile">Desenvolvimento Mobile</a>
                        <a id="tab-marketing">Marketing Digital</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim  Serviços -->

        <!-- Inicio Nossa Equipe -->
        <section class="equipe">
            <div class="container">
                <h2>NOSSA EQUIPE</h2>
                <div>
                    <div>
                        <img src="img/Claudio.png" alt="Nossa equipe - Claudio">

                        <ul>
                            <li><a href="#"><img src="img/instaBlack.svg" alt="Logo Instagram" sizes="50px"></a></li>
                            <li><a href="#"><img src="img/linkeBlack.svg" alt="Logo LinkedIn" sizes="50px"></a></li>
                            <li><a href="#"><img src="img/whatsBlack.svg" alt="Logo WhatsApp" sizes="50px"></a></li>
                        </ul>
                        <h3>Cláudio</h3>
                        <h4>Desenvolvedor Front-End</h4>
                    </div>
                    <div>
                        <img src="img/Pedro.png" alt="Nossa equipe - Pedro">
                        <ul>
                            <li><a href="#"><img src="img/instaBlack.svg" alt="Logo Instagram" sizes="50px"></a></li>
                            <li><a href="#"><img src="img/linkeBlack.svg" alt="Logo LinkedIn" sizes="50px"></a></li>
                            <li><a href="#"><img src="img/whatsBlack.svg" alt="Logo WhatsApp" sizes="50px"></a></li>
                        </ul>
                        <h3>Pedro</h3>
                        <h4>Desenvolvedor Full-Stack</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM Nossa Equipe -->

        <!-- INICIO PQ nos Escolher -->
        <?php require_once("conteudo/pq-escolher.php"); ?>
        <!-- FIM PQ nos Escolher -->

        <!-- INICIO Vídeo -->
        <section class="video">
            <a href="https://www.youtube.com/watch?v=qHZgosHjlZc" data-lity>
                <img src="img/play.png" alt="Vídeo XYZ Code">
            </a>
        </section>
        <!-- FIM Vídeo -->

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