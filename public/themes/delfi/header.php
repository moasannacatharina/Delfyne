<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php $menuItems = wp_get_nav_menu_items("main-menu"); ?>

    <nav class="navbar">
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
        <a href="<?= home_url(); ?>">
            <img class="logo" src="../../uploads/2021/03/delfi-logo.png" />
        </a>
    </nav>

    <div class="container mt-5">
