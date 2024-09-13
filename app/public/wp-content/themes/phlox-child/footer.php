<?php
/* The template for displaying the footer.
 * Contains the closing of the body div and all contents
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2023
 * @link       http://averta.net
 */

//do_action( 'auxin_before_the_footer' ); ?>

</div><!--! end of #inner-body -->

<?php //do_action( "auxin_before_body_close", $post ); ?>
<?php //do_action( "auxin_after_inner_body_open", $post );

// Example: Insert Elementor header using a shortcode
   echo do_shortcode('[hfe_template id="56"]'); 
?>
<!-- outputs by wp_footer -->
<?php wp_footer(); ?>
<!-- end wp_footer -->

</body>
</html>
