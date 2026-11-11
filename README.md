# XYZ Code

Site da agência XYZ Code, desenvolvido para as UCs de Front-End do TIPI 05 e 06.

## Tecnologias
PHP, HTML, CSS, jQuery, Slick, Lity, WOW.js/animate.css e PHPMailer (formulário de contato).

## Como rodar
1. Copie `config.example.php` para `config.php` e preencha os dados do SMTP.
2. Coloque o PHPMailer em `vendor/phpmailer/` (`Exception.php`, `PHPMailer.php`, `SMTP.php`).
3. Sirva a pasta com PHP: `php -S localhost:8000`.

> `config.php` e `vendor/` não são versionados.
