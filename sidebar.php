<?php
/**
 * Sidebar File.
 *
 * @package ByteBunch
*/
?>

    <aside class="sidebar">
        <?php if ( true == get_theme_mod( 'toggle_home_sidebar', 'on' ) ) : ?>
            <div class="widget">
                <?php dynamic_sidebar('main-sidebar'); ?>
            </div><!--widget-->
        <?php endif; ?>
    </aside>