    <footer class="rodape wow animate__animated animate__fadeInUp">
        <div>
            <div class="container">
                <!-- BLOCO 01 -->
                <div class="logo">
                    <img src="img/logoBlack.svg" alt="Logo XYZ Code">
                    <h2>Coordenamos ideias <span>Codificamos soluções</span></h2>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/faceBlack.svg" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/instaBlack.svg" alt="Instagram">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/linkeBlack.svg" alt="LinkedIn">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="img/whatsBlack.svg" alt="WhatsApp">
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- BLOCO 02 -->
                <div class="menu">
                    <ul>
                        <li><a href="index.php" class="<?= ($pgAtual == 'index.php') ? 'ativo' : '' ?>">Home</a></li>
                        <li><a href="sobre.php" class="<?= ($pgAtual == 'sobre.php') ? 'ativo' : '' ?>">Sobre</a></li>
                        <li><a href="servico.php" class="<?= ($pgAtual == 'servico.php') ? 'ativo' : '' ?>">Serviço</a></li>
                        <li><a href="cliente.php" class="<?= ($pgAtual == 'cliente.php') ? 'ativo' : '' ?>">Cliente</a></li>
                        <li><a href="equipe.php" class="<?= ($pgAtual == 'equipe.php') ? 'ativo' : '' ?>">Equipe</a></li>
                        <li><a href="contato.php" class="<?= ($pgAtual == 'contato.php') ? 'ativo' : '' ?>">Contato</a></li>
                    </ul>
                </div>

                <!-- BLOCO 03 -->
                <div class="end">
                    <h2>CONTATE-NOS</h2>
                    <address>
                        Av. Marechal Tito, 1500 <br>
                        São Miguel Paulista - São Paulo - SP <br>
                        <a href="mailto:xyzcode@smpsistema.com.br">xyzcode@smpsistema.com.br</a>
                        <a href="tel:+5511999999999">(11) 99999-9999</a>
                    </address>
                </div>

                <!-- BLOCO 04 -->
                <div class="inscreva">
                    <h2>INSCREVA-SE</h2>
                    <p></p>
                    <form action="#" method="post">

                        <div>
                            <input type="email" name="email" placeholder="Informe seu email" required>
                            <input type="submit" value="">
                        </div>


                        <label>
                            <input type="checkbox" name="ckEmail" required>
                            <span>Aceita receber informações por e-mail?</span>
                        </label>

                    </form>
                </div>
            </div>
        </div>

        <div>
            <div class="container">
                <h2>Copyright ® 2025 - Criado e Desenvolvido por XYZ Code</h2>
                <h2>TIPI05 - Senac São Miguel Paulista</h2>
            </div>
        </div>
    </footer>