<?php
/**
 * Title: Home — Hero
 * Slug: bb-features/hp-hero
 * Categories: bb-home
 * Description: Peach hero: eyebrow, headline, lede, the two CTAs and the review-platform chips, over the glow and the clipped product collage.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-hero">
	<!-- wp:group {"className":"bbh-hero__stage","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-hero__stage">
		<!-- wp:html -->
		<img class="bbh-hero__glow" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-hero-glow.svg' ) ); ?>" alt="" aria-hidden="true"/>
		<!-- /wp:html -->
		<!-- wp:html -->
		<img class="bbh-hero__art" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-hero-art.png' ) ); ?>" alt="" aria-hidden="true"/>
		<!-- /wp:html -->
		<!-- wp:group {"className":"bbh-hero__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-hero__copy">
			<!-- wp:group {"className":"bbh-hero__intro","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-hero__intro">
				<!-- wp:group {"className":"bbh-hero__head","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-hero__head">
					<!-- wp:paragraph {"className":"bbh-hero__eyebrow"} -->
					<p class="bbh-hero__eyebrow">#1 WordPress Community Platform</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":1,"className":"bbh-h1 bbh-hero__title"} -->
					<h1 class="wp-block-heading bbh-h1 bbh-hero__title">Your full-scale community and online learning</h1>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-body-md bbh-hero__lede"} -->
					<p class="bbh-body-md bbh-hero__lede">Build online communities, membership sites, and social learning platforms with profiles, groups, forums, activity feeds, messaging, notifications, media sharing, courses, gamification, and mobile apps</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-hero__actions","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-hero__actions">
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"bbh-btn bbh-btn--solid bbh-btn--lg bbh-btn--noicon"} -->
						<div class="wp-block-button bbh-btn bbh-btn--solid bbh-btn--lg bbh-btn--noicon"><a class="wp-block-button__link wp-element-button" href="#">Get BuddyBoss</a></div>
						<!-- /wp:button -->
						<!-- wp:button {"className":"bbh-btn bbh-btn--ghost bbh-btn--lg bbh-btn--noicon"} -->
						<div class="wp-block-button bbh-btn bbh-btn--ghost bbh-btn--lg bbh-btn--noicon"><a class="wp-block-button__link wp-element-button" href="#">See Demo Community</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-hero__ratings","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-hero__ratings">
				<!-- wp:group {"className":"bbh-rating","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-rating">
					<!-- wp:html -->
					<span class="bbh-rating__logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-trustpilot.png' ) ); ?>" alt="Trustpilot"></span>
					<!-- /wp:html -->
					<!-- wp:html -->
					<span class="bbh-rating__body"><span class="bbh-rating__stars"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-trustpilot.svg' ) ); ?>" alt="" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-trustpilot.svg' ) ); ?>" alt="" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-trustpilot.svg' ) ); ?>" alt="" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-trustpilot.svg' ) ); ?>" alt="" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-trustpilot.svg' ) ); ?>" alt="" aria-hidden="true"></span><span class="bbh-rating__score">4.6 out of 5 </span></span>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-rating","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-rating">
					<!-- wp:html -->
					<span class="bbh-rating__logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-wordpress.svg' ) ); ?>" alt="WordPress"></span>
					<!-- /wp:html -->
					<!-- wp:html -->
					<span class="bbh-rating__body"><span class="bbh-rating__stars"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-amber.svg' ) ); ?>" alt="" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-amber.svg' ) ); ?>" alt="" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-amber.svg' ) ); ?>" alt="" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-amber.svg' ) ); ?>" alt="" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-star-amber.svg' ) ); ?>" alt="" aria-hidden="true"></span><span class="bbh-rating__score">4.9 out of 5</span></span>
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
