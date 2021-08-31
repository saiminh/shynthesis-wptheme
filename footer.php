<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package synthesis2021
 */

?>
  <footer id="colophon" class="site-footer">
    <div class="wp-block-group synthesis-newsletter-subscribe">
      <p class="has-text-align-center">Synthesis insight by email, to whet your appetite.</p>
      <form action="">
        <input type="email" placeholder="Enter your email address">
        <div class="wp-block-buttons">
          <div class="wp-block-button"><a class="wp-block-button__link">Submit</a></div>
        </div>
      </form>
    </div>
    <div class="site-footer-colophon">
      <div class="footer-address">
        2 Eastbourne Terrace<br />
        London, England<br />
        W2 6LG
      </div>
      <div class="footer-links">
        <a href="">Contact</a>
        <a href="https://www.linkedin.com/company/synthesiscapital/">Linkedin</a>
        <a href="">Twitter</a>
      </div>
      <div class="footer-copyright">
        Synthesis Capital © 2021<br />
        <?php the_privacy_policy_link(); ?>
      </div>
      <div class="footer-disclaimer">
        We use all imagery with the kind permision from the following; Beyond Meat, Impossible Foods, UPSIDE Foods, Perfect Day, Geltor, Redefine Meat, Formo, Aleph Farms, Shiru, Innovopro, Solar Foods, Blue Nalu, JUST and Good Catch.
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
