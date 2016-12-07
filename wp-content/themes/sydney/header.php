<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic"
        rel="stylesheet">
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
        <?php if (get_theme_mod('site_favicon')) : ?>
            <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>"/>
        <?php endif; ?>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="overlay-img">
    <div class="align-text-raisky">
        <div class="svg-image">
<!--        <div class="svg-image" style="width: 168px; height: 59px;"></div>-->
            <object class="svg-image-large" type="image/svg+xml" data="/wp-content/themes/sydney/img/Untitled-3.svg"></object>
            <object class="svg-image-small" type="image/svg+xml" data="/wp-content/themes/sydney/img/untitled-320.svg"></object>
    </div>
        <div class="raisky-title">
            <p class="raisky-title-1">Life is about moments</p>
            <p class="raisky-title-2">coming soon...</p>
        </div>

        <div class="raisky-number-and-email">
            <p class="raisky-number">+38 067 0000111</p>
            <p class="raisky-email">res@raisky.com.ua</p>
        </div>
        <object class="svg-image-key" type="image/svg+xml" style="width: 15px; height: 46px;"></object>
    </div>
</div>
</body>



