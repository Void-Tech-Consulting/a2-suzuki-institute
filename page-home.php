<?php /* Template Name: home */ ?>
<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="home-jumbotron-content">
  <span class="secondary-header-text shadow-hard"><?php echo get_theme_mod($jumbotron_headline) ?></span>
  <p class="shadow-hard"><?php echo get_theme_mod($jumbotron_subheading) ?></p>
  <div class="vertical-spacer"></div>
  <a href="<?php get_bloginfo('url'); ?>/contact">
    <button>Contact</button>
  </a>
  <div class="vertical-spacer"></div>
  <div class="vertical-spacer"></div>
</div>

<div class="page-container">
  <div class="page-content-container">

    <!-- About -->
    <div class="page-section">
      <div class="page-section-side hide-on-tablet-width">
        <img class="image-fill" src="<?php echo wp_get_attachment_url(get_theme_mod($homepage_about_image)) ?>" />
      </div>
      <div class="page-section-side">
        <h2>About</h2>
        <p><?php echo get_theme_mod($homepage_about) ?></p>
        <div class="vertical-spacer"></div>
        <a href="<?php get_bloginfo('url'); ?>/teachers">
          <button class="btn-outline">Meet our teachers</button>
        </a>
      </div>
    </div>

    <!-- Instrument list -->
    <div class="page-section">
      <div class="instrument-list">
        <?php
        require 'inc/section_vars.php';
        $data = get_instrument_data($instrument_repeater);
        if (!empty($data)) {
          foreach ($data as $k => $f) {
        ?>
            <p>
              <?php echo $f['instrument'] ?>
            </p>
          <?php } ?>
        <?php } ?>
      </div>
    </div>

    <!-- Videos preview -->
    <div class="page-section">
      <div class="page-section-side">
        <h2><?php echo get_theme_mod($homepage_videos_headline) ?></h2>
        <p><?php echo get_theme_mod($homepage_videos_description) ?></p>
        <div class="vertical-spacer"></div>
        <a href="<?php get_bloginfo('url'); ?>/videos">
          <button class="btn-outline">See all videos</button>
        </a>
      </div>
      <div class="page-section-side">
        <iframe class="embedded-video" src="<?php echo get_theme_mod($homepage_videos_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
      </div>
    </div>

    <!-- Photo gallery -->
    <?php
    require 'inc/section_vars.php';
    // get_example_data is in /inc/template_functions.php
    $data  = get_photogallery_data($photogallery_repeater);
    if (!empty($data)) {
    ?>
      <div class="page-section vertical-stack">
        <h2>
          Photo Gallery
        </h2>
        <div class="photo-gallery-container">
          <?php foreach ($data as $k => $f) {
            $media = '<img src="' . esc_url(get_media_url($f['image'])) . '" alt="' . $image_alt . '">';
          ?>
            <?php echo $media ?>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

    <!-- Testimonial -->
    <?php
    require 'inc/section_vars.php';
    // get_example_data is in /inc/template_functions.php
    $data  = get_testimonials_data($testimonials_repeater);
    if (!empty($data)) {
    ?>
      <div class="page-section vertical-stack">
        <h2>
          Testimonials
        </h2>
        <div class="testimonials-container">
          <?php foreach ($data as $k => $f) {
          ?>
            <div class="testimonial-container">
              <img class="quote" src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="Quote">
              <p class="testimonial-text">
                "
                <?php echo $f['text_content'] ?>
                "
              </p>
              <p class="testimonial-parent">
                - <?php echo $f['person_name'] ?>
              </p>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

    <?php get_footer(); ?>