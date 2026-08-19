<?php
/**
 * Title: Module — Manage
 * Slug: bb-features/sg-manage
 * Categories: bb-module-pages
 * Description: Section head and three split cards on who creates, who joins and group types.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-sg-manage bbm-edge--peach bbm-sg","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-sg-manage bbm-edge--peach bbm-sg">
	<!-- wp:group {"className":"bbm-secthead bbm-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-secthead bbm-reveal">
		<!-- wp:html -->
		<span class="bbm-tag"><span>manage</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbm-h2 bbm-secthead__title"} -->
		<h2 class="wp-block-heading bbm-h2 bbm-secthead__title">Who creates, who joins, who runs it</h2>
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
				<span class="bbm-tag"><span>create groups</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Decide who can create social groups</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Select which members can create groups based on WordPress Role or Profile Type, with a per-role toggle list. Administrators are always exempt — these controls never apply to them.</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<ul class="bbm-checks"><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li></ul>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'sg-create-groups.png' ); ?>" alt="Group creation access settings with a per-role toggle list"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>join groups</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Joining rules for public and private groups</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Select which members can join public groups or request to join private groups, by WordPress Role or Profile Type. On the frontend it’s one button: Join Group on public groups, Request Access on private ones.</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<ul class="bbm-checks"><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li><li><img src="assets/icon/check.svg" alt=""><span><b>Feature name</b> — what it does</span></li></ul>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'sg-join-groups.png' ); ?>" alt="Group joining access settings beside a group card with its Join Group button"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>group types</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Group types that organize the whole network</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">When enabled, group types let you better organize groups — custom labels, per-type role names, directory visibility, and label colors, plus a shortcode to list any type on its own page. Five types or fifty, each one badge-coded.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'sg-group-types.png' ); ?>" alt="The Group Types admin list with labels, colors and visibility"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
