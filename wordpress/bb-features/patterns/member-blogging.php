<?php
/**
 * Title: Features — Member Blogging
 * Slug: bb-features/member-blogging
 * Categories: bb-features
 * Description: Half copy, half artwork.
 *
 * @package BB_Features
 */

$bbf_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-section">
	<!-- wp:group {"className":"bbf-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-shell">
		<!-- wp:group {"className":"bbf-halves bbf-halves--flip","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-halves bbf-halves--flip">
			<!-- wp:group {"className":"bbf-halves__copy bbf-reveal bbf-reveal--right","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-halves__copy bbf-reveal bbf-reveal--right">
				<!-- wp:group {"className":"bbf-halves__intro","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-halves__intro">
					<!-- wp:group {"className":"bbf-halves__intro-head","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-halves__intro-head">
						<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Member Blogging</p><!-- /wp:paragraph -->
						<!-- wp:heading {"className":"bbf-h3 bbf-h3--bold"} --><h2 class="wp-block-heading bbf-h3 bbf-h3--bold">Your community members write the blog</h2><!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbf-body bbf-body-sm--grey"} --><p class="bbf-body bbf-body-sm--grey">The content you never have to write. Members turn what they know into real articles, and every published post is one more indexable page of user-generated content working for your site.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
				<ul class="wp-block-list bbf-checks bbf-stagger">
					<!-- wp:list-item --><li><strong>Blog creator</strong> — write from the front end</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Block editor</strong> — text, images, galleries, video</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Admin approval</strong> — review before it’s live</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Writer permissions</strong> — who publishes, by role</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Bookmarks</strong> — save posts for later</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Scheduling</strong> — publish now or later</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbf-btn bbf-btn--ghost bbf-btn--md"} -->
					<div class="wp-block-button bbf-btn bbf-btn--ghost bbf-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore Member Blogging</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"className":"bbf-halves__art bbf-reveal bbf-reveal--left"} -->
			<figure class="wp-block-image bbf-halves__art bbf-reveal bbf-reveal--left"><img src="<?php echo esc_url( $bbf_img . 'panel-blogging.png' ); ?>" alt="The front-end blog creator with the block editor and publishing options"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
