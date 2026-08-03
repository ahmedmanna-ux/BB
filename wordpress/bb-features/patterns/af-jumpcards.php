<?php
/**
 * Title: Module — Jump cards
 * Slug: bb-features/af-jumpcards
 * Categories: bb-module-pages
 * Description: Four numbered cards summarising the sections below.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section">
	<!-- wp:group {"className":"bbm-jumpcards bbm-stagger","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-jumpcards bbm-stagger">
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<span class="bbm-jumpcard__num">1</span>
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Discover</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">A feed built around each member</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<span class="bbm-jumpcard__num">2</span>
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Post</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Polls, pins, schedules &amp; more</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<span class="bbm-jumpcard__num">3</span>
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Engage</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Conversations that spread</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<span class="bbm-jumpcard__num">4</span>
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Control</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Every switch in one admin screen</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
