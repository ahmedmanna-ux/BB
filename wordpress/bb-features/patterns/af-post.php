<?php
/**
 * Title: Module — Post
 * Slug: bb-features/af-post
 * Categories: bb-module-pages
 * Description: Section head, three split cards and a row of three mini cards.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-post","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-post">
	<!-- wp:group {"className":"bbm-secthead bbm-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-secthead bbm-reveal">
		<!-- wp:html -->
		<span class="bbm-tag"><span>Post</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbm-h2 bbm-secthead__title"} -->
		<h2 class="wp-block-heading bbm-h2 bbm-secthead__title">Create better posts, build stronger communities</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-fcards","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-fcards">
		<!-- wp:group {"className":"bbm-fduo bbm-fduo--wide","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fduo bbm-fduo--wide">
			<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--left","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--left">
				<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-fcard__copy">
					<!-- wp:html -->
					<span class="bbm-tag"><span>Schedule Posts</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">Write now, publish on time</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">Group owners and moderators write now and publish later. The "Scheduled posts" queue shows each post with its date — Edit post or Edit schedule any time before it goes live.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'af-schedule.png' ); ?>" alt="A date picker scheduling a post for a future date"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right">
				<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-fcard__copy">
					<!-- wp:html -->
					<span class="bbm-tag"><span>Pin Posts</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">Pinned posts stays on top</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">Group owners and moderators can pin posts — one admin switch. "Pin to feed" sits right in the post menu.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'af-pinned.png' ); ?>" alt="The post menu with Pin to feed and Report post"/></figure>
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
				<span class="bbm-tag"><span>Polls</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Polls the community answers right in the feed</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Group owners and moderators drop a poll straight into the composer — live vote counts, with a closing date. Votes land where the conversation already is.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'af-polls.png' ); ?>" alt="A poll in the composer with live vote counts"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>Post Feature Image</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Cover images that turn updates into articles</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Group owners and moderators can add a featured image to a post. The composer’s "Add Feature Image" dropzone takes a click or a drag-and-drop — the post lands looking editorial.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'af-cover.png' ); ?>" alt="A post with a wide cover image above the text"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-minicards bbm-stagger","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-minicards bbm-stagger">
		<!-- wp:group {"className":"bbm-minicard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-minicard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/feat-filetext.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"bbm-minicard__title"} -->
			<h3 class="wp-block-heading bbm-minicard__title">Edit Activity</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-minicard__text"} -->
			<p class="bbm-minicard__text">Members fix a typo or reword a post right from its menu, inside the edit window you set — thirty minutes up to forever. The feed stays accurate without a moderator in the loop.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-minicard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-minicard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/mod-messaging.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"bbm-minicard__title"} -->
			<h3 class="wp-block-heading bbm-minicard__title">Close Comments</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-minicard__text"} -->
			<p class="bbm-minicard__text">Authors and admins hit "Turn off commenting" right in the post menu. The conversation ends on purpose.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-minicard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-minicard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/feat-filetext.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"bbm-minicard__title"} -->
			<h3 class="wp-block-heading bbm-minicard__title">Post Title</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-minicard__text"} -->
			<p class="bbm-minicard__text">The composer carries a "Title (optional)" field you can make mandatory. Required titles turn the whole feed editorial.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
