<?php
/**
 * Title: Features — Testimonials
 * Slug: bb-features/testimonials
 * Categories: bb-features
 * Description: Peach band with three review cards and their source badges.
 *
 * @package BB_Features
 */

$bbf_icon = get_theme_file_uri( 'assets/icon/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-testimonials bbf-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-testimonials bbf-section">
	<!-- wp:group {"className":"bbf-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-shell">
		<!-- wp:heading {"className":"bbf-h3 bbf-testimonials__title bbf-reveal"} -->
		<h2 class="wp-block-heading bbf-h3 bbf-testimonials__title bbf-reveal">Trusted by 60,000+ customers and rated 4.8/5 based on 700+ customer reviews</h2>
		<!-- /wp:heading -->
		<!-- wp:group {"className":"bbf-tcards bbf-stagger","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-tcards bbf-stagger">
			<!-- wp:group {"className":"bbf-tcard bbf-tcard--trustpilot","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-tcard bbf-tcard--trustpilot">
				<!-- wp:html -->
				<div class="bbf-tcard__who"><img src="<?php echo esc_url( $bbf_icon . 'av-dwayne.png' ); ?>" alt="" width="56" height="56" /><span class="bbf-tcard__name">Dwayne Moore</span></div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"bbf-tcard__content","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-tcard__content">
					<!-- wp:html --><div class="bbf-tcard__stars" role="img" aria-label="Rated 5 out of 5"><span></span><span></span><span></span><span></span><span></span></div><!-- /wp:html -->
					<!-- wp:paragraph {"className":"bbf-tcard__text"} --><p class="bbf-tcard__text">Great support people. Very attentive and helpful and quick to respond. We launched a new community site that includes an app. This was a major first-time undertaking for us, and we couldn't have done it without the expertise and patience determination we found in the support team at Buddyboss. These guys and gals are good!</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbf-tcard bbf-tcard--trustpilot","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-tcard bbf-tcard--trustpilot">
				<!-- wp:html -->
				<div class="bbf-tcard__who"><img src="<?php echo esc_url( $bbf_icon . 'av-ryan.png' ); ?>" alt="" width="56" height="56" /><span class="bbf-tcard__name">Ryan Carlock</span></div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"bbf-tcard__content","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-tcard__content">
					<!-- wp:html --><div class="bbf-tcard__stars" role="img" aria-label="Rated 4 out of 5"><span></span><span></span><span></span><span></span><span class="is-empty"></span></div><!-- /wp:html -->
					<!-- wp:paragraph {"className":"bbf-tcard__text"} --><p class="bbf-tcard__text">BuddyBoss is leading the way for Wordpress Users to enter into the App Space with their Native App plugin, Platform Plugin and plan to make it even easier in the future. It has personally revolutionized our own business, and as full stack developers we can attest to the uniqueness of what they've created. Bad reviews happen every day, but it's not every day where you come across an opportunity to utilize something like BB App and Platform with freedom, and the support of those freedoms is why I'm sticking with them for the long haul! We have a vision to build the Internet of Apps, and BuddyBoss is helping make that a reality!</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbf-tcard bbf-tcard--capterra","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-tcard bbf-tcard--capterra">
				<!-- wp:html -->
				<div class="bbf-tcard__who"><img src="<?php echo esc_url( $bbf_icon . 'av-kyler.png' ); ?>" alt="" width="56" height="56" /><span class="bbf-tcard__name">Kyler Boudreau</span></div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"bbf-tcard__content","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-tcard__content">
					<!-- wp:html --><div class="bbf-tcard__stars" role="img" aria-label="Rated 5 out of 5"><span></span><span></span><span></span><span></span><span></span></div><!-- /wp:html -->
					<!-- wp:paragraph {"className":"bbf-tcard__text"} --><p class="bbf-tcard__text">I've helped built a niche community on Drupal. Used Discourse, Mighty Networks and Circle. BuddyBoss blows all of them out of the water. ZERO contest. I'm an so excited to have moved my private community and training to this platform.</p><!-- /wp:paragraph -->
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
