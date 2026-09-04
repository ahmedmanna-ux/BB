<?php
/**
 * Title: Home — Pricing
 * Slug: bb-features/hp-pricing
 * Categories: bb-home
 * Description: Closing pricing row: the head beside the BuddyBoss Web and BuddyBoss App plan cards.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-pricing","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-pricing">
	<!-- wp:group {"className":"bbh-pricing__row","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-pricing__row">
		<!-- wp:group {"className":"bbh-pricing__head","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-pricing__head">
			<!-- wp:html -->
			<span class="bbh-tag"><span>Pricing</span></span>
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbh-h3"} -->
			<h2 class="wp-block-heading bbh-h3">Build your community from $99 and your branded app from $99</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbh-body-sm"} -->
			<p class="bbh-body-sm">Everything you need to build and grow an online community, membership site, or social learning platform—with powerful web and mobile experiences.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-pricing__plans","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-pricing__plans">
			<!-- wp:group {"className":"bbh-pricing__plan","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-pricing__plan">
				<!-- wp:group {"className":"bbh-pricing__top","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-pricing__top">
					<!-- wp:group {"className":"bbh-pricing__name","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-pricing__name">
						<!-- wp:html -->
						<span class="bbh-pricing__plate"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-price-web.svg' ) ); ?>" alt="" aria-hidden="true"></span>
						<!-- /wp:html -->
						<!-- wp:paragraph {"className":"bbh-h6 bbh-pricing__product"} -->
						<p class="bbh-h6 bbh-pricing__product">BuddyBoss Web</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-pricing__body","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-pricing__body">
					<!-- wp:paragraph {"className":"bbh-h2 bbh-pricing__price"} -->
					<p class="bbh-h2 bbh-pricing__price"><span class="bbh-pricing__price-lead">Start at</span><span class="bbh-pricing__price-figure">$99<span class="bbh-pricing__price-unit">/year</span></span></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"bbh-body-sm bbh-pricing__note"} -->
					<p class="bbh-body-sm bbh-pricing__note">Build a complete community, membership site, or online learning platform.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbh-btn bbh-btn--solid bbh-btn--lg bbh-btn--noicon"} -->
					<div class="wp-block-button bbh-btn bbh-btn--solid bbh-btn--lg bbh-btn--noicon"><a class="wp-block-button__link wp-element-button" href="#">View Web Pricing</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-pricing__plan","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-pricing__plan">
				<!-- wp:group {"className":"bbh-pricing__top","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-pricing__top">
					<!-- wp:group {"className":"bbh-pricing__name","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-pricing__name">
						<!-- wp:html -->
						<span class="bbh-pricing__plate"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-price-app.svg' ) ); ?>" alt="" aria-hidden="true"></span>
						<!-- /wp:html -->
						<!-- wp:paragraph {"className":"bbh-h6 bbh-pricing__product"} -->
						<p class="bbh-h6 bbh-pricing__product">BuddyBoss App</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-pricing__body","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-pricing__body">
					<!-- wp:paragraph {"className":"bbh-h2 bbh-pricing__price"} -->
					<p class="bbh-h2 bbh-pricing__price"><span class="bbh-pricing__price-lead">Start at</span><span class="bbh-pricing__price-figure">$99<span class="bbh-pricing__price-unit">/month</span></span></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"bbh-body-sm bbh-pricing__note"} -->
					<p class="bbh-body-sm bbh-pricing__note">Launch your branded mobile app for iOS or Android through your own developer account.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbh-btn bbh-btn--solid bbh-btn--lg bbh-btn--noicon"} -->
					<div class="wp-block-button bbh-btn bbh-btn--solid bbh-btn--lg bbh-btn--noicon"><a class="wp-block-button__link wp-element-button" href="#">View App Pricing</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
