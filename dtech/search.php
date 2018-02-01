<?php

get_header();

?>
<div class="container">

<?php
if( have_posts() ) : ?>

  <h2 class="archive-title"><span class="archive-title__bage">
    Search for: <?php the_search_query(); ?>
  </span></h2>

  <?php
  while( have_posts() ) : the_post();
    get_template_part('content');
  endwhile;
else :
  echo '<p>No content found</p>';

endif;
?>

</div>

<?php
get_footer();

?>
