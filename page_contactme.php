<?php 
/*
Template Name: contact_me
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<section class ="p-profile__wrapper">
    <h3>Contact me</h3>
    <form class="c-contactForm" action="<?php echo esc_url('https://formspree.io/f/mkgrbkob'); ?>" method="POST">
        <div class="c-contactForm__group">
          <label for="name"><?php echo esc_html('Name'); ?></label>
          <input type="text" id ="name" name="name" placeholder="<?php echo esc_attr('Your name'); ?>" required>
        </div>
        <div class="c-contactForm__group">
          <label for="email"><?php echo esc_html('E-mail'); ?></label>
          <input type="email" id="email" name="e-mail" placeholder="<?php echo esc_attr('email@example.com'); ?>" required>
        </div>
        <div class="c-contactForm__group">
           <label for="message"><?php echo esc_html('Message'); ?></label>
           <textarea id="message" name="message" placeholder="<?php echo esc_attr('Your message'); ?>" required></textarea>
        </div>
        <input type="hidden" name="_redirect" value="<?php echo esc_url('https://your-username.github.io/your-repo-name/thanks.html'); ?>">
        <button type="submit" class="p-button p-button--projectNav p-button__send"><?php echo esc_html('送信'); ?></button>
    </form> 
</section>
<?php get_footer(); ?>
