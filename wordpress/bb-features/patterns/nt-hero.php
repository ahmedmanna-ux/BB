<?php
/**
 * Title: Module — hero
 * Slug: bb-features/nt-hero
 * Categories: bb-module-pages
 * Description: Peach hero with the headline, two CTAs, artwork and the two background shapes.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-hero bbm-nt","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-hero bbm-nt">
	<!-- wp:html -->
	<img class="bbm-hero__deco bbm-hero__poly" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/mp-hero-poly.svg' ) ); ?>" alt="" aria-hidden="true"/>
	<!-- /wp:html -->
	<!-- wp:html -->
	<img class="bbm-hero__deco bbm-hero__rect" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/mp-hero-rect.svg' ) ); ?>" alt="" aria-hidden="true"/>
	<!-- /wp:html -->
	<!-- wp:group {"className":"bbm-shell bbm-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-shell bbm-hero__inner">
		<!-- wp:group {"className":"bbm-hero__copy bbm-reveal bbm-reveal--left","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-hero__copy bbm-reveal bbm-reveal--left">
			<!-- wp:group {"className":"bbm-hero__head","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-hero__head">
				<!-- wp:html -->
				<span class="bbm-tag"><span>NOTIFICATIONS</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":1,"className":"bbm-h2"} -->
				<h1 class="wp-block-heading bbm-h2">Members hear what matters, on the channel they chose</h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">A bell, on-screen alerts and a full history inside the product — with per-event control over email and web, and web push through OneSignal.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbm-hero__actions","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-hero__actions">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbm-btn bbm-btn--lg bbm-btn--solid"} -->
					<div class="wp-block-button bbm-btn bbm-btn--lg bbm-btn--solid"><a class="wp-block-button__link wp-element-button" href="#">Get BuddyBoss Now</a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"bbm-btn bbm-btn--lg bbm-btn--ghost bbm-btn--noicon"} -->
					<div class="wp-block-button bbm-btn bbm-btn--lg bbm-btn--ghost bbm-btn--noicon"><a class="wp-block-button__link wp-element-button" href="#">Check Video Tutorials</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-hero__art bbm-hero__art--tight bbm-reveal bbm-reveal--right","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-hero__art bbm-hero__art--tight bbm-reveal bbm-reveal--right">
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbm_img . 'nt-hero.png' ); ?>" alt="The notifications panel open over the member dashboard with an empty state card"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
