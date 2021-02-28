<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name')?></title>
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <?php wp_head(); ?>
</head>
<?php require get_template_directory() . '/inc/section_vars.php'; ?>

<body <?php body_class(); ?>>
  <!-- Example navbar -->
  <div class="header-container">

    <!-- background image -->
    <div class="header-background">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/jumbotron-background.png" />
    </div>

    <!-- Contact Info / Alert message -->
    <div class="header-banner">
      <span class="text-thin-main">
        <pre><?php echo get_theme_mod($header_banner_phonenumber) ?>   <?php echo get_theme_mod($header_banner_email) ?></pre>
      </span>
      <span class="text-thin-main">
      <?php echo get_theme_mod($header_banner_message) ?>
      </span>
    </div>

    <!-- Title / Nav -->
    
    <div class="header-main">
      <a class="header-main-left" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
      
      <nav class="site-nav">
        <?php
        $args = array(
          "theme_location" => "primary",
          "container" => "ul",
          "menu_class" => "nav-links"
        );
        wp_nav_menu($args);
        ?>
      </nav>
    </div>
  </div>