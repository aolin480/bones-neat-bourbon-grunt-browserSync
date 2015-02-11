<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label for="s" class="screen-reader-text"><?php _e('Search for:','capstone'); ?></label>
        <input type="search" id="s" name="s" value="" />

        <button type="submit" id="searchsubmit" ><?php _e('Search','capstone'); ?></button>
    </div>
</form>