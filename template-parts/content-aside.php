
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="index-box">

        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
    
        <footer class="entry-footer">
            <?php sangeet_entry_footer(); ?>
        </footer><!-- .entry-footer -->
        
    </div>
</article><!-- #post-## -->