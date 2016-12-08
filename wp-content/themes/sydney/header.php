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
    <link rel="icon" type="image/png" href="/wp-content/themes/sydney/img/png-icon/RAISKY_fav_icon.png" />
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
            <img style="width: 173px; height: 59px"  class="svg-image-large" src="/wp-content/themes/sydney/img/png-icon/RAISKY_logo.png">
<!--            <object class="svg-image-large" type="image/svg+xml" data="/wp-content/themes/sydney/img/Untitled-3.svg"></object>-->
            <img style="width: 223px; height: 102px" class="svg-image-small" src="/wp-content/themes/sydney/img/png-icon/RAISKY_logo2.png">
<!--            <object class="svg-image-small" type="image/svg+xml" data="/wp-content/themes/sydney/img/untitled-320.svg"></object>-->
    </div>
        <div class="raisky-title">
            <p class="raisky-title-1">Life is about moments</p>
            <p class="raisky-title-2">coming soon...</p>
        </div>

        <div class="raisky-number-and-email">
            <p class="raisky-number">+38 067 0000111</p>
            <p class="raisky-email">res@raisky.com.ua</p>
        </div>
        <img class="svg-image-key"  src="/wp-content/themes/sydney/img/png-icon/RAISKY_key_icon.png">
    </div>
</div>
</body>



