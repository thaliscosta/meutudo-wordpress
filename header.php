<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="language" content="portuguese, BR, PT">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
    <title>meutudo. | Baixe o Aplicativo</title>
    <meta name="description" content="Crédito justo do seu jeito para você ter dinheiro mais barato na hora que precisar. Melhore a sua vida com empréstimo, antecipação do FGTS e muito mais." />
    <meta name="keywords" content="meutudo., meutudo. consignado, meutudo. online" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= get_file('assets/images/favicon.ico'); ?>" />
    <?php wp_head(); ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= get_file('assets/css/style.css'); ?>" />
</head>

<body <?php body_class(); ?>>
    <div class="box-site">

        <header class="header">
            <div class="container">
                <div class="top-site">
                    <a href="<?= site_url('/'); ?>" class="logo">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.webp" alt="Meu Tudo" />
                    </a>
                    <nav>
                        <ul>
                            <li><a href="">Quem somos</a></li>
                            <li><a href="">Seu crédito</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Carreiras</a></li>
                            <li><a href="">Ajuda</a></li>
                            <li><a href="" class="login">Entrar</a></li>
                        </ul>
                    </nav>
                    <button class="toggle-menu" js-toggle-menu>
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </button>
                </div>
            </div>
        </header>