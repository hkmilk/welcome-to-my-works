<?php 

/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
    <h3>ERROR:</h3>
    <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e('404 NOT FOUND', 'portfoliok'); ?></h2>
                    <p><?php _e('お探しのページは見つかりませんでした', 'portfoliok'); ?></p> 
                    <p class="not-search"><a href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a></p>
                </div>
    </div>
<?php get_footer(); ?>
