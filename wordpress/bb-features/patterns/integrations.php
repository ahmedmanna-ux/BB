<?php
/**
 * Title: Features — Integrations
 * Slug: bb-features/integrations
 * Categories: bb-features
 * Description: Outlined carousel shell round the integration-logo artwork, with pagination dots and a prev/next pair.
 *
 * @package BB_Features
 */

$bbf_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-section">
	<!-- wp:group {"className":"bbf-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-shell">
		<!-- wp:group {"className":"bbf-head bbf-head--wide bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-head bbf-head--wide bbf-reveal">
			<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">integrations</p><!-- /wp:paragraph -->
			<!-- wp:heading {"className":"bbf-h2"} --><h2 class="wp-block-heading bbf-h2">Integrations that take BuddyBoss to the next level</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbf-carousel bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-carousel bbf-reveal">
			<!-- wp:image {"className":"bbf-carousel__panel"} -->
			<figure class="wp-block-image bbf-carousel__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-integrations.png' ); ?>" alt="Logos of the apps and services that integrate with BuddyBoss"/></figure>
			<!-- /wp:image -->
			<!-- wp:html -->
			<div class="bbf-carousel__bar">
				<div class="bbf-carousel__dots">
					<span class="bbf-carousel__dot is-active"></span>
					<span class="bbf-carousel__dot"></span>
					<span class="bbf-carousel__dot"></span>
					<span class="bbf-carousel__dot"></span>
					<span class="bbf-carousel__dot"></span>
				</div>
				<div class="bbf-carousel__nav">
					<button type="button" class="bbf-carousel__arrow bbf-carousel__arrow--prev" aria-label="Previous integrations"></button>
					<button type="button" class="bbf-carousel__arrow bbf-carousel__arrow--next" aria-label="Next integrations"></button>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
