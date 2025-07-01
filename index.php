<?php 
/*
Template Name: index
*/
?>
<?php get_header(); ?>
<body>
<?php get_sidebar(); ?>
<section class ="p-profile__wrapper">
       <h3>About&nbsp;me</h3>
       <p>ご訪問ありがとうございます。スクールにてWordPressコースを卒業し、現在は引き続きスキルアップに向けて日々コードと向き合っています。累計学習時間は900時間を超えました。  
        HTML5/CSS3、JavaScriptを中心に、レスポンシブデザインやFLOCSS設計の対応、WordPress構築が可能です。
        <br>
        前職では派遣会社に勤務し、傾聴力を活かした丁寧なコミュニケーションを心がけてきました。  
        また、漫画制作の経験もあり、流行のタッチを意識したイラストや簡単な漫画の制作も対応可能です。
        </p> 
</section>
<div class="is-scrollBlock">
<section class="p-grid">
  <h2>My&nbsp;Skills</h2>
    <div class="p-grid__wrapper">
     <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/html.svg' ); ?>" alt="HTML">HTML</div>
      <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/css.svg' ); ?>" alt="CSS">CSS</div>
      <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/javascript.svg' ); ?>" alt="JavaScript">JavaScript</div>
      <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/wordpress.svg' ); ?>" alt="WordPress">WordPress</div>
      <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/figma.svg' ); ?>" alt="Figma">Figma</div>
      <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/vscode.svg' ); ?>" alt="VSCode">VSCode</div>
      <div class="p-grid__item p-grid__item--git"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/git.svg' ); ?>" alt="Git">Git</div>
      <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/FLOCSS.svg' ); ?>" alt="FLOCSS">FLOCSS</div>
      <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/jquery.svg' ); ?>" alt="jQuery">jQuery</div>
      <div class="p-grid__item p-grid__item--php"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/php-brands.svg' ); ?>" alt="PHP">PHP(WordPress構築)</div>
      <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/palette-solid.svg' ); ?>" alt="CLIP STUDIO PAINT">CLIP STUDIO PAINT </div>
    </div>
</section> 
</div>
<div class="is-scrollBlock">
<div class="p-card">
    <div class="p-card__item">
        <h3>ITスクールコーポレートサイト</h3>
        <a href="<?php echo esc_url( home_url( '/page_project' ) ); ?>"><img src= "<?php echo esc_url (get_template_directory_uri() . '/images/Raise-Techschool.png' ); ?>" alt="Raise-Techschool"></a>
    </div>
    <div class="p-card__item">
        <h3>ハンバーガーショップコーポレートサイト</h3>
        <a href="<?php echo esc_url( home_url( '/page_project2' ) ); ?>"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/Hamburger-shop.png' ); ?>" alt="Hamburger-shop"></a>
    </div>
</div>
<div class="l-buttonWrapper">
    <a href="<?php echo esc_url( home_url( '/archive-project' ) ); ?>" class="p-button p-button--projectNav"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
       All Projects
    </a>
    <a href="<?php echo esc_url( home_url( '/page_contactme' ) ); ?>" class="p-button p-button--projectNav"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
       Contact me
     </a>
</div>
</div>
<?php get_footer(); ?>