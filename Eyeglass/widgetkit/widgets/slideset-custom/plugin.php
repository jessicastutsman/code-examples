<?php

return array(

    'name' => 'widget/slideset-custom',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'slideset-custom',
        'label' => 'Slideset Custom',
        'core'  => false,
        'icon'  => 'plugins/widgets/slideset-custom/widget.svg',
        'view'  => 'plugins/widgets/slideset-custom/views/widget.php',
        'item'  => array('title', 'content', 'media'),
        'settings' => array(
			'infinite'           => true,
            'center'             => false,
            'nav'                => true,
            'slidenav'           => 'above',
            'slidenav_align'     => 'center',
            'slidenav_contrast'  => false,
            'filter'             => 'none',
            'filter_tags'        => array(),
            'filter_position'    => 'top',
            'filter_align'       => 'left',
            'filter_all'         => false,
            'autoplay'           => false,
            'interval'           => '3000',
            'autoplay_pause'     => true,
            'gutter'             => 'default',
            'columns'            => '1',
            'columns_small'      => 0,
            'columns_medium'     => 0,
            'columns_large'      => 0,
            'columns_xlarge'     => 0,
            'panel'              => 'blank',
            'panel_link'         => false,

            'media'              => true,
            'image_width'        => 'auto',
            'image_height'       => 'auto',
            'media_align'        => 'teaser',
            'media_border'       => 'none',
            'media_overlay'      => 'icon',
            'overlay_animation'  => 'fade',
            'media_animation'    => 'scale',

            'title'              => true,
            'content'            => true,
            'social_buttons'     => true,
            'title_size'         => 'panel',
            'text_align'         => 'center',
            'link'               => true,
            'link_style'         => 'button',
            'link_text'          => 'Read more',
            'badge'              => true,
            'badge_style'        => 'badge',
            'badge_position'     => 'panel',

            'link_target'        => false,
            'class'              => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {
            $app['scripts']->add('uikit-slideset-custom', 'vendor/assets/uikit/js/components/slideset.min.js', array('uikit'));
			$app['scripts']->add('uikit-slider', 'vendor/assets/uikit/js/components/slider.min.js', array('uikit'));
        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('slideset-custom.edit', 'plugins/widgets/slideset-custom/views/edit.php', true);
        }

    )

);
