<?php
/*
Plugin Name: Custom Functionality Plugin
Description: Plugin that does all the things
*/


//allow php in widgets
add_filter('widget_text','execute_php',100);
add_filter('the_content','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

//add RSC support for Contact Form 7
add_filter( 'wpcf7_use_really_simple_captcha', '__return_true' );


/******Global CSS********/
function register_plugin_styles() {

	wp_register_style( 'ddg-functionality', plugin_dir_url( __FILE__ ) . '/css/plugin.css');
	wp_enqueue_style( 'ddg-functionality' );
}
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

/*end global css*/

/************
Custom Meta Box
*************/
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'SEO\'s H1 Title', 'prfx-textdomain' ), 'prfx_meta_callback', 'page', $context = 'normal', $priority = 'high' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );

/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    ?>
 
    <p>
        <label for="meta-text" class="prfx-row-title"><?php _e( 'Enter H1 Title Tag Here', 'prfx-textdomain' )?></label>
        <input type="text" name="meta-text" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['meta-text'] ) ) echo $prfx_stored_meta['meta-text'][0]; ?>" />
    </p>
 
    <?php
}

/**
 * Saves the custom meta input
 */
function prfx_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'meta-text' ] ) ) {
        update_post_meta( $post_id, 'meta-text', sanitize_text_field( $_POST[ 'meta-text' ] ) );
    }
 
}
add_action( 'save_post', 'prfx_meta_save' );

/**
 * Adds the meta box stylesheet when appropriate
 */
function prfx_admin_styles(){
    global $typenow;
    if( $typenow == 'page' ) {
        wp_enqueue_style( 'prfx_meta_box_styles', plugin_dir_url( __FILE__ ) . '/css/meta-box-style.css' );
    }
}
add_action( 'admin_print_styles', 'prfx_admin_styles' );


/**end custom meta box**/
