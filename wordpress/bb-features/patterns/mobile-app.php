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
			<!-- wp:group {"className":"bbf-app__head","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-app__head">
				<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Mobile App</p><!-- /wp:paragraph -->
				<!-- wp:heading {"className":"bbf-h3 bbf-h3--bold"} --><h2 class="wp-block-heading bbf-h3 bbf-h3--bold">Native app, built entirely with Flutter</h2><!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Launch a fully white-label native community app under your own App Store and Google Play developer accounts—your brand, your icon, your community.</p><!-- /wp:paragraph -->
			<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
			<ul class="wp-block-list bbf-checks bbf-stagger">
				<!-- wp:list-item --><li><strong>White-label publishing</strong> — your brand, your store</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><strong>Rebuilt on Flutter</strong> — up to 3× faster loads</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><strong>Modern UI/UX</strong> — clean &amp; fluid</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><strong>Dark mode</strong> — from day one</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><strong>In-app purchases</strong> — courses &amp; memberships</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><strong>App blocks</strong> — native screens, no code</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"bbf-btn bbf-btn--solid"} -->
				<div class="wp-block-button bbf-btn bbf-btn--solid"><a class="wp-block-button__link wp-element-button" href="#">Explore More Mobile App</a></div>
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
			<!-- Four slides to match the four pagination dots in the design. Each slide
			     swaps all three phones at once. Slides 2-4 are placeholders reusing the
			     same three screens until the real ones are exported. -->
			<!-- wp:group {"className":"bbf-phones bbf-carousel","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-phones bbf-carousel">
				<!-- wp:group {"className":"bbf-phones__track","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-phones__track">
					<!-- wp:group {"className":"bbf-phone-set","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-phone-set">
						<!-- wp:image {"className":"bbf-phone bbf-phone--left"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--left"><img src="<?php echo esc_url( $bbf_img . 'app-screen-1.png' ); ?>" alt="Writing a post in the BuddyBoss app"/></figure>
						<!-- /wp:image -->
						<!-- wp:image {"className":"bbf-phone bbf-phone--center"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--center"><img src="<?php echo esc_url( $bbf_img . 'app-screen-2.png' ); ?>" alt="The activity feed in the BuddyBoss app"/></figure>
						<!-- /wp:image -->
						<!-- wp:image {"className":"bbf-phone bbf-phone--right"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--right"><img src="<?php echo esc_url( $bbf_img . 'app-screen-3.png' ); ?>" alt="A post with comments in the BuddyBoss app"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbf-phone-set","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-phone-set">
						<!-- wp:image {"className":"bbf-phone bbf-phone--left"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--left"><img src="<?php echo esc_url( $bbf_img . 'app-screen-1.png' ); ?>" alt=""/></figure>
						<!-- /wp:image -->
						<!-- wp:image {"className":"bbf-phone bbf-phone--center"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--center"><img src="<?php echo esc_url( $bbf_img . 'app-screen-2.png' ); ?>" alt=""/></figure>
						<!-- /wp:image -->
						<!-- wp:image {"className":"bbf-phone bbf-phone--right"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--right"><img src="<?php echo esc_url( $bbf_img . 'app-screen-3.png' ); ?>" alt=""/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbf-phone-set","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-phone-set">
						<!-- wp:image {"className":"bbf-phone bbf-phone--left"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--left"><img src="<?php echo esc_url( $bbf_img . 'app-screen-1.png' ); ?>" alt=""/></figure>
						<!-- /wp:image -->
						<!-- wp:image {"className":"bbf-phone bbf-phone--center"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--center"><img src="<?php echo esc_url( $bbf_img . 'app-screen-2.png' ); ?>" alt=""/></figure>
						<!-- /wp:image -->
						<!-- wp:image {"className":"bbf-phone bbf-phone--right"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--right"><img src="<?php echo esc_url( $bbf_img . 'app-screen-3.png' ); ?>" alt=""/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbf-phone-set","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-phone-set">
						<!-- wp:image {"className":"bbf-phone bbf-phone--left"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--left"><img src="<?php echo esc_url( $bbf_img . 'app-screen-1.png' ); ?>" alt=""/></figure>
						<!-- /wp:image -->
						<!-- wp:image {"className":"bbf-phone bbf-phone--center"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--center"><img src="<?php echo esc_url( $bbf_img . 'app-screen-2.png' ); ?>" alt=""/></figure>
						<!-- /wp:image -->
						<!-- wp:image {"className":"bbf-phone bbf-phone--right"} -->
						<figure class="wp-block-image bbf-phone bbf-phone--right"><img src="<?php echo esc_url( $bbf_img . 'app-screen-3.png' ); ?>" alt=""/></figure>
						<!-- /wp:image -->
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
</div>
<!-- /wp:group -->
