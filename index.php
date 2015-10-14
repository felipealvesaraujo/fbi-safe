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
			<img src="images/logo.png">
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

	<div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col">
		<div class="mdl-card__media mdl-color-text--grey-50">
			<h3><a href="entry.html">On the road again</a></h3>
		</div>

		<div class="mdl-color-text--grey-600 mdl-card__supporting-text">
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