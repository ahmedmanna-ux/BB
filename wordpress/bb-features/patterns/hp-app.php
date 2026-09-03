<?php
/**
 * Title: Home — Mobile app band
 * Slug: bb-features/hp-app
 * Categories: bb-home
 * Description: Dark gradient band: the white-label app card with its check list and store marks, beside the phone artwork and its dots.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-app-band","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-app-band">
	<!-- wp:html -->
	<img class="bbh-app-band__deco bbh-app-band__poly" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/app-polygon.svg' ) ); ?>" alt="" aria-hidden="true"/>
	<!-- /wp:html -->
	<!-- wp:html -->
	<img class="bbh-app-band__deco bbh-app-band__ellipse" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/app-ellipse.svg' ) ); ?>" alt="" aria-hidden="true"/>
	<!-- /wp:html -->
	<!-- wp:group {"className":"bbh-shell bbh-app-band__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-shell bbh-app-band__inner">
		<!-- wp:group {"className":"bbh-app-card bbh-reveal bbh-reveal--left","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-app-card bbh-reveal bbh-reveal--left">
			<!-- wp:group {"className":"bbh-app-card__intro","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-app-card__intro">
				<!-- wp:group {"className":"bbh-app-card__head","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-app-card__head">
					<!-- wp:html -->
					<span class="bbh-tag"><span>Mobile App</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":2,"className":"bbh-h3 bbh-h3--bold"} -->
					<h2 class="wp-block-heading bbh-h3 bbh-h3--bold">Get your own branded app</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"className":"bbh-body-sm"} -->
				<p class="bbh-body-sm">Launch a fully white-label native community app under your own App Store and Google Play developer accounts—your brand, your icon, your community.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<ul class="bbh-checks bbh-stagger"><li><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/check.svg' ) ); ?>" alt=""><span><b>White-label publishing</b> — your brand, your store</span></li><li><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/check.svg' ) ); ?>" alt=""><span><b>Rebuilt on Flutter</b> — up to 3× faster loads</span></li><li><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/check.svg' ) ); ?>" alt=""><span><b>Light &amp; dark mode</b> — from day one</span></li><li><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/check.svg' ) ); ?>" alt=""><span><b>In-app purchases</b> — courses &amp; memberships</span></li><li><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/check.svg' ) ); ?>" alt=""><span><b>App blocks</b> — native screens, no code</span></li></ul>
			<!-- /wp:html -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"bbh-btn bbh-btn--ghost bbh-btn--md"} -->
				<div class="wp-block-button bbh-btn bbh-btn--ghost bbh-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore More Mobile App</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:group {"className":"bbh-app-card__stores","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-app-card__stores">
				<!-- wp:html -->
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/store-android.svg' ) ); ?>" alt="Android" />
				<!-- /wp:html -->
				<!-- wp:html -->
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/store-apple.svg' ) ); ?>" alt="Apple" />
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-app-art bbh-reveal bbh-reveal--right","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-app-art bbh-reveal bbh-reveal--right">
			<!-- wp:group {"className":"bbh-app-art__stage","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-app-art__stage">
				<!-- wp:image {"sizeSlug":"full","className":"bbh-app-art__phones"} -->
				<figure class="wp-block-image size-full bbh-app-art__phones"><img src="<?php echo esc_url( $bbh_img . 'app-store-phones.png' ); ?>" alt="The BuddyBoss app on the App Store, in two brandings"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-app-art__dots","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-app-art__dots">
				<!-- wp:html -->
				<button class="bbh-app-art__dot is-active" type="button"  aria-label="First app branding"></button>
				<!-- /wp:html -->
				<!-- wp:html -->
				<button class="bbh-app-art__dot" type="button"  aria-label="Second app branding"></button>
				<!-- /wp:html -->
				<!-- wp:html -->
				<button class="bbh-app-art__dot" type="button"  aria-label="Third app branding"></button>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<button class="bbh-app-art__arrow bbh-app-art__arrow--prev" type="button"  aria-label="Previous app branding"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/app-arrow-left.svg' ) ); ?>" alt="" aria-hidden="true"></button>
			<!-- /wp:html -->
			<!-- wp:html -->
			<button class="bbh-app-art__arrow bbh-app-art__arrow--next" type="button"  aria-label="Next app branding"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/carousel-arrow-right.svg' ) ); ?>" alt="" aria-hidden="true"></button>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
