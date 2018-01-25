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
  while( have_posts() ) : the_post(); ?>

    <div class="post-container">
      <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-info">
          <span class="post-info__date"><?php the_time('F jS, Y'); ?></span>
          <span class="post-info__separator"> | </span>
          <span class="post-info__time"><?php the_time('h:i'); ?></span>
          <span class="post-info__separator"> | by </span>

          <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
            <span class="post-info__author"><?php the_author(); ?></span>
          </a>
          <span class="post-info__separator"> | posted in </span>
          <span class="post-info__categories"><?php
            $categories = get_the_category();
            $separator  = ", ";
            $output     = "";

            if ($categories) {
              foreach ($categories as $category) {
                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
              }
            }

            echo trim($output, $separator);

          ?></span>

        </p>
        <?php the_excerpt(); ?>
      </article>
    </div>

  <?php endwhile;
  else :
    echo '<p>No content found</p>';
  endif;
?>

</div>

<?php
get_footer();

?>
