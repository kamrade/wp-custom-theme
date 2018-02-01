<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
  <div class="input-group">
    <label class="screen-reader-text pr-2 mb-0" for="s">Search for:</label>
    <input placeholder="<?php the_search_query(); ?>" type="text" value="" name="s" id="s" class="form-control form-control-sm" />
    <div class="input-group-append">
      <input type="submit" value="Search" id="searchsubmit" class="btn btn-sm btn-secondary" />
    </div>
  </div>
</form>
