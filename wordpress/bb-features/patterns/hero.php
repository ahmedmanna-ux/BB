<?php
/**
 * Title: Features — Hero
 * Slug: bb-features/hero
 * Categories: bb-features
 * Description: Full-bleed peach hero with the headline, two CTAs and six floating community cards.
 *
 * @package BB_Features
 */

$bbf_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-hero">
	<!-- wp:group {"className":"bbf-hero__stage","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-hero__stage">
		<!-- wp:group {"className":"bbf-hero__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-hero__copy">
			<!-- wp:group {"className":"bbf-hero__head","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-hero__head">
				<!-- wp:paragraph {"className":"bbf-hero__eyebrow"} -->
				<p class="bbf-hero__eyebrow">#1 Community Platform in WordPress</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"bbf-h1"} -->
				<h1 class="wp-block-heading bbf-h1">Build a community where people feel connected</h1>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"bbf-btn bbf-btn--solid bbf-btn--lg bbf-btn--play"} -->
				<div class="wp-block-button bbf-btn bbf-btn--solid bbf-btn--lg bbf-btn--play"><a class="wp-block-button__link wp-element-button" href="#">Watch Demo</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"bbf-btn bbf-btn--ghost bbf-btn--lg bbf-btn--noicon"} -->
				<div class="wp-block-button bbf-btn bbf-btn--ghost bbf-btn--lg bbf-btn--noicon"><a class="wp-block-button__link wp-element-button" href="#">Get BuddyBoss Now</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<!-- wp:image {"className":"bbf-float bbf-float--composer"} -->
		<figure class="wp-block-image bbf-float bbf-float--composer"><img src="<?php echo esc_url( $bbf_img . 'hero-composer.png' ); ?>" alt=""/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"className":"bbf-float bbf-float--avatars"} -->
		<figure class="wp-block-image bbf-float bbf-float--avatars"><img src="<?php echo esc_url( $bbf_img . 'hero-avatars.png' ); ?>" alt=""/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"className":"bbf-float bbf-float--notification"} -->
		<figure class="wp-block-image bbf-float bbf-float--notification"><img src="<?php echo esc_url( $bbf_img . 'hero-notification.png' ); ?>" alt=""/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"className":"bbf-float bbf-float--message"} -->
		<figure class="wp-block-image bbf-float bbf-float--message"><img src="<?php echo esc_url( $bbf_img . 'hero-message.png' ); ?>" alt=""/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"className":"bbf-float bbf-float--update"} -->
		<figure class="wp-block-image bbf-float bbf-float--update"><img src="<?php echo esc_url( $bbf_img . 'hero-update.png' ); ?>" alt=""/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"className":"bbf-float bbf-float--reactions"} -->
		<figure class="wp-block-image bbf-float bbf-float--reactions"><img src="<?php echo esc_url( $bbf_img . 'hero-reactions.png' ); ?>" alt=""/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
