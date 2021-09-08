<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BRVO Modding
 */
?>
<footer class="container-fluid">
    <section class="footer-widgets"> 
        <div class="row">
            Footer Widgets
        </div>
    </section>
    <section class="copyright">
        <div class="row text-center">
            <p><?php echo get_theme_mod('set_copyright', 'Copyright X - All Rights Reserved'); ?></p>
        </div>
    </section>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>