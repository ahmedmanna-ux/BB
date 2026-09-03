<?php
/**
 * Title: Home — Memberships split
 * Slug: bb-features/hp-memberships
 * Categories: bb-home
 * Description: Peach split: the Memberships chapter head, the feature list and the plans artwork panel.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-split bbh-split--peach","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-split bbh-split--peach">
	<!-- wp:group {"className":"bbh-split__head","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-split__head">
		<!-- wp:html -->
		<span class="bbh-tag"><span>memberships</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbh-h2"} -->
		<h2 class="wp-block-heading bbh-h2">Charge for it, on your own terms</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"bbh-split__lede"} -->
		<p class="bbh-split__lede">Build online communities, membership sites, and social learning platforms with profiles, groups, forums, activity feeds, messaging, notifications, media sharing, courses, gamification, and mobile apps</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbh-split__card","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-split__card">
		<!-- wp:group {"className":"bbh-split__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-split__copy">
			<!-- wp:group {"className":"bbh-split__intro","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-split__intro">
				<!-- wp:heading {"level":3,"className":"bbh-h4"} -->
				<h3 class="wp-block-heading bbh-h4">Keep members engaged with personalized activity feed</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbh-body-sm"} -->
				<p class="bbh-body-sm">BuddyBoss Memberships is built in, so a second plugin is optional. Sell one-time or recurring plans through Stripe. BuddyBoss takes 2.9% on Start and nothing on Launch or Scale.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<ul class="bbh-split__list"><li>Monthly, yearly and one-time plans with free trials</li><li>Members upgrade, downgrade or cancel from their account</li><li>0% platform fee on Launch and Scale</li><li>Discounts, custom button text and a benefits checklist</li></ul>
			<!-- /wp:html -->
			<!-- wp:group {"className":"bbh-split__actions","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-split__actions">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbh-btn bbh-btn--solid bbh-btn--md"} -->
					<div class="wp-block-button bbh-btn bbh-btn--solid bbh-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore Memberships</a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"bbh-btn bbh-btn--ghost bbh-btn--md bbh-btn--noicon"} -->
					<div class="wp-block-button bbh-btn bbh-btn--ghost bbh-btn--md bbh-btn--noicon"><a class="wp-block-button__link wp-element-button" href="#">Get BuddyBoss</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-split__panel","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-split__panel">
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbh_img . 'hp-memberships-panel.png' ); ?>" alt="The BuddyBoss membership price box beside a Gold plan card and the Stripe logo"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
