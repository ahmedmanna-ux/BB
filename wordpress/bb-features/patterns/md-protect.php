<?php
/**
 * Title: Module — Protect
 * Slug: bb-features/md-protect
 * Categories: bb-module-pages
 * Description: Section head, a pair, a split card, then a left-aligned sub-head over a nine-card grid of reportable content types.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-edge--peach","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-edge--peach">
	<!-- wp:group {"className":"bbm-secthead bbm-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-secthead bbm-reveal">
		<!-- wp:html -->
		<span class="bbm-tag"><span>Protect</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbm-h2 bbm-secthead__title"} -->
		<h2 class="wp-block-heading bbm-h2 bbm-secthead__title">The first move belongs to members</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-fcards","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-fcards">
		<!-- wp:group {"className":"bbm-fduo","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fduo">
			<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--left","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--left">
				<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-fcard__copy">
					<!-- wp:html -->
					<span class="bbm-tag"><span>Member Blocking</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">Members can hide anyone</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">A member who blocks someone stops seeing them — their profile and all of their content disappear from view. It’s a personal setting: no ticket to file, nothing for you to approve.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'md-pr-blocking.png' ); ?>" alt="A member card with its menu open on Report and Block"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right">
				<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-fcard__copy">
					<!-- wp:html -->
					<span class="bbm-tag"><span>Blocked Members</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">Members keep their own blocklist</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">Everyone a member has blocked is listed in their account settings, each with an Unblock button beside it. Undoing a block is theirs to do — it never becomes a support request for you.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'md-pr-blocklist.png' ); ?>" alt="A member’s blocklist, each name with an Unblock button"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>Member Reporting</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Report members, not just individual posts</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Some problems aren’t one bad comment — they’re a pattern across many. Member reporting lets a member flag another member against your reporting categories and send it straight to administrators, where it lands beside every block that member has already collected.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'md-pr-reporting.png' ); ?>" alt="A feed post with its menu open on Report member"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-subhead bbm-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-subhead bbm-reveal">
		<!-- wp:html -->
		<span class="bbm-tag"><span>Content Reporting</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":3,"className":"bbm-subhead__title"} -->
		<h3 class="wp-block-heading bbm-subhead__title">A switch for each content type reporting</h3>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-gridcards bbm-stagger","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-gridcards bbm-stagger">
		<!-- wp:group {"className":"bbm-gridcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-gridcard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/md-ic-activity.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":4,"className":"bbm-gridcard__title"} -->
			<h4 class="wp-block-heading bbm-gridcard__title">Activity</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-gridcard__text"} -->
			<p class="bbm-gridcard__text">Posts in the community feed.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-gridcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-gridcard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/md-ic-activity-comments.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":4,"className":"bbm-gridcard__title"} -->
			<h4 class="wp-block-heading bbm-gridcard__title">Activity Comments</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-gridcard__text"} -->
			<p class="bbm-gridcard__text">Replies underneath any feed post.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-gridcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-gridcard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/md-ic-groups.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":4,"className":"bbm-gridcard__title"} -->
			<h4 class="wp-block-heading bbm-gridcard__title">Groups</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-gridcard__text"} -->
			<p class="bbm-gridcard__text">The group itself, not just its posts.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-gridcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-gridcard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/md-ic-forums.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":4,"className":"bbm-gridcard__title"} -->
			<h4 class="wp-block-heading bbm-gridcard__title">Forums</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-gridcard__text"} -->
			<p class="bbm-gridcard__text">A whole forum, reportable.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-gridcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-gridcard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/md-ic-forum-discussions.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":4,"className":"bbm-gridcard__title"} -->
			<h4 class="wp-block-heading bbm-gridcard__title">Forum Discussions</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-gridcard__text"} -->
			<p class="bbm-gridcard__text">Individual threads.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-gridcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-gridcard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/md-ic-forum-replies.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":4,"className":"bbm-gridcard__title"} -->
			<h4 class="wp-block-heading bbm-gridcard__title">Forum Replies</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-gridcard__text"} -->
			<p class="bbm-gridcard__text">Single replies inside a thread.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-gridcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-gridcard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/md-ic-photos.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":4,"className":"bbm-gridcard__title"} -->
			<h4 class="wp-block-heading bbm-gridcard__title">Photos</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-gridcard__text"} -->
			<p class="bbm-gridcard__text">Images in feeds, groups and albums.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-gridcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-gridcard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/md-ic-videos.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":4,"className":"bbm-gridcard__title"} -->
			<h4 class="wp-block-heading bbm-gridcard__title">Videos</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-gridcard__text"} -->
			<p class="bbm-gridcard__text">Uploaded video.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-gridcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-gridcard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/md-ic-documents.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":4,"className":"bbm-gridcard__title"} -->
			<h4 class="wp-block-heading bbm-gridcard__title">Documents</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-gridcard__text"} -->
			<p class="bbm-gridcard__text">Files members upload.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
