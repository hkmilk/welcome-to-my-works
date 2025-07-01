<?php 
/*
Template Name: page_project
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<div>
    <div class="l-firstView">
      <h3>ITスクールコーポレートサイト</h3>
      <div class="c-mockup"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/Beige New Product Mockup Now Available Facebook Post.png' ); ?>"</div>
    </div>
<div class="is-scrollBlock">
<h3>DEMO動画</h3>
    <div class="l-video">
        <video controls class="c-video">
          <source src="<?php echo esc_url (get_template_directory_uri() . '/images/RaiseTech demo.mp4' ); ?>" type="video/mp4">
          お使いのブラウザは video タグをサポートしていません。
        </video>
      <a href = "<?php echo esc_url( 'https://hkmilk.github.io/Raise-Tech/'); ?>"  target="_blank rel="noopener noreferrer">https://hkmilk.github.io/Raise-Tech/</a>
    </div>
</div>
<div class="l-grid">
    <div class="is-scrollBlock">
        <section class="c-sectionProject">
            <div class="c-sectionProject__wrapper"> 
                 <h4>プロジェクト概要</h4>
                 <ul class="c-sectionProject__item">
                     <li><strong>ジャンル：</strong> &nbsp;コーポレートサイト</li>
                     <li><strong>目的：</strong> &nbsp;架空企業のブランディングと問い合わせ獲得を意識</li>
                     <li><strong>ターゲット：</strong>&nbsp; BtoC向け ITスクールに興味のある方</li>
                     <li><strong>担当領域：</strong>&nbsp; コーディング全て / レスポンシブ対応（PC / タブレット / スマホ）</li>
                     <li><strong>制作期間：</strong>&nbsp; 制作時間 197時間</li>
                     <li>(学習時間含む)</li>
                 </ul>
                <h4>使用技術</h4>
                <div class="p-gridSkill">
                    <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/html.svg' ); ?>" alt="HTML">HTML</div>
                    <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/css.svg' ); ?>" alt="CSS">CSS</div>
                    <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/jquery.svg' ); ?>" alt="jQuery">jQuery</div>
                    <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/vscode.svg' ); ?>" alt="VSCode">VSCode</div>
                    <div class="p-grid__item p-grid__item--git"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/git.svg' ); ?>" alt="Git">Git</div>
                 </div>
                 <h4>リンク</h4>
                 <ul class="c-sectionProject__item">
                     <li><strong>公開URL</strong></li>
                     <li><a href = "<?php echo esc_url('https://hkmilk.github.io/Raise-Tech/'); ?>"  target="_blank rel="noopener noreferrer">https://hkmilk.github.io/Raise-Tech/</a></li>
                     <li><strong>リポジトリ:</strong></li>
                     <li><a href = "<?php echo esc_url('https://github.com/hkmilk'); ?>"  target="_blank rel="noopener noreferrer">https://github.com/hkmilk</a></li>
                 </ul>
            </div>
        </section>
    </div>
</div>
<div class = "l-Project">
   <div class="is-scrollBlock">
       <h3 class="c_point">Point.1</h3>
          <h4>レスポンシブ対応</h4>
             <div class="p-Project__item">
                <img class="c-ProjectImg" src="<?php echo esc_url (get_template_directory_uri() . '/images/r-point_1.jpeg' ); ?>" alt="Responsive View">
             </div>
    </div>
    <div class="is-scrollBlock">
      <h3 class="c_point c_point--other">Point.2</h3>
         <h4>ナビメニューの変化</h4>
             <div class="p-Project__item">
                 <img class="c-ProjectImg" src="<?php echo esc_url (get_template_directory_uri() . '/images/r-point_2.jpeg' ); ?>" alt="Responsive View">
             </div>
    </div>
    <div class="is-scrollBlock">
         <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/r-point_3.jpeg' ); ?>" alt="pc全体図、ギミック">
    </div>
    <div class="is-scrollBlock">
         <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/r-point_4.jpeg' ); ?>" alt="タブレット全体図、ギミック">
    </div>
    <div class="is-scrollBlock">
         <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/r-point_5.jpeg' ); ?>" alt="SP全体図、ギミック">
    </div>
</div>
<div class="l-buttonWrapper l-buttonProject">
    <a href="<?php echo esc_url( home_url( '/archive-project' ) ); ?>" class="p-button p-button--projectNav p-button--allProjectNav"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
       一覧に戻る</a>
</div>
</div>
<?php get_footer(); ?>