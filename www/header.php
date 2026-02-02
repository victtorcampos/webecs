<?php require_once("dados.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php $json = (isset($url_json)) ? get_materias($url_json) : NULL; ?>
    <?php $json_ler = (isset($url_json_ler)) ? get_materias($url_json_ler) : NULL; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php $titulo_pagina = (isset($pagina_noticias) && !isset($max)) ? $json[0]->titulo : $titulo_pagina; ?>
    <?php $descricao_pagina = (isset($pagina_noticias) && !isset($max)) ? limitar_texto(strip_tags(html_entity_decode($json[0]->texto)), 300) : $descricao_pagina; ?>
    <title><?= $titulo_pagina; ?> - <?= $escritorio; ?></title>
    <link rel="shortcut icon" href="assets/imgs/favicon.png" type="image/x-icon">
    <style>
        <?= file_get_contents('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:300,400,700&display=swap'); ?><?= file_get_contents('assets/css/support.min.css'); ?><?= file_get_contents('assets/css/bootstrap-grid.min.css'); ?><?= file_get_contents('style.min.css'); ?>
    </style>
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $escritorio; ?>" />
    <meta property="og:image" content="assets/imgs/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $escritorio; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $escritorio; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />
</head>

<body>
    <?php require_once("cookie.php"); ?>

    <div class="banner">
        <div class="fotos" style="background-image: url('assets/imgs/banner01.jpg');" data-cycle-fx="tileBlind"></div>
    </div>

    <div class="topo <?= (isset($home)) ? "banner-height-100" : "" ?> d-flex flex-column justify-content-between">
        <div class="container my-3">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="logo">
                        <img src="assets/imgs/logo.png" alt="" width="100%" height="auto" class="my-1 mx-auto mx-lg-0">
                    </div>
                </div>
                <div class="col-lg-8">
                    <p class="text-align-center text-align-lg-right texto-light small mt-0">
                        <i class="fas fa-fw fa-map-marker-alt texto-cor2"></i> <?= $endereco ?> | <?= $bairro ?> | <?= $cidade ?> | <?= $cep ?><br>
                        <a href="mailto:<?= $email ?>" class="ml-2"><i class="fas fa-fw fa-envelope texto-cor2"></i> <?= $email ?></a>
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-end">
                        <button class="menu-responsivo d-md-none d-flex justify-content-center align-items-center">
                            <i class="fas fa-1x fa-bars mr-1"></i> Menu Principal
                        </button>
                        <div class="menu-responsivo-fundo"></div>
                        <ul class="menu d-md-flex">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="empresa.php">Empresa</a></li>
                            <li><a href="servicos.php">Serviços</a></li>
                            <li><a href="utilitarios-links.php">Link Úteis</a></li>
                            <li><a href="contato.php">Contato</a></li>
                            <li><a href="imposto-de-renda" target="_blank" class="btn btn-cor">IR <?= date('Y') ?></a></li>
                            <!-- <li><a href="https://mpmsistema.com.br/cliente" target="_blank" class="btn btn-cor">Área Restrita</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($home)) : ?>
            <div class="container slogan owl-carousel owl-theme texto-light text-align-center mb-3">
                <div>
                    <h2 class="h1 mb-1">Nosso compromisso é com o seu sucesso!</h2>
                    <h3 class="m-0 font-weight-300 text-transform-uppercase">Em uma época em que a confiança está em primeiro lugar!</h3>
                </div>
                <div>
                    <h2 class="h1 mb-1">Excelência em nossos serviços!</h2>
                    <h3 class="m-0 font-weight-300 text-transform-uppercase">Anos de história e bons serviços na região!</h3>
                </div>
            </div>
        <?php endif ?>
        <div class="background-cor">
            <div class="container texto-light py-2">
                <div class="row align-items-center">
                    <div class="col-md-6 text-align-center text-align-md-left">
                        <p class="m-0"><strong>Dúvidas? Esclareça conosco.<br>Segunda a Sexta das 7:30 às 11:30 E 13:00 às 17:30</strong></p>
                    </div>
                    <div class="col-md-6 text-align-center text-align-md-right">
                        <p class="h2 m-0"><i class="fas fa-phone fa-flip-horizontal"></i> | <i class="fab fa-whatsapp"></i><a href="<?= $whatsapp_link ?>"> <?= $whatsapp ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>