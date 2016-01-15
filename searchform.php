<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label for="s" class="screen-reader-text"><?php _e('Search for:','bonestheme'); ?></label>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/search.svg">
        <input type="search" id="s" name="s" value="" placeholder="Find what you're looking for"/>

        <button type="submit" id="searchsubmit" ><?php _e('Search','bonestheme'); ?></button>
    </div>
</form>