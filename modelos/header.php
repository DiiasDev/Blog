<?php
    include_once('helpers/url.php');
    include_once('dados/posts.php');
    include_once('dados/categories.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$BASE_URL ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https: //fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
    <img src="<?= $BASE_URL?>/image/logo.png" alt="Blog codar">
    </a>
    <nav>
        <ul id="navbar">
            <li><a href="<?= $BASE_URL?>" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Categorias</a></li>
            <li><a href="#" class="nav-link">Sobre</a></li>
            <li><a href="<?= $BASE_URL?>/contato.php" class="nav-link">contato</a></li>
        </ul>
    </nav>
  </header>