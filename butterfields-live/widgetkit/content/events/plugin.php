<?php

return array(

    'name' => 'content/events',

    'main' => 'YOOtheme\\Widgetkit\\Content\\Type',

    'config' => array(

        'name'  => 'events',
        'label' => 'Events',
        'icon'  => 'plugins/content/events/content.svg',
        'item'  => array('title', 'content', 'media', 'link'),
        'data'  => array(
            'number'   => 5,
            'content'  => 'intro',
            'category' => array(),
            'author'   => 'author',
            'date'     => 'event_date',
            'categories' => 'categories',
			'postid' => $post->ID,
			 'post-type' => 'tribe_events',
			 'eventDisplay' => 'upcoming',	
			 'post_status'=> 'future',
			 
        )

    ),

    'items' => function($items, $content) {
		$args =  
			array(
				'eventDisplay'=>'upcoming', 
				'posts_per_page'=> -1, 
				'order' => 'ASC',
				'post_status'=>array('publish','future'
				)
		);

        $args2  = array(
            'numberposts' => 3,
			//'post_type' => Tribe__Events__Main::POSTTYPE,	
			//'start_date' => current_time( 'Y-m-d' ),	      	
			//'eventDisplay'=> 'upcoming', 
			'post_status' => array('publish','future'),
			//'meta_key'=>'_EventStartDate',
			'orderby' => 'event_date',
			'order' => 'ASC',
            'post_type'   => 'tribe_events',
			//'tribe_is_upcoming' => 'true',
        );

        if ($content['category'] > 0) {
            $args['tax_query'] = array(
                array(
                    'taxonomy'         => 'tribe_events_cat',
                    'field'            => 'id',
                    'terms'            => (int) $content['category'],
                    'include_children' => false
                )
            );
        }

	
        foreach (tribe_get_events($args) as $post){
			//$tribe_events = new tribe_events_get_event($post->ID);
            $data = array();
			
			$data['postid']     = get_the_ID($post->ID);
            $data['title']      = get_the_title($post->ID);
            $data['link']       = tribe_get_event_link($post->ID);
            $data['author']     = $content['author'] ? get_the_author_meta('display_name', $post->post_author) : '';
            $data['date']       = tribe_get_start_date($post->ID, false, 'Y-m-d H:i:s');
			$data['eventdate'] = tribe_get_start_date($post->ID, false, 'Y-m-d H:i:s');
			$data['eventdayname'] = tribe_get_start_date( $post->ID, false, 'l');
			$data['eventday'] = tribe_get_start_date( $post->ID, false, 'jS');
			$data['eventmonth'] = tribe_get_start_date( $post->ID, false, 'F');
			$data['eventtime'] = tribe_get_start_date( $post->ID, false, 'g:i a');


            $pieces = get_extended($post->post_content);

            if ($content['content'] == 'excerpt') {
                $data['content'] = apply_filters('the_content', $post->post_excerpt);
            } else if ($content['content'] == 'intro') {
                $data['content'] = apply_filters('the_content', $pieces['main']);
            } else {
                $data['content'] = apply_filters('the_content', $pieces['main'].$pieces['extended']);
            }
			
            if ($content['categories']) {

                $data['categories'] = array();

                $terms = apply_filters( 'tribe_get_events', wp_get_post_terms( $post->ID, 'tribe_events_cat' ), $post->ID );
                foreach ( $terms as $term ) {
                    $data['categories'][$term->name] = esc_url( get_term_link($term) );
                }
            }

            if ($thumbnail = get_post_thumbnail_id($post->ID)) {
                $image = wp_get_attachment_image_src($thumbnail, 'full');
                $data['media'] = $image[0];
            }

            $data['tags'] = array();

            if ($tags = get_the_tags($post->ID)) {
                foreach($tags as $tag) {
                    $data['tags'][] = $tag->name;
                }
            }

            // map custom fields
            foreach ((array)$content['mapping'] as $map) {
                if (isset($map['name']) && isset($map['field'])) {
                    $value = get_post_meta($post->ID, $map['field']);
                    $data[$map['name']] = array_shift($value);
                }
            }
            $items->add($data);	
			
		}
		
    },

    'events' => array(

        'init.admin' => function($event, $app) {
            $app['scripts']->add('widgetkit-wordpress-controller', 'plugins/content/events/assets/controller.js');
            $app['angular']->addTemplate('events.edit', 'plugins/content/events/views/edit.php');
        }

    )

);

return defined('WPINC') ? $config : fail ;
