<div class="post-container">
  <article class="post post-aside">
    <p class="post-info">
      <span class="post-info__date"><?php the_time('F jS, Y'); ?></span>
      <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
        <span class="post-info__author"><?php the_author(); ?></span>
      </a>
    </p>

    <?php the_content(); ?>
  </article>
</div>
