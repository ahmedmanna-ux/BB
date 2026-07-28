<?php
/**
 * Title: Features — Courses
 * Slug: bb-features/courses
 * Categories: bb-features
 * Description: Split card for BuddyBoss Courses. Copy is still placeholder in the source design.
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
			<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">BuddyBoss Courses</p><!-- /wp:paragraph -->
			<!-- wp:heading {"className":"bbf-h2"} --><h2 class="wp-block-heading bbf-h2">Power of native courses</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbf-split bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-split bbf-reveal">
			<!-- wp:group {"className":"bbf-split__body bbf-split__body--airy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-split__body bbf-split__body--airy">
				<!-- wp:group {"className":"bbf-split__intro","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-split__intro">
					<!-- wp:heading {"level":3,"className":"bbf-h5"} --><h3 class="wp-block-heading bbf-h5">Create public, private, and hidden groups with dedicated feeds, forums, messaging, and subgroups.</h3><!-- /wp:heading -->
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
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
					<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore Courses</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"className":"bbf-split__panel"} -->
			<figure class="wp-block-image bbf-split__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-courses.png' ); ?>" alt="The BuddyBoss courses experience"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
