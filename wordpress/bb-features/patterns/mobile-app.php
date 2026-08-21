<?php
/**
 * Title: Features — Mobile App (carousel)
 * Slug: bb-features/mobile-app
 * Categories: bb-features
 * Description: Peach band with the app checklist and a coverflow carousel of app screens. Autoplays, pauses on hover, and the dots switch screens.
 *
 * @package BB_Features
 */

$bbf_img  = get_theme_file_uri( 'assets/img/' );
$bbf_icon = get_theme_file_uri( 'assets/icon/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-app bbf-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-app bbf-section">
	<!-- wp:group {"className":"bbf-shell bbf-app__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-shell bbf-app__inner">
		<!-- wp:group {"className":"bbf-app__card bbf-reveal bbf-reveal--left","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-app__card bbf-reveal bbf-reveal--left">
			<!-- wp:group {"className":"bbf-app__intro","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-app__intro">
			<!-- wp:group {"className":"bbf-app__head","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-app__head">
				<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Mobile App</p><!-- /wp:paragraph -->
				<!-- wp:heading {"className":"bbf-h3 bbf-h3--bold"} --><h2 class="wp-block-heading bbf-h3 bbf-h3--bold">Get your own branded app</h2><!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Launch a fully white-label native community app under your own App Store and Google Play developer accounts—your brand, your icon, your community.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
			<ul class="wp-block-list bbf-checks bbf-stagger">
				<!-- wp:list-item --><li><strong>White-label publishing</strong> — your brand, your store</li>
						<li><strong>Rebuilt on Flutter</strong> — up to 3× faster loads</li>
						<li><strong>Light &amp; dark mode</strong> — from day one</li>
						<li><strong>In-app purchases</strong> — courses &amp; memberships</li>
						<li><strong>App blocks</strong> — native screens, no code</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"bbf-btn bbf-btn--ghost bbf-btn--md"} -->
				<div class="wp-block-button bbf-btn bbf-btn--ghost bbf-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore More Mobile App</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:html -->
			<div class="bbf-app__stores">
				<img src="<?php echo esc_url( $bbf_icon . 'store-android.svg' ); ?>" alt="Android" width="48" height="48" />
				<img src="<?php echo esc_url( $bbf_icon . 'store-apple.svg' ); ?>" alt="Apple" width="48" height="48" />
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbf-app__art bbf-reveal bbf-reveal--right","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-app__art bbf-reveal bbf-reveal--right">
				<!-- wp:html -->
				<div class="bbf-app__stage">
					<img class="bbf-app__phones" src="<?php echo esc_url( $bbf_img . 'app-store-phones.png' ); ?>" alt="The BuddyBoss app on the App Store, in two brandings">
				</div>
				<div class="bbf-app__dots">
					<button type="button" class="bbf-app__dot is-active" aria-label="First app branding"></button>
					<button type="button" class="bbf-app__dot" aria-label="Second app branding"></button>
					<button type="button" class="bbf-app__dot" aria-label="Third app branding"></button>
				</div>
				<button type="button" class="bbf-app__arrow bbf-app__arrow--prev" aria-label="Previous app branding"></button>
				<button type="button" class="bbf-app__arrow bbf-app__arrow--next" aria-label="Next app branding"></button>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
