<?php 
/*
Template Name: page_aboutme
*/
?>
<?php get_header(); ?>
 <?php get_sidebar(); ?>
<section class ="p-profile__wrapper">
    <h3>My Background</h3>
    <p>学生時代からイラストや創作活動に興味があり、美術大学を卒業しました。
        しかし当時は、デザインに理論的な裏付けを持たせることができず、一度クリエイティブの現場を離れることにしました。<br><br>
    
        その後は派遣会社で勤務し、ニーズを丁寧に汲み取る力を身につけました。
        直近ではクリエイティブ会社の営業事務として、議事録作成や会議参加を通じて、発注者の「やりたいこと」を具体化するプロセスに深く関わりました。<br><br>
    
        この経験から、制作だけでなく、設計やディレクションにも興味を持ち、より裁量権のある仕事をしたいと考えるようになりました。
        また、論理的な解決を好む自分のスタイルと、明快に結果を出せるWeb制作の相性の良さを感じ、現在この道に進んでいます。<br><br>
    
        HTML5/CSS3、JavaScriptを中心に、実務を想定した学習を進めています。
        直近ではWordPress化に取り組み、PHPの学習も開始。
        今後はReactやTypeScriptなど、より幅広い技術の習得を目指しています。
    </p> 
</section>
<section class ="p-profile__wrapper">
    <h3>My Hobbies and Interests</h3>
    <p>AIの進化に伴う著作権問題、生成AIとクリエイティブとの関係、またWeb制作におけるAI活用にも関心を持っています。<br>
        その他には競馬が趣味で、データを読み解きながら戦略を考える時間が好きです。</p> 
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
      <div class="p-grid__item p-grid__item--php"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/php-brands.svg' ); ?>" alt="PHP">PHP</div>
      <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/palette-solid.svg' ); ?>" alt="CLIP STUDIO PAINT">CLIP STUDIO PAINT </div>
    </div>
</section>
<div class="l-buttonWrapper l-buttonProject">
    <a href="<?php echo esc_url( home_url( '/page_contactme' ) ); ?>" class="p-button p-button--projectNav p-button--allProjectNav"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
       Contact me
     </a>
</div>
</div>
<?php get_footer(); ?>