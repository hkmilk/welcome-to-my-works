<?php 
/*
Template Name: page_thanks
*/
?>
<?php get_header(); ?>
   <?php get_sidebar(); ?>
<section class="p-thanksMessage">
    <h1>送信が完了しました</h1>
    <p>お問い合わせいただきありがとうございます。<br>内容を確認の上、ご連絡させていただきます。</p>
    <a href="<?php echo esc_url ( home_url ( ' / ' ) ); ?>" class="p-button--projectNav p-button--thanks">トップページに戻る</a>
</section>
<?php get_footer(); ?>