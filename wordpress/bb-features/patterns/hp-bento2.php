<?php
/**
 * Title: Home — Who it is for
 * Slug: bb-features/hp-bento2
 * Categories: bb-home
 * Description: WHO IT IS FOR head over the ten-community carousel: the card track, its dots and the prev/next pair.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-bento2","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-bento2">
	<!-- wp:group {"className":"bbh-bento2__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-bento2__inner">
		<!-- wp:group {"className":"bbh-bento2__head","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-bento2__head">
			<!-- wp:html -->
			<span class="bbh-tag"><span>who it is for</span></span>
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbh-h2 bbh-bento2__title"} -->
			<h2 class="wp-block-heading bbh-h2 bbh-bento2__title">Ten kinds of community, one platform</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-bento2__track","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-bento2__track">
			<!-- wp:group {"className":"bbh-bento2__card is-current","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-bento2__card is-current">
				<!-- wp:group {"className":"bbh-bento2__art","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bento2__art">
					<!-- wp:html -->
					<img class="bbh-bento2__poly" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-poly.svg' ) ); ?>" alt="" aria-hidden="true"/>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-bento2__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bento2__copy">
					<!-- wp:heading {"level":3,"className":"bbh-h5 bbh-bento2__card-title"} -->
					<h3 class="wp-block-heading bbh-h5 bbh-bento2__card-title">Education</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-bento2__card-text"} -->
					<p class="bbh-bento2__card-text">Personalized activity feeds with posts, comments, likes, and @mentions — the heartbeat of your community, free from algorithms.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-bento2__card","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-bento2__card">
				<!-- wp:group {"className":"bbh-bento2__art","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bento2__art">
					<!-- wp:html -->
					<img class="bbh-bento2__poly" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-poly.svg' ) ); ?>" alt="" aria-hidden="true"/>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-bento2__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bento2__copy">
					<!-- wp:heading {"level":3,"className":"bbh-h5 bbh-bento2__card-title"} -->
					<h3 class="wp-block-heading bbh-h5 bbh-bento2__card-title">Coaching</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-bento2__card-text"} -->
					<p class="bbh-bento2__card-text">Personalized activity feeds with posts, comments, likes, and @mentions — the heartbeat of your community, free from algorithms.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-bento2__card","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-bento2__card">
				<!-- wp:group {"className":"bbh-bento2__art","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bento2__art">
					<!-- wp:html -->
					<img class="bbh-bento2__poly" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-poly.svg' ) ); ?>" alt="" aria-hidden="true"/>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-bento2__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bento2__copy">
					<!-- wp:heading {"level":3,"className":"bbh-h5 bbh-bento2__card-title"} -->
					<h3 class="wp-block-heading bbh-h5 bbh-bento2__card-title">Online Courses</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-bento2__card-text"} -->
					<p class="bbh-bento2__card-text">Personalized activity feeds with posts, comments, likes, and @mentions — the heartbeat of your community, free from algorithms.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-bento2__cta","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-bento2__cta">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"bbh-btn bbh-btn--ghost bbh-btn--lg bbh-bento2__more"} -->
				<div class="wp-block-button bbh-btn bbh-btn--ghost bbh-btn--lg bbh-bento2__more"><a class="wp-block-button__link wp-element-button" href="#">See All Features</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:group {"className":"bbh-bento2__controls","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-bento2__controls">
				<!-- wp:group {"className":"bbh-bento2__dots","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bento2__dots">
					<!-- wp:html -->
					<button class="bbh-bento2__dot" type="button"  aria-label="Show slide 1"></button>
					<!-- /wp:html -->
					<!-- wp:html -->
					<button class="bbh-bento2__dot is-active" type="button"  aria-label="Show slide 2"></button>
					<!-- /wp:html -->
					<!-- wp:html -->
					<button class="bbh-bento2__dot" type="button"  aria-label="Show slide 3"></button>
					<!-- /wp:html -->
					<!-- wp:html -->
					<button class="bbh-bento2__dot" type="button"  aria-label="Show slide 4"></button>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-bento2__nav","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bento2__nav">
					<!-- wp:html -->
					<button class="bbh-bento2__arrow bbh-bento2__arrow--prev" type="button"  aria-label="Previous community types"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/app-arrow-left.svg' ) ); ?>" alt="" aria-hidden="true"></button>
					<!-- /wp:html -->
					<!-- wp:html -->
					<button class="bbh-bento2__arrow bbh-bento2__arrow--next" type="button"  aria-label="Next community types"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/carousel-arrow-right.svg' ) ); ?>" alt="" aria-hidden="true"></button>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
