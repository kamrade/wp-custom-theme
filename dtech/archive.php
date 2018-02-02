<?php

get_header();

?>
<div class="container">

<?php
if( have_posts() ) :
  ?>

  <h2 class="archive-title"><span class="archive-title__bage"><?php
    if ( is_category() ) {
      single_cat_title();
    } elseif ( is_tag() ) {
      single_tag_title();
    } elseif ( is_author() ) {
      the_post();
      echo 'Author Archives: ' . get_the_author();
      rewind_posts();
    } elseif ( is_day() ) {
      echo 'Dayly archives: ' . get_the_date() ;
    } elseif ( is_month() ) {
      echo 'Monthly archives: ' . get_the_date('F Y') ;
    } elseif ( is_year() ) {
      echo 'Yearly archives: ' . get_the_date('Y') ;
    } else {
      echo 'Archive';
    }
  ?></span></h2>

  <?php
  while( have_posts() ) : the_post();
    get_template_part('content', get_post_format());
  endwhile;
  else :
    echo '<p>No content found</p>';
  endif;
  ?>

</div>

<?php
get_footer();
?>
