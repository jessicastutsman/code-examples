<?php
/**
* @package   Gusto
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// Id
$settings['id'] = substr(uniqid(), -3);

// JS Options
$options = array();
$options[] = ($settings['duration'] != '500') ? 'duration: ' . $settings['duration'] : '';
$options[] = ($settings['autoplay']) ? 'autoplay: true ' : '';
$options[] = ($settings['interval'] != '3000') ? 'autoplayInterval: ' . $settings['interval'] : '';
$options[] = ($settings['autoplay_pause']) ? '' : 'pauseOnHover: false';

$options = '{'.implode(',', array_filter($options)).'}';

// Panel
$panel = 'uk-panel';
switch ($settings['panel']) {
    case 'box' :
        $panel .= ' uk-panel-box';
        break;
    case 'primary' :
        $panel .= ' uk-panel-box uk-panel-box-primary';
        break;
    case 'secondary' :
        $panel .= ' uk-panel-box uk-panel-box-secondary';
        break;
}

// Media Width
if ($settings['media_align'] == 'top') {

    $media_width = 'uk-width-1-1';
    $content_width = 'uk-width-1-1';

} else {

    $media_width = 'uk-width-' . $settings['media_breakpoint'] . '-' . $settings['media_width'];

    switch ($settings['media_width']) {
        case '1-5':
            $content_width = '4-5';
            break;
        case '1-4':
            $content_width = '3-4';
            break;
        case '3-10':
            $content_width = '7-10';
            break;
        case '1-3':
            $content_width = '2-3';
            break;
        case '2-5':
            $content_width = '3-5';
            break;
        case '1-2':
            $content_width = '1-2';
            break;
        case '3-5':
            $content_width = '2-5';
            break;
        case '2-3':
            $content_width = '1-3';
            break;
    }

    $content_width = 'uk-width-' . $settings['media_breakpoint'] . '-' . $content_width;

    // Align Right
    $media_width .= ($settings['media_align'] == 'right') ? ' uk-float-right uk-flex-order-last-' . $settings['media_breakpoint'] : '';

}

// Content Align
$content_align  = ($settings['content_align'] && $settings['media_align'] != 'top') ? 'uk-flex-middle' : '';

// Title Size
switch ($settings['title_size']) {
    case 'panel':
        $title_size = 'uk-panel-title';
        break;
    case 'large':
        $title_size = 'uk-heading-large uk-margin-top-remove';
        break;
    default:
        $title_size = 'uk-' . $settings['title_size'] . ' uk-margin-top-remove';
	 if (!empty($settings['title_size']) && !($meta) ) {
		 $title_size .= ' uk-margin-bottom-remove'; 
	 }
}

// Content Size
switch ($settings['content_size']) {
    case 'large':
        $content_size = 'uk-text-large';
        break;
    case 'h2':
    case 'h3':
    case 'h4':
        $content_size = 'uk-' . $settings['content_size'];
        break;
    default:
        $content_size = '';
}


// Link Style
switch ($settings['link_style']) {
    case 'button':
        $link_style = 'uk-button';
        break;
    case 'primary':
        $link_style = 'uk-button uk-button-primary';
        break;
    case 'button-large':
        $link_style = 'uk-button uk-button-large';
        break;
    case 'primary-large':
        $link_style = 'uk-button uk-button-large uk-button-primary';
        break;
    case 'button-link':
        $link_style = 'uk-button uk-button-link';
        break;
    default:
        $link_style = '';
}

// Link Target
$link_target = ($settings['link_target']) ? ' target="_blank"' : '';

// Badge Style
switch ($settings['badge_style']) {
    case 'badge':
        $badge_style = 'uk-badge';
        break;
    case 'success':
        $badge_style = 'uk-badge uk-badge-success';
        break;
    case 'warning':
        $badge_style = 'uk-badge uk-badge-warning';
        break;
    case 'danger':
        $badge_style = 'uk-badge uk-badge-danger';
        break;
    case 'text-muted':
        $badge_style  = 'uk-text-muted';
        break;
    case 'text-primary':
        $badge_style  = 'uk-text-primary';
        break;
}

// Custom Class
$class = $settings['class'] ? ' class="' . $settings['class'] . '"' : '';



?>

<?php if(!empty($config)) {
	echo '<p class="uk-contrast">Stay tuned for upcoming events at this time.</p>';
} else { ?>
<div id="wk-<?php echo $settings['id']; ?>"<?php echo $class; ?>>
    <div class="uk-panel <?php echo $panel; ?> uk-padding-remove">

        <?php if ($settings['media']) : ?>
        <div class="uk-grid uk-grid-collapse <?php echo $content_align; ?>" data-uk-grid-margin>
            <div class="<?php echo $media_width ?> uk-text-center">
                <?php echo $this->render('plugins/widgets/' . $widget->getConfig('name')  . '/views/_media.php', compact('items', 'settings', 'widget')); ?>
            </div>
            <div class="<?php echo $content_width ?>">
        <?php endif; ?>

        <div class="uk-text-<?php echo $settings['text_align']; ?>" data-uk-slideshow="<?php echo $options; ?>">
            <ul class="uk-slideshow content">
                <?php foreach ($items as $item) : ?>
				
				<?php 
				
				$post_id = $item['postid'];
				// Meta
				
        $meta = '';
        if ($item['date']) {
            $date = '<time datetime="'.$item['date'].'">'.$app['date']->format($item['date']).'</time>';
			//$date = date_create($item['date']);
			
            if ($item['author']) {
                $meta = $app['translator']->trans('Written by %author% on %date%',  array('%author%' => $item['author'], '%date%' => $date));
            } else {
                $meta = $app['translator']->trans('Written on %date%',  array('%date%' => $date));
            }
        } elseif ($item['author']) {
            $meta = $app['translator']->trans('Written by %author%',  array('%author%' => $item['author']));
        }
		
        if ($item['categories']) {

            $categories = array();
            foreach ($item['categories'] as $category => $url) {
                $categories[] = '<a href="'.$url.'">'.$category.'</a>';
            }
            $categories = implode(', ', array_filter($categories));

            $meta .= ($meta) ? '. ' : '';
            $meta .= $app['translator']->trans('Posted in %categories%',  array('%categories%' => $categories));

        } 
		
		if($item['eventdate']) {
				$datemonth = $item['eventdate'];
		}
		
		$postid = $item['postid'];
		
		
		
		

$short_content = $item['content'];
if ( mb_strlen( $short_content, 'utf8' ) >= 275 ) {
   $last_space = strrpos( substr( $short_content, 0, 275 ), ' ' ); 
   $short_content = substr( $short_content, 0, $last_space ) . '...';
}
$short_content=strip_tags($short_content);

		;?>

                <li>
					
                    <?php if ($item['content'] && $settings['content']) : ?>
                    <div class="<?php echo $content_size; ?> uk-grid uk-grid-collapse uk-flex-middle">
						<div class="uk-width-medium-2-3">
							<div class=" uk-panel-body " style="padding: 15px;">
							<?php if ($item['title'] && $settings['title']) : ?>					
							<h3 class="<?php echo $title_size; ?>">
                        		<?php if ($item['link']) : ?>
                            		<a class="uk-link-primary" href="<?php echo $item->escape('link'); ?>" <?php echo $link_target; ?>><?php echo $item['title']; ?></a>
                       			<?php else : ?>
                            		<?php echo $item['title']; ?>
                        		<?php endif; ?>
                    		</h3>
							<?php endif; ?>
							
							
							<p class="uk-margin-bottom-remove uk-margin-small-top" style="line-height: normal;">
							<?php echo $short_content ;?>
							</p>
							
							<?php if ($meta) : ?>
							<div class="uk-text-primary uk-text-center uk-margin-bottom-remove uk-margin-small-top">
								<?php echo $item['eventtime'];?> <?php echo $item['eventdayname'] ;?> - <?php echo $item['eventmonth'];?>, <?php echo $item['eventday'];?>
							</div>
							<?php endif; ?>
							
							
							<?php if ($item['link'] && $settings['link']) : ?>
	                   			<p class="uk-margin-bottom-remove uk-margin-top-remove"><a<?php if($link_style) echo ' class="' . $link_style . '"'; ?> href="<?php echo $item->escape('link'); ?>"<?php echo $link_target; ?>><?php echo $app['translator']->trans($settings['link_text']); ?></a></p>
                    		<?php endif; ?>		
							</div>
						</div>
						<div class="uk-width-medium-1-3 uk-container-center" style="height: inherit;">
							<div class="event-counter uk-panel-box-secondary">
								<?php echo do_shortcode( '[smartcountdown units="-years,months,weeks" digits_size="40" labels_size="17" deadline="'.$item['eventdate'].'" labels_style="font-variant:small-caps;" widget_style="text-align:center;"] [/smartcountdown]' ); ?>
							</div>
						</div>
							
						</div>
					<?php endif;?>
                </li>
            <?php endforeach; ?>
			
			
            </ul>
			<?php if (!$settings['nav_overlay'] && ($settings['nav'] != 'none')) : ?>
            <div class="uk-margin-top">
                <?php echo $this->render('plugins/widgets/' . $widget->getConfig('name')  . '/views/_nav.php', compact('items', 'settings')); ?>
            </div>
            <?php endif ?>
        </div>
		

        <?php if ($settings['media']) : ?>
            </div>
        </div>
        <?php endif; ?>
			
    </div>
		<?php /*?>End of Main Container<?php */?>
		
		
</div>

<?php } ;?>


<script>

    (function($){

        var container  = $('#wk-<?php echo $settings["id"]; ?>'),
            slideshows = container.find('[data-uk-slideshow]');

        container.on('beforeshow.uk.slideshow', function(e, next) {
            slideshows.not(next.closest('[data-uk-slideshow]')[0]).data('slideshow').show(next.index());
        });

    })(jQuery);

</script>
