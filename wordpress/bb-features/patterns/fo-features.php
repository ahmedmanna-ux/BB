<?php
/**
 * Title: Module — Forum features
 * Slug: bb-features/fo-features
 * Categories: bb-module-pages
 * Description: Section head and five cards: favorites, discussion tags, the revision log, search and post formatting.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-edge--blue bbm-ff bbm-fo","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-edge--blue bbm-ff bbm-fo">
	<!-- wp:group {"className":"bbm-secthead bbm-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-secthead bbm-reveal">
		<!-- wp:html -->
		<span class="bbm-tag"><span>forum features</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbm-h2 bbm-secthead__title"} -->
		<h2 class="wp-block-heading bbm-h2 bbm-secthead__title">Every group, dressed for your community</h2>
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
					<span class="bbm-tag"><span>favorites</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">Save your favorite discussions</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">Allow members to mark discussions as favorites with one click in the thread header — and the forum header carries a Favorite button of its own, so whole boards can be bookmarked too.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-ff-favorites.png' ); ?>" alt="A discussion header with its Favorite and Subscribe buttons"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right">
				<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-fcard__copy">
					<!-- wp:html -->
					<span class="bbm-tag"><span>discussion tags</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">Tags that cross-cut every board</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">Allow members to mark discussions as favorites with one click in the thread header — and the forum header carries a Favorite button of its own, so whole boards can be bookmarked too.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-ff-tags.png' ); ?>" alt="Two discussions carrying shared topic tags under their titles"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>revision log</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Revision logs for every discussion and reply</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Allow discussion and reply revision logging, so every edit leaves a trail. When members edit, the thread shows “Last edited 10 minutes ago” right beside the timestamp.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-ff-revisions.png' ); ?>" alt="A discussion showing its edit history beside the post timestamp"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-reveal bbm-fo__card--564","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-reveal bbm-fo__card--564">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>search</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Forum-wide search across every board</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Allow forum-wide search, and every forum, discussion, and reply becomes findable. It plugs into the community’s global search — one query, the whole archive.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-ff-search.png' ); ?>" alt="A search panel returning forums, discussions and replies for one query"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>post formatting</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">A formatting toolbar for real writing</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Add a toolbar and buttons to text areas to help with HTML formatting — bold, italics, lists, quotes, links, and code. The frontend composer adds photos, video, attachments, GIFs, emoji, and @mentions.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'fo-ff-formatting.png' ); ?>" alt="The new-discussion composer with its formatting toolbar and attachment buttons"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
