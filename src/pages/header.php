<!DOCTYPE html>
<html lang="en" xmlns:og="http://ogp.me/ns#">
<head>
    <title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="description" content="<?php
        if ( is_front_page() or is_home() ) {
            echo 'We are an outsourcing company that provides outsource web support services and outsource web specialists. Also, we create data-driven solutions for big and small business using the tools of machine learning and data mining..';
        } elseif ( is_single() or is_page() ) {
            echo get_post_meta($post->ID, "description", true);
        } ?>">
	<meta name="keywords" content="<?php
        if ( is_front_page() or is_home() ) {
            echo 'Keywords here';
        } elseif ( is_single() or is_page() ) {
            echo get_post_meta($post->ID, "keywords", true);
        } ?>">
	<?php get_template_part('includes/head/head'); ?>
	<?php wp_head(); ?>
</head>
<body>
<?php include get_template_directory() . '/img/svg/symbols.svg'; ?>
<?php get_template_part('includes/header/header'); ?>