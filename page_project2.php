<?php 
/*
Template Name: page_project2
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
     <div class="l-firstView">
          <h3>Hamburger Shopコーポレートサイト</h3>
             <div class="c-mockup"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/Mockup-humburger.png' ); ?>"</div>
     </div>
<div class="is-scrollBlock">
     <h3>DEMO動画</h3>
    <div class="l-video">
         <video controls class="c-video">
                 <source src="<?php echo esc_url (get_template_directory_uri() .'/images/HamburgerShop.mp4' ); ?>" type="video/mp4">
                  お使いのブラウザは video タグをサポートしていません。
         </video>
     <a href = "<?php echo esc_url('https://rtbread.fool.jp/'); ?>"  target="_blank rel="noopener noreferrer">https://rtbread.fool.jp/</a>
    </div>
</div>
<div class="is-scrollBlock">
     <div class="l-grid">
         <section class="c-sectionProject">    
            <div class="c-sectionProject__wrapper"> 
                 <h4>プロジェクト概要</h4>
                 <ul class="c-sectionProject__item">
                     <li><strong>ジャンル：</strong> &nbsp;コーポレートサイト</li>
                     <li><strong>目的：</strong> &nbsp;ユーザーがメニュー、店舗情報などの必要な情報を直感的に見つけられる構成・設計を意識して制作
                    </li>
                     <li><strong>ターゲット：</strong>&nbsp; BtoC向け</li>
                     <li><strong>担当領域：</strong>&nbsp; コーディング全て / WordPress化 / レスポンシブ対応（PC / タブレット / スマホ）</li>
                     <li><strong>制作時間：</strong>&nbsp; 237時間 + 下層ページ 95時間 + WordPress化161時間</li>
                     <li>(学習時間含む)</li><br>
                 </ul>
                <h4>使用技術</h4>
                <div class="p-gridSkill">
                     <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/html.svg' ); ?>" alt="HTML">HTML</div>
                     <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/css.svg' ); ?>" alt="CSS">CSS</div>
                     <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/jquery.svg' ); ?>" alt="jQuery">jQuery</div>
                     <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/javascript.svg' ); ?>" alt="JavaScript">JavaScript</div>
                     <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/figma.svg' ); ?>" alt="Figma">Figma</div>
                     <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/vscode.svg' ); ?>" alt="VSCode">VSCode</div>
                     <div class="p-grid__item p-grid__item--git"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/git.svg' ); ?>" alt="Git">Git</div>
                     <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/FLOCSS.svg' ); ?>" alt="FLOCSS">FLOCSS</div>
                     <div class="p-grid__item"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/wordpress.svg' ); ?>" alt="WordPress">WordPress</div>
                     <div class="p-grid__item p-grid__item--php"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/php-brands.svg' ); ?>" alt="PHP">PHP</div>
                </div>
                 <h4>リンク</h4>
                 <ul class="c-sectionProject__item">
                     <li><strong>公開URL</strong></li>
                     <li><a href = "<?php echo esc_url('https://rtbread.fool.jp/'); ?>"  target="_blank rel="noopener noreferrer">https://rtbread.fool.jp/</a></li>
                     <li><strong>リポジトリ:</strong></li> 
                     <li><a href = "<?php echo esc_url('https://github.com/hkmilk/rtbread-hamburger'); ?>"  target="_blank rel="noopener noreferrer">https://github.com/hkmilk/rtbread-hamburger</a></li>
                 </ul>
             </div>
         </section>
    </div>
</div>
<div class = "l-Project">
    <div class="is-scrollBlock">
        <h3 class="c_point">Point.1</h3>
             <h4>レスポンシブ対応</h4>
                 <div class="p-Project__item p-Project__tb p-Project__pcItem">
                     <img class="c-ProjectImg" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_1.jpg' ); ?>" alt="Responsive View">
                 </div>
    </div>
    <div class="is-scrollBlock">
         <h3 class="c_point c_point--other">Point.2</h3>
              <h4>WordPressのタグ・カテゴリーを活用し、ユーザーが「検索フォーム」または「メニュー」から目的の記事を探しやすい設計</h4>
                    <div class="p-Project__item p-Project__tb p-Project__pcItem">
                      <img class="c-ProjectImg" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_2.jpeg' ); ?>" alt="検索フォームとメニュー">
                    </div>
    </div>
    <div class="is-scrollBlock">
        <h3 class="c_point c_point--other">Point.3</h3>
                <h4>Leafletを用いたカスタム地図挿入</h4>
                    <div class="p-Project__item p-Project__tb p-Project__pcItem">
                         <img class="c-ProjectImg" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_3.jpg' ); ?>" alt="mapの表示">
                    </div>
    </div>
    <div class="is-scrollBlock">
        <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_4.png' ); ?>" alt="pc全体図、ギミック">
    </div>
    <div class="is-scrollBlock">
         <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_5.png' ); ?>" alt="メニューカテゴリ">
    </div>
    <div class="is-scrollBlock">
         <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_6.jpg' ); ?>" alt="検索フォーム">
    </div>
    <div class="is-scrollBlock">
         <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_7.png' ); ?>" alt="タブレット全体図">
    </div>
    <div class="is-scrollBlock">
         <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_8.png' ); ?>" alt="pageとsingleのページ">
    </div>
    <div class="is-scrollBlock">
         <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_9.jpg' ); ?>" alt="sp全体図">
    </div>
    <div class="is-scrollBlock">
         <img class="c-ProjectImg c-ProjectImg--other" src="<?php echo esc_url (get_template_directory_uri() . '/images/ハンバーガー/point_10.jpg' ); ?>" alt="spのpageとsingleのページ">
    </div>
</div>
<div class="l-buttonWrapper l-buttonProject">
    <a href="<?php echo esc_url( home_url( '/archive-project' ) ); ?>" class="p-button p-button--projectNav p-button--allProjectNav"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
       一覧に戻る</a>
</div>
</div>
<?php get_footer(); ?>