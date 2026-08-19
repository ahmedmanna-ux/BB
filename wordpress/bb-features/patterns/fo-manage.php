<?php
/**
 * Title: Module — Manage
 * Slug: bb-features/fo-manage
 * Categories: bb-module-pages
 * Description: Section head and the cards on edit windows, throttles, page sizes and the wp-admin list.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-edge--peach bbm-manage bbm-fo","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-edge--peach bbm-manage bbm-fo">
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
		<!-- wp:group {"className":"bbm-fduo","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fduo">
			<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--left","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--left">
				<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-fcard__copy">
					<!-- wp:html -->
					<span class="bbm-tag"><span>disallow editing after</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">An editing window that keeps threads honest</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">Disallow editing after a set number of minutes (default 5), so replies can’t be rewritten after the conversation has moved on. Typos get fixed; history stays intact.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-mg-editing.png' ); ?>" alt="The Disallow Editing After setting above an open Edit reply dialog"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right">
				<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-fcard__copy">
					<!-- wp:html -->
					<span class="bbm-tag"><span>THROTTLE POSTING EVERY</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">Posting throttled to stop the flooders</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">Throttle posting every few seconds (default 10) so no member — or bot — can flood a discussion. Regular typing never notices; rapid-fire spam hits a wall.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-mg-throttle.png' ); ?>" alt="The Throttle Posting Every setting above an open reply composer"/></figure>
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
				<span class="bbm-tag"><span>DISCUSSIONS AND REPLIES PER PAGE</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Page sizes tuned for your board’s pace</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Choose how many forums (15), discussions (15), and replies (25) load per page. Long boards stay fast, and the frontend paginates with Prev · 1 2 3 … 15 · Next.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-mg-pagesizes.png' ); ?>" alt="The Discussions and Replies Per Page settings over a paginated forum listing"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>PER RSS PAGE</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">RSS feeds sized separately from your pages</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Set how many discussions (15) and replies (25) appear per RSS page — feed readers get their own pagination, independent of the site. Subscribers stay current without hammering your server.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-mg-rss.png' ); ?>" alt="The Discussions and Replies Per RSS Page settings"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>manage forums</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Admin lists that run every board from wp-admin</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Forums, Discussions, Discussion Tags, and Replies — four managed lists with search, filters, sort, and bulk edit. Row quick-actions reach Spam, Close, and Trash without leaving the queue.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-mg-adminlists.png' ); ?>" alt="The wp-admin Forums list with its filters, quick actions and row menus"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
