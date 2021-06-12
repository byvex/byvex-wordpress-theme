<header id="masthead" class="site-header bg-primary shadow" role="banner">
	<nav class="container navbar navbar-dark navbar-expand-md">

		<a class="navbar-brand fw-bold m-0 p-0 text-truncate" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
			<?php echo esc_attr(get_bloginfo('name')); ?>
		</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php
		wp_nav_menu(array(
			'theme_location'    => 'primary',
			'container'       => 'div',
			'container_id'    => 'mainNav',
			'container_class' => 'collapse navbar-collapse justify-content-end',
			'menu_id'         => false,
			'menu_class'      => 'navbar-nav ms-auto',
			'depth'           => 3,
			'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
			'walker'          => new wp_bootstrap_navwalker()
		));
		?>


	</nav>
</header>