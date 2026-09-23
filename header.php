<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <nav class="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">IDB <span>Formation</span></a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>">Accueil</a></li>
                <li><a href="<?php echo esc_url( home_url( '/qui-sommes-nous' ) ); ?>" class="<?php echo is_page('qui-sommes-nous') ? 'active' : ''; ?>">Qui sommes-nous ?</a></li>
                <li><a href="<?php echo esc_url( home_url( '/cgv' ) ); ?>" class="<?php echo is_page('cgv') ? 'active' : ''; ?>">CGV</a></li>
                <li><a href="<?php echo esc_url( home_url( '/mentions-legales' ) ); ?>" class="<?php echo is_page('mentions-legales') ? 'active' : ''; ?>">Mentions légales</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary-outline <?php echo is_page('contact') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </div>
    </nav>
