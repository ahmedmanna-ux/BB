<?php
/**
 * Title: Home — Video review 2
 * Slug: bb-features/hp-review-2
 * Categories: bb-home
 * Description: The roomy variant of the video-review band.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-review bbh-review--roomy","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-review bbh-review--roomy">
	<!-- wp:group {"className":"bbh-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-shell">
		<!-- wp:group {"className":"bbh-review__row","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-review__row">
			<!-- wp:group {"className":"bbh-review__media","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-review__media">
				<!-- wp:image {"sizeSlug":"full","className":"bbh-review__portrait"} -->
				<figure class="wp-block-image size-full bbh-review__portrait"><img src="<?php echo esc_url( $bbh_img . 'hp-review-2.png' ); ?>" alt=""/></figure>
				<!-- /wp:image -->
				<!-- wp:html -->
				<span class="bbh-review__play"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-review-play.svg' ) ); ?>" alt="" aria-hidden="true"></span>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<figure class="bbh-review__body"><blockquote class="bbh-review__quote"><img class="bbh-review__mark" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-review-quotes.svg' ) ); ?>" alt="" aria-hidden="true"><p class="bbh-h4 bbh-review__text">The freedom, flexibility, and support keep us with BuddyBoss for the long haul. It’s helping us turn our vision of building the Internet of Apps into reality.</p></blockquote><figcaption class="bbh-review__by"><span class="bbh-review__name">John Doe</span><span class="bbh-review__role">Managing Director</span></figcaption></figure>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
