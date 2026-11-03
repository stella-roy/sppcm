<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="screen-reader-text">Search</label>
    <input type="search" id="s" name="s"
           placeholder="Search…"
           value="<?php echo get_search_query(); ?>">
    <button type="submit">Search</button>
</form>