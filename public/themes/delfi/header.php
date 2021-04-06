<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php $menuItems = wp_get_nav_menu_items("main-menu"); ?>

    <nav class="navbar">
        <a href="<?= home_url(); ?>" class="home-link">
            <img class="logo" src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" />
            <h1><?php bloginfo('name'); ?></h1>
        </a>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php $currentPageId = $wp_query->queried_object_id;
                    foreach ($menuItems as $item) : ?>
                        <a class="nav-link<?= $item->object_id == $currentPageId ? ' active' : '' ?>" href="<?= $item->url; ?>">
                            <?= $item->title; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <button class="menu-btn">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/hamburgare.svg" alt="menu button" class="hamburger-menu-img" />
        </button>
        <div class="menu">
            <button class="close-btn">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/close-btn.svg" alt="close menu button" class="close-btn-img" />
            </button>
            <a href="<?= home_url(); ?>">
                <img class="logo" src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" />
            </a>
            <?php foreach ($menuItems as $item) : ?>
                <a href="<?= $item->url; ?>">
                    <?= $item->title ?>
                </a>
            <?php endforeach ?>
        </div>
    </nav>
    <div class="container mt-5">
