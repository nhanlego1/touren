<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Corp
 */
?>
	<div class="clear"></div>
</div>

           <footer id="footer">
    <div class="footer_top">
<div class="container">
<div class="row">
  <div class="col-ld-3  col-md-3 col-sm-3">
    <div class="single_footer_widget">
      <h3>About Us</h3>
      <p>Japan Travel Guide.navi is a matching portal site for "foreigners (guests who visit Japan)" and "interpreting guides (hosts) that introduce their city and hometown".
Although the host is not a professional, I carefully inform the hearts of Japan 's "hospitality", and I will show you the "city and hometown" where I live.
By all means, please find a nice host and enjoy the charmful Japanese trip</p>
    </div>
  </div>
  <div class="col-ld-3  col-md-3 col-sm-3">
    <div class="single_footer_widget">
      <h3>Community</h3>
      <ul class="footer_widget_nav">
        <li><a href="torihiki">Display based on Specified Commercial Transactions Law</a></li>
        <li><a href="privacy">Privacy Policy</a></li>
        <li><a href="menseki">Disclaimer</a></li>
        <li><a href="kiyaku">Terms of service</a></li>
      </ul>
    </div>
  </div>
  <div class="col-ld-3  col-md-3 col-sm-3">
    <div class="single_footer_widget">
      <h3>Others</h3>
      <ul class="footer_widget_nav">
        <li><a href="campany">Company Profile</a> 
        </li><li><a href="contact">Inquiries</a>  
      </li></ul>
    </div>
  </div>
  <div class="col-ld-3  col-md-3 col-sm-3">
    <div class="single_footer_widget">
      <h3>Adress</h3>
            <p>〒167-0034 Tokyo Peach Blossom District 1-5-1</p>
           <p>TEL : 03-000-0000</p>
           <p>FAX : 03-000-0000</p>
           <p>E-mail : contact@wpfdegree.com</p>
    </div>
  </div>
</div>
</div>
</div>
</footer>
	<!-- <div class="container">
        <aside class="widget">
        	<?php dynamic_sidebar('footer-1'); ?>
        </aside>
        <aside class="widget">
        	<?php dynamic_sidebar('footer-2'); ?>
        </aside>
        <aside class="widget last">
        	<?php dynamic_sidebar('footer-3'); ?>
        </aside>
        <div class="clear"></div>
    </div> -->


<!-- <div id="copyright">
	<div class="container">
    	<div class="left">
        	<?php if( of_get_option('footertext', true) == 1) { ?>
            	<?php _e('Go to Appearance >> Theme Options >> Restore Defaults','skt-corp'); ?>
            <?php } else { ?>
				<?php echo of_get_option('footertext', true); ?>
            <?php } ?>
        </div>
    	<div class="right">
        	<?php if( of_get_option('footerlinks', true) == 1) { ?>
            	<?php _e('Go to Appearance >> Theme Options >> Restore Defaults','skt-corp'); ?>
            <?php } else { ?>
				<?php echo of_get_option('footerlinks', true); ?>
            <?php } ?>
        </div>
        <div class="clear"></div>
    </div>
</div> -->

<?php wp_footer(); ?>

</body>
</html>