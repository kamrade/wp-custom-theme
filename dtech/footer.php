<footer class="site-footer">
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
