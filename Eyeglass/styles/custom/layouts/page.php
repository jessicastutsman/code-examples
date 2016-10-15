<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <article class="uk-article">
	
	<?php $meta = get_post_meta( get_the_ID(), 'meta-text', true ); ?>
	<?php if(!empty($meta)) { ;?>
      <h1 class="uk-article-title">
		  <?php  echo $meta; ?>
	<?php  }  else { ;?>
		  <h1 class="uk-h1 uk-article-title"><?php the_title(); ?></h1>
	  <?php };?>
	  </h1>
	  
		 <?php if ($this['config']->get('page_title', true)) : ?>
        <h2 class="uk-article-title"><?php the_title(); ?></h2>	
        <?php endif; ?>

        <?php the_content(''); ?>

        <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>

    </article>

    <?php endwhile; ?>
<?php endif; ?>

<?php comments_template(); ?>