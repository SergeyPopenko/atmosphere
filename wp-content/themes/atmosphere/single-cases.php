<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>Landing site</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php get_template_part('includes/head/head'); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/cases/landing.css" as="style">
    <?php wp_head(); ?>
</head>
<body>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

    <?php include get_template_directory() . '/img/svg/symbols.svg'; ?>
    <?php get_template_part('includes/cases/landing/inline_styles/inline_styles'); ?>
    <?php get_template_part('includes/header/header'); ?>

        <main class="c-landing">
            <?php $result_do_you_need_gallery = get_post_meta($post->ID, 'wpcf-do-you-need-gallery', true); ?>

            <?php get_template_part('includes/cases/landing/promo/promo'); ?>
            <?php get_template_part('includes/cases/landing/commencement/commencement'); ?>
            <?php get_template_part('includes/cases/landing/analitics/analitics'); ?>
            <?php get_template_part('includes/cases/landing/idea/idea'); ?>
            <?php get_template_part('includes/cases/landing/typography/typography'); ?>
            <?php get_template_part('includes/cases/landing/prototype/prototype'); ?>
            <?php get_template_part('includes/cases/landing/technology/technology'); ?>
            <?php get_template_part('includes/cases/landing/advantages/advantages'); ?>
            <?php ($result_do_you_need_gallery) ? get_template_part('includes/cases/landing/result/result') : get_template_part('includes/cases/landing/result-type1/result-type1'); ?>
            <?php get_template_part('includes/cases/landing/team/team'); ?>
            <?php get_template_part('includes/cases/landing/review/review'); ?>
        </main>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('includes/page-links/page-links'); ?>
<?php get_template_part('includes/ga/ga'); ?>
<?php get_template_part('includes/ym/ym'); ?>
<?php get_footer(); ?>
