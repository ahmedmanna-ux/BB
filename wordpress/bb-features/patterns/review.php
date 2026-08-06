<?php
/**
 * Title: Features — Featured review
 * Slug: bb-features/review
 * Categories: bb-features
 * Description: Single full-width social proof card with a five-star rating and reviewer.
 *
 * @package BB_Features
 */

$bbf_icon = get_theme_file_uri( 'assets/icon/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-section">
	<!-- wp:group {"className":"bbf-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-shell">
		<!-- wp:group {"className":"bbf-review bbf-reveal bbf-reveal--zoom","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-review bbf-reveal bbf-reveal--zoom">
			<!-- wp:html -->
			<div class="bbf-review__stars" role="img" aria-label="Rated 5 out of 5"><span></span><span></span><span></span><span></span><span></span></div>
			<!-- /wp:html -->
			<!-- wp:group {"className":"bbf-review__body","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-review__body">
				<!-- wp:heading {"className":"bbf-h3"} --><h2 class="wp-block-heading bbf-h3">A Game-Changer for the WordPress Ecosystem</h2><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbf-review__quote"} --><p class="bbf-review__quote">BuddyBoss is leading the way for Wordpress Users to enter into the App Space with their Native App plugin, Platform Plugin and plan to make it even easier in the future. It has personally revolutionized our own business, and as full stack developers we can attest to the uniqueness of what they've created. Bad reviews happen every day, but it's not every day where you come across an opportunity to utilize something like BB App and Platform with freedom, and the support of those freedoms is why I'm sticking with them for the long haul! We have a vision to build the Internet of Apps, and BuddyBoss is helping make that a reality!</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbf-review__by","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-review__by">
				<!-- wp:html -->
				<div class="bbf-review__person">
					<img src="<?php echo esc_url( $bbf_icon . 'av-review.png' ); ?>" alt="" width="56" height="56" />
					<span>
						<span class="bbf-review__name">John Doe</span>
						<span class="bbf-review__role">Managing Director</span>
					</span>
				</div>
				<!-- /wp:html -->
				<!-- wp:image {"className":"bbf-review__logo"} -->
				<figure class="wp-block-image bbf-review__logo"><img src="<?php echo esc_url( $bbf_icon . 'logo-foundr.png' ); ?>" alt="foundr"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
