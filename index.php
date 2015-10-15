<?php get_header(); ?>

<div class="demo-blog__posts mdl-grid">
	<div class="mdl-card coffee-pic mdl-cell mdl-cell--8-col">
		<div class="mdl-card__media mdl-color-text--grey-50">
		  <h3><a href="entry.html">Coffee Pic</a></h3>
		</div>

		<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
		  <div class="minilogo"></div>
		  <div>
		    <strong>The Newist</strong>
		    <span>2 days ago</span>
		  </div>
		</div>
	</div>

	<div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
		<button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent">
		  <i class="material-icons mdl-color-text--white" role="presentation">add</i>
		  <span class="visuallyhidden">add</span>
		</button>

		<div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
			<img src="<?php echo get_site_url(); ?>/wp-content/themes/fbi-safe/images/logo.png">
			+1,337
		</div>

		<div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
			<div>
				<strong>The Newist</strong>
			</div>
		  
			<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">
				<li class="mdl-menu__item mdl-js-ripple-effect">About</li>
				<li class="mdl-menu__item mdl-js-ripple-effect">Message</li>
				<li class="mdl-menu__item mdl-js-ripple-effect">Favorite</li>
				<li class="mdl-menu__item mdl-js-ripple-effect">Search</li>
			</ul>

			<button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
				<i class="material-icons" role="presentation">more_vert</i>
				<span class="visuallyhidden">show menu</span>
			</button>
		</div>
	</div>

	<!-- WORDPRESS LIST POSTS ARGS -->
	<?php 
		$args = array(
			'posts_per_page'   => 5,
			'offset'           => 0,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);

		$posts = get_posts( $args );
	?>

	<!-- WORDPRESS LIST POSTS -->
	<?php  foreach ($posts as $post) : setup_postdata( $post ); ?>
		<div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col">
			<div class="mdl-card__media mdl-color-text--grey-50">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</div>
			
			<div class="mdl-color-text--grey-600 mdl-card__supporting-text">
				<?php the_content(); ?>
			</div>

			<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
				<?php echo get_avatar( get_the_author_meta('id'), 32 ); ?>

				<div>
					<strong><?php the_author(); ?></strong>
					<span><?php the_date(); ?></span>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	

	<div class="mdl-card amazing mdl-cell mdl-cell--12-col">
		<div class="mdl-card__title mdl-color-text--grey-50">
			<h3 class="quote"><a href="entry.html">I couldn’t take any pictures but this was an amazing thing…</a></h3>
		</div>
	
		<div class="mdl-card__supporting-text mdl-color-text--grey-600">
			Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
		</div>

		<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
			<div class="minilogo"></div>
			<div>
				<strong>The Newist</strong>
				<span>2 days ago</span>
			</div>
		</div>
	</div>

	<div class="mdl-card shopping mdl-cell mdl-cell--12-col">
		<div class="mdl-card__media mdl-color-text--grey-50">
			<h3><a href="entry.html">Shopping</a></h3>
		</div>

		<div class="mdl-card__supporting-text mdl-color-text--grey-600">
			Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
		</div>

		<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
			<div class="minilogo"></div>
			<div>
				<strong>The Newist</strong>
				<span>2 days ago</span>
			</div>
		</div>
	</div>

	<nav class="demo-nav mdl-cell mdl-cell--12-col">
		<div class="section-spacer"></div>
		<a href="entry.html" class="demo-nav__button" title="show more">
			More
			<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
				<i class="material-icons" role="presentation">arrow_forward</i>
			</button>
		</a>
	</nav>
</div>

<?php get_footer(); ?>