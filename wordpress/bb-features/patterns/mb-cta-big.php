<?php
/**
 * Title: Module — Closing CTA
 * Slug: bb-features/mb-cta-big
 * Categories: bb-module-pages
 * Description: Tall centred CTA band that closes the page.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-mb","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-mb">
	<!-- wp:group {"className":"bbm-ctaband bbm-ctaband--center bbm-reveal bbm-reveal--zoom","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-ctaband bbm-ctaband--center bbm-reveal bbm-reveal--zoom">
		<!-- wp:group {"className":"bbm-ctaband__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-ctaband__copy">
			<!-- wp:paragraph {"className":"bbm-ctaband__title"} -->
			<p class="bbm-ctaband__title">Give your community a feed worth checking daily</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"bbm-ctaband__text"} -->
			<p class="bbm-ctaband__text">Build thriving communities, membership sites, and online learning platforms with BuddyBoss—the leading WordPress community platform.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"bbm-btn bbm-btn--lg bbm-btn--white"} -->
			<div class="wp-block-button bbm-btn bbm-btn--lg bbm-btn--white"><a class="wp-block-button__link wp-element-button" href="#">Get BuddyBoss Now</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
