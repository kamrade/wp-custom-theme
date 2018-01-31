<?php

get_header();

?>
<div class="container">

<?php
if( have_posts() ) :
  while( have_posts() ) : the_post(); ?>

    <div class="post-container">
      <article class="post <?php if ( has_post_thumbnail() )  { ?> has-thumbnail <?php } ?>">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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

        <?php if (has_post_thumbnail()) { ?>
          <div class="featured-image__container">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('small-thumbnail'); ?>
            </a>
          </div>
        <?php } ?>

        <!-- EXCERPT -->

        <?php if ($post->post_excerpt) { ?>
          <p>
            <?php echo get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>"><span class="oi" data-glyph="arrow-right"></span></a>
          </p>
        <?php } else { ?>
          <p>
            <?php the_excerpt(); ?>
            <script type="text/javascript">
              console.log("<?php echo get_the_excerpt(); ?>");
            </script>
            <a href="<?php the_permalink(); ?>"><span class="oi" data-glyph="arrow-right"></span></a>
          </p>
        <?php } ?>


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
