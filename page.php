<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <article class="uk-article">

        <h1 class="uk-article-title"><?php
		// Retrieves the stored title from the database
		$meta_value = get_post_meta( get_the_ID(), 'meta-text', true );
		// Checks and displays the retrieved value
		if( !empty( $meta_value ) ) {
			echo $meta_value;
		} else {
			the_title();
		} ?></h1>
						
	<?php if ($this['config']->get('page_title') !== '1') : ?>
        	<h2 class="uk-article-title"><?php the_title(); ?></h2>	
        <?php endif; ?>

        <?php the_content(''); ?>

        <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>

    </article>

    <?php endwhile; ?>
<?php endif; ?>

<?php comments_template(); ?>
