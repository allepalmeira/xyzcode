    <header class="topo"> <!-- 1920px - 100% -->
        <div class="container"> <!-- Container de 1500px -->

            <!-- LOGO -->
            <h1>XYZ Code - Coordenamos ideias, codificamos soluções</h1>

            
            <!-- MENU -->
            <?php
            // Pegar o nome da página atual via URL
            $pgAtual = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            if ($pgAtual === '' || $pgAtual === basename(dirname($_SERVER['SCRIPT_NAME']))) { $pgAtual = 'index.php'; }
            //echo($pgAtual);
            ?>
            <button class="abrir-menu"></button>
            <nav>
                <button class="fechar-menu"></button>
                <ul>
                    <li><a href="index.php" class="<?= ($pgAtual == 'index.php') ? 'ativo' : '' ?>">Home</a></li>
                    <li><a href="sobre.php" class="<?= ($pgAtual == 'sobre.php') ? 'ativo' : '' ?>">Sobre</a></li>
                    <li><a href="servico.php" class="<?= ($pgAtual == 'servico.php') ? 'ativo' : '' ?>">Serviço</a></li>
                    <li><a href="cliente.php" class="<?= ($pgAtual == 'cliente.php') ? 'ativo' : '' ?>">Cliente</a></li>
                    <li><a href="equipe.php" class="<?= ($pgAtual == 'equipe.php') ? 'ativo' : '' ?>">Equipe</a></li>
                    <li><a href="contato.php" class="<?= ($pgAtual == 'contato.php') ? 'ativo' : '' ?>">Contato</a></li>
                </ul>
            </nav>

            <!-- ul>li*4>a -->
            <ul class="redes">
                <li><a href="#"><img src="img/faceBlack.svg" alt="Logo Facebook" sizes="50px"></a></li>

                <li><a href="#"><img src="img/instaBlack.svg" alt="Logo Instagram" sizes="50px"></a></li>

                <li><a href="#"><img src="img/linkeBlack.svg" alt="Logo LinkedIn" sizes="50px"></a></li>

                <li><a href="#"><img src="img/whatsBlack.svg" alt="Logo WhatsApp" sizes="50px"></a></li>
            </ul>

        </div>
    </header>