<footer class="site-footer">

  <div class="container footer-widgets">
    <div class="row">
      <div class="col-md-3">
        <?php dynamic_sidebar('footer1'); ?>
      </div>
      <div class="col-md-3">
        <?php dynamic_sidebar('footer2'); ?>
      </div>
      <div class="col-md-3">
        <?php dynamic_sidebar('footer3'); ?>
      </div>
      <div class="col-md-3">
        <?php dynamic_sidebar('footer4'); ?>
      </div>
    </div>
  </div>


  <div class="container">
    <hr/>
    <div class="row">

      <div class="col-md-6">
        <nav class="site-nav">
          <?php wp_nav_menu(); ?>
        </nav>
      </div>

      <div class="col-md-6">
        <p class="site-footer__credit"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
      </div>

    </div>
  </div>
</footer>
<?php
  $args = array(
    'theme_location' => 'footer'
  );
?>
<?php wp_footer( $args ); ?>
</body>
</html>
