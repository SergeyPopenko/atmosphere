  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta name="copyright" content="(c)">
  <script>document.documentElement.classList.remove("no-js")</script>
  <script>this.Element&&function(e){e.matches=e.matches||e.matchesSelector||e.webkitMatchesSelector||e.msMatchesSelector||function(e){for(var t=this,c=(t.parentNode||t.document).querySelectorAll(e),o=-1;c[++o]&&c[o]!=t;);return!!c[o]}}(Element.prototype),this.Element&&function(e){e.closest=e.closest||function(e){for(var t=this;t.matches&&!t.matches(e);)t=t.parentNode;return t.matches?t:null}}(Element.prototype);</script>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, minimal-ui">
  <meta name="HandheldFriendly" content="True">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="application-name" content="&nbsp;">
  <meta name="msapplication-tooltip" content="">
  <meta name="msapplication-window" content="width=400;height=300">
  <meta name="msapplication-TileColor" content="#1a1a25"><!-- Цвет -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css?__inline=true" as="style">
  <!-- <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:700" as="font" crossorigin> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:700">
  <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicon.svg" color="#1a1a25"><!-- Цвет -->
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/manifest.json">
  <meta name="theme-color" content="#1a1a25" /><!-- Цвет -->
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-152x152.png">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-128x128.png" sizes="128x128">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-196x196.png" sizes="196x196">
  <meta name="msapplication-square70x70logo" content="/img/favicon/mstile-70x70.png">
  <meta name="msapplication-TileImage" content="/img/favicon/mstile-144x144.png">
  <meta name="msapplication-square150x150logo" content="/img/favicon/mstile-150x150.png">
  <meta name="msapplication-wide310x150logo" content="/img/favicon/mstile-310x150.png">
  <meta name="msapplication-square310x310logo" content="/img/favicon/mstile-310x310.png">
  <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
  <meta content="telephone=no" name="format-detection" />
  <meta name="application-name" content="Atmosphere-music">
  <meta name="apple-mobile-web-app-title" content="Atmosphere-music">
  <meta property="fb:app_id" content="Atmospheric music for all">
  <!-- <meta property="og:url" content="http://Atmosphere-music.com"> -->
  <meta property="og:image" content="/img/og/atmosphere-music.jpg">
  <meta itemprop="primaryImageOfPage" content="/img/og/atmosphere-music.jpg">
  <meta property="og:site_name" content="Atmosphere-music">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="Atmospheric music for all"><!-- Twitter account -->
  <meta name="twitter:title" property="og:title" content="<?php bloginfo('name'); wp_title(); ?>"><!-- Title из страницы -->
  <meta name="twitter:url" property="og:url" content="<?= get_page_link(); ?>">
  <meta name="twitter:description" property="og:description" content="<?php
      if ( is_front_page() or is_home() ) {
          echo 'Atmospheric music for all';
      } elseif ( is_single() or is_page() ) {
          echo get_post_meta($post->ID, "description", true);
      } ?>"><!-- Описание -->
  <meta name="twitter:image" property="og:image" content="/img/og/atmosphere-music.jpg">
  <link rel="image_src" href="<?php bloginfo('template_url'); ?>/img/og/atmosphere-music.jpg"><!-- Картинка -->
