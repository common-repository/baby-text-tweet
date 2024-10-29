<?php
/**
 *
 * @link              http://awesomebootstrap.net/
 * @since             1.0.0
 * @package           baby-test-tweet
 *
 * @wordpress-plugin
 * Plugin Name:       baby text tweet
 * Plugin URI:        http://awesomebootstrap.net/
 * Description:       This is a simple text tweet share plugin.
 * Version:           1.3.1
 * Author:            Noor alam
 * Author URI:        https://www.fiverr.com/nnalam
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * Enqueue scripts and styles.
 */
 if ( ! function_exists( 'baby_text_tweet_scripts' ) ) :
function baby_text_tweet_scripts() {
wp_enqueue_style( 'baby_text_tweet', plugins_url( '/assets/css/share-this.css', __FILE__ ));

wp_enqueue_script( 'baby-text-tweet', plugins_url( '/assets/js/share-this.js', __FILE__ ), array( 'jquery' ), '1.0', false);

}
add_action( 'wp_enqueue_scripts', 'baby_text_tweet_scripts' );
endif;

/**
 * add text tweet plugin
 */
 if ( ! function_exists( 'baby_text_tweet_button' ) ) :
function baby_text_tweet_button() {
?>
<script type="text/javascript"> 
ShareThis({
    sharers: [ ShareThisViaTwitter, ShareThisViaReddit,  ShareThisViaFacebook, ShareThisViaLinkedIn, ShareThisViaEmail],
    selector: "body"
}).init();
</script>
<?php
}
add_action( 'wp_footer', 'baby_text_tweet_button' );
endif;






