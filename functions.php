<?php

/**
 * Theme setup functions for portfoliok theme.
 *
 * @package portfoliok
 */

/**
　　* Setup theme defaults and registers support for various WordPress features.
　　*
　　* @return void
 */

function portfoliok_theme_setup()
{
	add_theme_support(
		'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
	)
 );
     add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('editor-styles');
    add_theme_support('automatic-feed-links');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('align-wide');
    add_theme_support('custom-header');
    add_editor_style();
    register_nav_menus(
        array()
    );
}

    add_action('after_setup_theme', 'portfoliok_theme_setup');


function portfoliok_script()
{
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=League+Gothic&family=League+Spartan:wght@100..900&family=M+PLUS+1p&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'ress',
        get_template_directory_uri()
        . '/css/ress.css',
        array(),
        filemtime(
            get_template_directory() . '/css/ress.css'
        )
    );
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array(),
        filemtime(
            get_template_directory() . '/style.css'
        )
    );
      wp_enqueue_style(
        'portfoliok-style',
        get_template_directory_uri() . '/css/portfoliok.css',
        array(),
        filemtime(
            get_template_directory() . '/css/portfoliok.css'
        )
    );
    wp_enqueue_script(
        'jquery-local',
        get_template_directory_uri() . '/js/jquery-3.7.1.min.js',
        array(),
        '1.0.0',
        false
    );
    wp_enqueue_script(
        'menu-js',
        get_template_directory_uri() . '/js/menu.js',
        array(),
        '1.0.0',
        false
    );
			  wp_enqueue_script(
                'page-script',
                get_template_directory_uri() . '/js/main.js',
                array( 'jquery' ),
                '1.0.0',
                false
            );
}

add_action(
    'wp_enqueue_scripts',
    'portfoliok_script'
);

add_action( 'wp_footer', function() {
    global $template;
    echo '<!-- 使用テンプレート: ' . $template . ' -->';
});

function rtbread_register_block_styles() {
    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'highlight-yellow',
            'label' => '黄色マーカー',
            'inline_style' => 'background-color: yellow;',
        )
    );
}
add_action( 'init', 'rtbread_register_block_styles' );

function mytheme_register_block_patterns() {
    register_block_pattern(
        'mytheme/hero-section',
        array(
            'title'       => 'ヒーローセクション',
            'description' => '大きな見出しと説明文のセクション',
            'content'     => '<!-- wp:heading {"level":1} --><h1>タイトル</h1><!-- /wp:heading -->',
        )
    );
}
add_action( 'init', 'mytheme_register_block_patterns' );

function portfolioK_enqueue_comment_reply_script() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'portfolioK_enqueue_comment_reply_script' );

/**
 * Add a sidebar.
 */
function portfoliok_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'portfoliok' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'portfoliok' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'portfoliok_theme_slug_widgets_init' );