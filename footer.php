<footer class="l-footer">
    <div class="c-footer__menu">
         <ul class="c-footer__list">
          <li><a href="<?php echo esc_url( home_url( '/archive-project' ) ); ?>">PROJECTS</a></li>
          <li><a href="<?php echo esc_url( home_url( '/page_aboutme' ) ); ?>">ABOUT ME</a></li>
          <li><a href="<?php echo esc_url( home_url( '/page_contactme' ) ); ?>">CONTACT</a></li>
         </ul>
         <div class="c-footer__image"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src = "<?php echo esc_url (get_template_directory_uri() . '/images/KK_transparent-.png' ); ?>"  alt="footer"></a></div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>