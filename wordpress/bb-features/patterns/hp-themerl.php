<?php
/**
 * Title: Home — Done for you
 * Slug: bb-features/hp-themerl
 * Categories: bb-home
 * Description: DONE FOR YOU head over the Web DFY and App DFY cards.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-dfy","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-dfy">
	<!-- wp:group {"className":"bbh-dfy__head","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-dfy__head">
		<!-- wp:html -->
		<span class="bbh-tag"><span>DONE for you</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbh-h2 bbh-dfy__title"} -->
		<h2 class="wp-block-heading bbh-h2 bbh-dfy__title">We build it, so you can focus on your business</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"bbh-dfy__lede"} -->
		<p class="bbh-dfy__lede">Build online communities, membership sites, and social learning platforms with profiles, groups, forums, activity feeds, messaging, notifications, media sharing, courses, gamification, and mobile apps</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbh-dfy__card bbh-dfy__card--web","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-dfy__card bbh-dfy__card--web">
		<!-- wp:group {"className":"bbh-dfy__panel","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-dfy__panel">
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbh_img . 'hp-dfy-web.png' ); ?>" alt="A BuddyBoss member profile on the web, with a settings gear, a code snippet badge and an open colour picker set to #3E34FF floating over it"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-dfy__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-dfy__copy">
			<!-- wp:group {"className":"bbh-dfy__intro","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-dfy__intro">
				<!-- wp:heading {"level":3,"className":"bbh-h4"} -->
				<h3 class="wp-block-heading bbh-h4">Web DFY</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbh-body-sm"} -->
				<p class="bbh-body-sm">BuddyBoss Memberships is built in, so a second plugin is optional. Sell one-time or recurring plans through Stripe. BuddyBoss takes 2.9% on Start and nothing on Launch or Scale.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<ul class="bbh-dfy__list"><li>Full platform setup — theme, plugins, configuration</li><li>Custom branding — your colours, logo &amp; fonts</li><li>Content migration — imported &amp; organised</li><li>Launch-ready in ~2 weeks</li></ul>
			<!-- /wp:html -->
			<!-- wp:group {"className":"bbh-dfy__actions","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-dfy__actions">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbh-btn bbh-btn--solid bbh-btn--md"} -->
					<div class="wp-block-button bbh-btn bbh-btn--solid bbh-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore DFY</a></div>
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
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbh-dfy__card bbh-dfy__card--app","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-dfy__card bbh-dfy__card--app">
		<!-- wp:group {"className":"bbh-dfy__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-dfy__copy">
			<!-- wp:group {"className":"bbh-dfy__intro","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-dfy__intro">
				<!-- wp:heading {"level":3,"className":"bbh-h4"} -->
				<h3 class="wp-block-heading bbh-h4">App DFY</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbh-body-sm"} -->
				<p class="bbh-body-sm">BuddyBoss Memberships is built in, so a second plugin is optional. Sell one-time or recurring plans through Stripe. BuddyBoss takes 2.9% on Start and nothing on Launch or Scale.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<ul class="bbh-dfy__list"><li>App Launch (iOS and Android)</li><li>Done For You Setup</li><li>Monthly Maintenance</li><li>App Store Graphics (6-monthly)</li><li>Feature Configuration Support</li></ul>
			<!-- /wp:html -->
			<!-- wp:group {"className":"bbh-dfy__actions","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-dfy__actions">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbh-btn bbh-btn--solid bbh-btn--md"} -->
					<div class="wp-block-button bbh-btn bbh-btn--solid bbh-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore DFY</a></div>
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
		<!-- wp:group {"className":"bbh-dfy__panel","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-dfy__panel">
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbh_img . 'hp-dfy-app.png' ); ?>" alt="Three BuddyBoss mobile app screens — a course catalogue, an activity feed post and a group directory — with maintenance, upload and design badges around them"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
