<?php

/**

* @package   Gusto

* @author    YOOtheme http://www.yootheme.com

* @copyright Copyright (C) YOOtheme GmbH

* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL

*/



// check compatibility

if (version_compare(PHP_VERSION, '5.3', '>=')) {



    // bootstrap warp

    require(__DIR__.'/warp.php');

}



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



//events calendar customizations

add_image_size( 'my-event-image-size', 250, 250, true );
add_image_size( 'my-event-image-size-small', 150, 150 , true );

function custom_tribe_event_featured_image( $featured_image ){
  if( is_single() ){
		$post_id = get_the_ID();
		$size = 'my-event-image-size';
    	$image_html     = get_the_post_thumbnail( $post_id, $size, array( 'class' => 'aligncenter' )  );
		$featured_image = '';

		//if link is not specifically excluded, then include <a>
		$image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size );
		$featured_image = '';
		if ( !empty( $image_src ) ) {
			$featured_image = '<a href="'. tribe_get_event_link() .'" title="'. get_the_title( $post_id ) .'">'.$image_html.'</a>';
		}
  	}
	return $featured_image;
}
add_filter( 'tribe_event_featured_image', 'custom_tribe_event_featured_image');


 









