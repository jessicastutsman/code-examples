<div class="tm-navbar uk-headerbar">

    <?php if ($this['widgets']->count('logo')) : ?>
	<div class="uk-container uk-container-center">
		<div class="uk-flex uk-flex-middle uk-flex-space-between">
			<div class="uk-text-left uk-hidden-small">
				<a class="tm-logo" href="<?php echo $this['config']->get('site_url'); ?>">
					<?php echo $this['widgets']->render('logo'); ?>
				</a>
			</div>
			<?php if ($this['widgets']->count('toolbar-h')) : ?>
				<div class="uk-text-right uk-hidden-small">
					<?php echo $this['widgets']->render('toolbar-h'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
    <?php endif; ?>
</div>
<nav class="tm-navbar uk-navbar" <?php if ($this['config']->get('navbar_sticky')) echo 'data-uk-sticky="{\'top\': \'div\', \'animation\': \'uk-animation-slide-top\'}"'; ?>>
    <div class="uk-container uk-container-center">

        <?php if ($this['widgets']->count('menu + logo')) : ?>
        <div class="uk-flex uk-flex-middle uk-flex-space-between uk-hidden-small">
            <?php echo $this['widgets']->render('menu'); ?>
			 <?php if ($this['widgets']->count('toolbar-r')) : ?>
                    <div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-r'); ?></div>
                    <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('logo-small + offcanvas')) : ?>
        <div class="uk-flex uk-flex-middle uk-flex-space-between uk-visible-small">

            <?php if ($this['widgets']->count('logo-small')) : ?>
            <a class="tm-logo-small uk-visible-small" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo-small'); ?></a>
            <?php endif; ?>

            <?php if ($this['widgets']->count('offcanvas')) : ?>
            <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
            <?php endif; ?>

        </div>
        <?php endif; ?>

    </div>

    <?php if ($this['widgets']->count('search')) : ?>
    <div class="tm-search">
        <div class="uk-visible-large"><?php echo $this['widgets']->render('search'); ?></div>
    </div>
    <?php endif; ?>

</nav>
