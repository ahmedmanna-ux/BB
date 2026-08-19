<?php
/**
 * Title: Module — Explore more modules
 * Slug: bb-features/nt-explore
 * Categories: bb-module-pages
 * Description: Three cards linking on to the other module pages.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-nt","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-nt">
	<!-- wp:group {"className":"bbm-secthead bbm-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-secthead bbm-reveal">
		<!-- wp:heading {"level":2,"className":"bbm-h3 bbm-secthead__title"} -->
		<h2 class="wp-block-heading bbm-h3 bbm-secthead__title">Explore more feature modules</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-modcards bbm-stagger","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-modcards bbm-stagger">
		<!-- wp:group {"className":"bbm-modcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-modcard">
			<!-- wp:html -->
			<span class="bbm-modcard__icon"><img src="assets/icon/mod-activity.svg" alt=""></span>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"bbm-modcard__title"} -->
			<h3 class="wp-block-heading bbm-modcard__title">Activity Feed</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-modcard__text"} -->
			<p class="bbm-modcard__text">Everything on a community website revolves around its members. Every user receives a member profile.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"bbm-btn bbm-btn--solid"} -->
				<div class="wp-block-button bbm-btn bbm-btn--solid"><a class="wp-block-button__link wp-element-button" href="activity-feeds.html">Explore More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-modcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-modcard">
			<!-- wp:html -->
			<span class="bbm-modcard__icon"><img src="assets/icon/mp-ic-profiles.svg" alt=""></span>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"bbm-modcard__title"} -->
			<h3 class="wp-block-heading bbm-modcard__title">Member Profiles</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-modcard__text"} -->
			<p class="bbm-modcard__text">Everything on a community website revolves around its members. Every user receives a member profile.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"bbm-btn bbm-btn--solid"} -->
				<div class="wp-block-button bbm-btn bbm-btn--solid"><a class="wp-block-button__link wp-element-button" href="member-profiles.html">Explore More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-modcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-modcard">
			<!-- wp:html -->
			<span class="bbm-modcard__icon"><img src="assets/icon/mod-groups.svg" alt=""></span>
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"bbm-modcard__title"} -->
			<h3 class="wp-block-heading bbm-modcard__title">Forum &amp; Group</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-modcard__text"} -->
			<p class="bbm-modcard__text">Everything on a community website revolves around its members. Every user receives a member profile.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"bbm-btn bbm-btn--solid"} -->
				<div class="wp-block-button bbm-btn bbm-btn--solid"><a class="wp-block-button__link wp-element-button" href="forums.html">Explore More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
