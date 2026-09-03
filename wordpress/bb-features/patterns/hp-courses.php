<?php
/**
 * Title: Home — Courses split
 * Slug: bb-features/hp-courses
 * Categories: bb-home
 * Description: Green split: the Courses chapter head, the feature list and the course artwork panel.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-split bbh-split--green","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-split bbh-split--green">
	<!-- wp:group {"className":"bbh-split__head","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-split__head">
		<!-- wp:html -->
		<span class="bbh-tag"><span>courses</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbh-h2"} -->
		<h2 class="wp-block-heading bbh-h2">Teach it, sell it, keep the money</h2>
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
				<p class="bbh-body-sm">BuddyBoss Courses is built into the platform. Build the curriculum, set the work, mark it and take the payment — without buying a second plugin.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<ul class="bbh-split__list"><li>Courses, lessons and topics with drip and prerequisites</li><li>Assignments with deadlines, attachments and a gradebook</li><li>Quizzes with six question types and per-attempt results</li><li>A lesson player with offline downloads in the app</li><li>Progress surfaced across feeds, groups and profiles</li></ul>
			<!-- /wp:html -->
			<!-- wp:group {"className":"bbh-split__actions","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-split__actions">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbh-btn bbh-btn--solid bbh-btn--md"} -->
					<div class="wp-block-button bbh-btn bbh-btn--solid bbh-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore Course</a></div>
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
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $bbh_img . 'hp-courses-panel.png' ); ?>" alt="BuddyBoss course cards showing prices, ratings, enrolment counts and a lesson player"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
