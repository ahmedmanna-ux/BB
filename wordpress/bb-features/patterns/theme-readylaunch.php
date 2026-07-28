<?php
/**
 * Title: Features — BuddyBoss Theme + ReadyLaunch
 * Slug: bb-features/theme-readylaunch
 * Categories: bb-features
 * Description: Two product cards for the design layer — the Theme and ReadyLaunch.
 *
 * @package BB_Features
 */

$bbf_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-section">
	<!-- wp:group {"className":"bbf-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-shell">
		<!-- wp:group {"className":"bbf-products","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-products">
			<!-- wp:group {"className":"bbf-product bbf-reveal bbf-reveal--left","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-product bbf-reveal bbf-reveal--left">
				<!-- wp:image {"className":"bbf-product__art"} -->
				<figure class="wp-block-image bbf-product__art"><img src="<?php echo esc_url( $bbf_img . 'panel-theme.png' ); ?>" alt="A community profile page styled with the BuddyBoss Theme"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"bbf-product__body","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-product__body">
					<!-- wp:group {"className":"bbf-product__copy","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-product__copy">
						<!-- wp:heading {"className":"bbf-h3"} --><h2 class="wp-block-heading bbf-h3">BuddyBoss Theme</h2><!-- /wp:heading -->
						<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Take full control of your community's design with a premium BuddyBoss theme, customizing layouts, branding, typography, headers, and member-facing pages to match your brand.</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
						<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore Theme</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbf-product bbf-reveal bbf-reveal--right","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-product bbf-reveal bbf-reveal--right">
				<!-- wp:image {"className":"bbf-product__art"} -->
				<figure class="wp-block-image bbf-product__art"><img src="<?php echo esc_url( $bbf_img . 'panel-readylaunch.png' ); ?>" alt="A ReadyLaunch activity feed with sidebar widgets"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"bbf-product__body","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-product__body">
					<!-- wp:group {"className":"bbf-product__copy","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-product__copy">
						<!-- wp:heading {"className":"bbf-h3"} --><h2 class="wp-block-heading bbf-h3">ReadyLaunch</h2><!-- /wp:heading -->
						<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Launch your community faster with ReadyLaunch, featuring professionally designed templates, customizable layouts, branding options, beautiful widgets, and polished member-facing pages.</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
						<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore ReadyLaunch</a></div>
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
</div>
<!-- /wp:group -->
