<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>css/slick.css" />
    <title>Estudando MVC</title>
</head>
<body>

<header>
    <div class="container">
        <div class="logo"><a href="">LogoMarca</a></div>
        <nav class="desktop">
            <ul>
                <li><a href="home">Inicio</a></li>
                <li><a href="sobre">Sobre nós</a></li>
                <li><a class="scroll" href="home#servicos">Nossos serviços</a></li>
                <li><a href="contato">Contato</a></li>
            </ul>
        </nav><!--descktop-->

        <nav class="mobile">
            <div class="icon">
                <i class="fas fa-bars"></i>
            </div><!--icon-->
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Sobre nós</a></li>
                <li><a class="scroll" href="#servicos">Nossos serviços</a></li>
                <li><a href="">Contato</a></li>
            </ul>
        </nav><!--mobile-->

        <div class="clear"></div>
    </div><!--container-->
</header>
