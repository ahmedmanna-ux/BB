<?php
/**
 * Title: Module — Readylaunch
 * Slug: bb-features/ap-readylaunch
 * Categories: bb-module-pages
 * Description: The interface that ships with the Platform
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-edge--blue bbm-ap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-edge--blue bbm-ap">
	<!-- wp:group {"className":"bbm-secthead bbm-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-secthead bbm-reveal">
		<!-- wp:html -->
		<span class="bbm-tag"><span>Readylaunch</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbm-h2 bbm-secthead__title"} -->
		<h2 class="wp-block-heading bbm-h2 bbm-secthead__title">The interface that ships with the Platform</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-fcards","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-fcards">
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>readylaunch</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">A finished interface, no theme required</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">ReadyLaunch is a theme-free community interface: a complete, ready-to-use UI wired straight to the BuddyBoss Platform backend. Its two ticks read "Simple management" and "No theme required", and the welcome card’s only action is a Setup Wizard button.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'ap-rl-interface.png' ); ?>" alt="The ReadyLaunch activity feed with its sidebar and widgets"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>BRANDING</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Light mode, dark mode, or both</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm bbm-body-sm--grey"} -->
				<p class="bbm-body-sm bbm-body-sm--grey">Branding is a ReadyLaunch tab. Pick Light Mode, Dark Mode or Both. Choosing Both doubles the fields into light and dark pairs, so you set a logo and a primary colour for each, and members switch modes on BuddyBoss pages.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'ap-rl-branding.png' ); ?>" alt="A ReadyLaunch profile in light and dark mode"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>menu</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Header and sidebar, set from Appearance</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">The Menus tab gives ReadyLaunch its own header menu location, then the left sidebar: switch the seven items — Activity Feed, Members, Groups, Forums, Courses, Messages, Notifications — on or off, drag them into order, and add your own custom links.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'ap-rl-menu.png' ); ?>" alt="The ReadyLaunch menu settings with the sidebar items listed"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>sidebar widget</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Contextual widget design turn on or off</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm bbm-body-sm--grey"} -->
				<p class="bbm-body-sm bbm-body-sm--grey">Branding is a ReadyLaunch tab. Pick Light Mode, Dark Mode or Both. Choosing Both doubles the fields into light and dark pairs, so you set a logo and a primary colour for each, and members switch modes on BuddyBoss pages.</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<ul class="bbm-checks"><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li></ul>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'ap-rl-widgets.png' ); ?>" alt="The contextual sidebar widgets ReadyLaunch can show"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
