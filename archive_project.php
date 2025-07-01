<?php 
/*
Template Name: archive_project
*/
?>
<?php get_header(); ?>
 <?php get_sidebar(); ?>
<div class="p-card">
    <div class="p-card__item">
        <h3>ITスクールコーポレートサイト</h3>
        <a href="<?php echo esc_url( home_url( '/page_project' ) ); ?>"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/Raise-Techschool.png' ); ?>" alt="Raise-Techschool"></a>
    </div>
    <div class="p-card__item">
        <h3>ハンバーガーショップコーポレートサイト</h3>
        <a href="<?php echo esc_url( home_url( '/page_project2' ) ); ?>"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/Hamburger-shop.png' ); ?>" alt="Hamburger-shop"></a>
    </div>
</div>
<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="l-buttonWrapper l-buttonProject">
    <a href="<?php echo esc_url( home_url( '/page_contactme' ) ); ?>" class="p-button p-button--projectNav p-button--allProjectNav"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
       Contact me
     </a>
</div>
<?php get_footer(); ?>