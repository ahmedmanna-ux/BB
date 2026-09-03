<?php
/**
 * Title: Home — Gamification split
 * Slug: bb-features/hp-gamification
 * Categories: bb-home
 * Description: Blue split: points, achievements and ranks blocks beside the gamification artwork panel.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-split bbh-split--blue","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-split bbh-split--blue">
	<!-- wp:group {"className":"bbh-split__head","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-split__head">
		<!-- wp:html -->
		<span class="bbh-tag"><span>gamification</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbh-h2"} -->
		<h2 class="wp-block-heading bbh-h2">Reward the behavior you want</h2>
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
			<!-- wp:group {"className":"bbh-split__blocks","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-split__blocks">
				<!-- wp:group {"className":"bbh-split__block","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-split__block">
					<!-- wp:heading {"level":3,"className":"bbh-h5"} -->
					<h3 class="wp-block-heading bbh-h5">Points</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Run several point currencies at once. Award or deduct them on actions, with frequency caps and triggers limited to chosen profile types.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-split__block","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-split__block">
					<!-- wp:heading {"level":3,"className":"bbh-h5"} -->
					<h3 class="wp-block-heading bbh-h5">Achievements</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Trigger on actions, point totals, ranks, or other achievements — so badges can chain into each other.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-split__block","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-split__block">
					<!-- wp:heading {"level":3,"className":"bbh-h5"} -->
					<h3 class="wp-block-heading bbh-h5">Ranks</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Members climb levels that unlock hidden social groups and courses.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-split__actions","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-split__actions">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbh-btn bbh-btn--solid bbh-btn--md"} -->
					<div class="wp-block-button bbh-btn bbh-btn--solid bbh-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore Gamification</a></div>
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
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbh_img . 'hp-gamification-panel.png' ); ?>" alt="A BuddyBoss member profile with gems and engagement points beside an achievements grid and a rank unlock message"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
