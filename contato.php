<?php
$ok = 0;
$nome = '';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Escapa texto para exibir/enviar em HTML
function h($v)
{
    return htmlspecialchars(trim((string) $v), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $nome   = h($_POST['nome'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $fone   = h($_POST['telefone'] ?? '');
    $motivo = h($_POST['motivo'] ?? '');
    $mens   = nl2br(h($_POST['mensagem'] ?? ''));

    if ($nome === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $motivo === '' || trim($_POST['mensagem'] ?? '') === '') {
        $ok = 2;
    } else {
        try {
            $cfg = require __DIR__ . '/config.php';
            require 'vendor/phpmailer/Exception.php';
            require 'vendor/phpmailer/PHPMailer.php';
            require 'vendor/phpmailer/SMTP.php';

            $assunto = "E-mail do site XYZ Code";
            $mail = new PHPMailer(true);
            $mail->CharSet    = 'UTF-8';
            $mail->isSMTP();
            $mail->Host       = $cfg['smtp_host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $cfg['smtp_user'];
            $mail->Password   = $cfg['smtp_pass'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = $cfg['smtp_port'];

            $mail->setFrom($cfg['smtp_user'], $assunto);
            $mail->addAddress($cfg['mail_destino']);
            $mail->addReplyTo($email, strip_tags($nome));

            $emailH = h($email);
            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body    = "Nome: $nome <br>E-mail: $emailH <br>Telefone: $fone <br>Motivo: $motivo <br>Mensagem: $mens";
            $mail->AltBody = "Nome: " . strip_tags($nome) . "\nE-mail: $email\nTelefone: " . strip_tags($fone) . "\nMotivo: " . strip_tags($motivo) . "\nMensagem: " . strip_tags($mens);

            $mail->send();
            $ok = 1;
        } catch (\Throwable $e) {
            $ok = 2;
        }
    }
}
?>


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
        <!-- Inicio: MAPA -->
        <section class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.009894587044!2d-46.43347142867103!3d-23.496153099015086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1761654134043!5m2!1spt-BR!2sbr" width="100%" height="860" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!-- Fim: Banner -->

        <!-- Inicio: Area-->
        <?php require_once("conteudo/area.php"); ?>
        <!-- Fim: Area-->

        <!-- INICIO FORM DE CONTATO -->
        <section class="formContato wow animate__animated animate__fadeInUp">
            <div class="container">
                <div>
                    <h2>CONTATO</h2>
                    <h3>Dúvidas, Sugestões, Elogios ou Reclamações</h3>
                </div>
                <form action="contato.php" method="post">
                    <div class="form-esquerda">
                        <input type="text" name="nome" placeholder="Informe seu nome: " required>
                        <input type="email" name="email" placeholder="Informe seu e-Mail: " required>
                        <input type="tel" name="telefone" placeholder="Informe seu telefone: ">
                        <select name="motivo" required>
                            <option value="" disabled selected hidden>Selecione o serviço desejado</option>
                            <option value="websites">Desenvolvimento Web Sites</option>
                            <option value="sistemas">Desenvolvimento Sistemas Web</option>
                            <option value="mobile">Desenvolvimento Aplicativo Mobile</option>
                            <option value="marketing">Marketing Digital</option>
                        </select>

                        <h3>
                            <?php
                            if ($ok == 1) {
                                echo $nome . ", sua mensagem foi enviada com sucesso.";
                                //   Alle, sua mensagem foi enviada com sucesso.
                            } elseif ($ok == 2) {
                                echo $nome . ", não foi possível enviar sua mensagem. Tente mais tarde";
                            }
                            ?>
                        </h3>
                    </div>

                    <div class="form-direita">
                        <textarea name="mensagem" placeholder="Digite sua mensagem: " required></textarea>
                        <div class="botoes">
                            <button type="submit" class="enviar">ENVIAR</button>
                            <button type="reset" class="limpar">LIMPAR</button>
                        </div>
                    </div>
                </form>
            </div>

        </section>
        <!-- FIM FORM DE CONTATO -->

        <!-- Inicio ferramentas -->
        <?php require_once("conteudo/ferramentas.php"); ?>
        <!-- Fim ferramentas -->

        <!-- INICIO PQ nos Escolher -->
        <?php require_once("conteudo/pq-escolher.php"); ?>
        <!-- FIM PQ nos Escolher -->


    </main>

    <?php require_once("conteudo/rodape.php"); ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/animacao.js"></script>

</body>

</html>