<?php
/**
 * Title: Features — Membership
 * Slug: bb-features/membership
 * Categories: bb-features
 * Description: Split card for BuddyBoss Membership, with the layered admin/front-end panel. Copy is still placeholder in the source design.
 *
 * @package BB_Features
 */

$bbf_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-section">
	<!-- wp:group {"className":"bbf-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-shell">
		<!-- wp:group {"className":"bbf-head bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-head bbf-reveal">
			<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">BuddyBoss Membership</p><!-- /wp:paragraph -->
			<!-- wp:heading {"className":"bbf-h2"} --><h2 class="wp-block-heading bbf-h2">Membership with 0% fees</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbf-split bbf-split--green bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-split bbf-split--green bbf-reveal">
			<!-- wp:group {"className":"bbf-split__body bbf-split__body--airy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-split__body bbf-split__body--airy">
				<!-- wp:group {"className":"bbf-split__intro","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-split__intro">
					<!-- wp:heading {"level":3,"className":"bbf-h5"} --><h3 class="wp-block-heading bbf-h5">Enjoy features like video conferencing, webinars, and interactive sessions directly within your platform.</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">A classic Like, or up to six expressive emotions — members react to posts, comments, blogs, and private messages.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
				<ul class="wp-block-list bbf-checks bbf-stagger">
					<!-- wp:list-item --><li><strong>Feature name</strong> — what it does</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Feature name</strong> — what it does</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Feature name</strong> — what it does</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Feature name</strong> — what it does</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbf-split__panel bbf-memb-art","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-split__panel bbf-memb-art">
				<!-- wp:group {"className":"bbf-memb-art__glow","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-memb-art__glow"></div>
				<!-- /wp:group -->
				<!-- wp:image {"className":"bbf-memb-art__shot bbf-memb-art__shot--back"} -->
				<figure class="wp-block-image bbf-memb-art__shot bbf-memb-art__shot--back"><img src="<?php echo esc_url( $bbf_img . 'memb-shot-back.png' ); ?>" alt="Membership options in the WordPress admin"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"className":"bbf-memb-art__shot bbf-memb-art__shot--front"} -->
				<figure class="wp-block-image bbf-memb-art__shot bbf-memb-art__shot--front"><img src="<?php echo esc_url( $bbf_img . 'memb-shot-front.png' ); ?>" alt="Bronze and Gold membership tiers on the front end"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
