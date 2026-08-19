<?php
/**
 * Title: Features — Offload Media
 * Slug: bb-features/offload-media
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
						<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Offload Media</p><!-- /wp:paragraph -->
						<!-- wp:heading {"className":"bbf-h3 bbf-h3--bold"} --><h2 class="wp-block-heading bbf-h3 bbf-h3--bold">Store media files on external storage</h2><!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbf-body bbf-body-sm--grey"} --><p class="bbf-body bbf-body-sm--grey">Reduce server storage and improve performance by offloading media files to cloud storage, ensuring faster loading times and a more scalable community.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
				<ul class="wp-block-list bbf-checks bbf-stagger">
					<!-- wp:list-item --><li><strong>Global CDN</strong> — Cloudflare-fast, worldwide</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Custom domain</strong> — what it does</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Bulk offload</strong> — what it does</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Download back</strong> — what it does</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Smart fallbacks</strong> — what it does</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Cache control</strong> — what it does</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbf-btn bbf-btn--ghost bbf-btn--md"} -->
					<div class="wp-block-button bbf-btn bbf-btn--ghost bbf-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore Offload Media</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"className":"bbf-halves__art bbf-reveal bbf-reveal--left"} -->
			<figure class="wp-block-image bbf-halves__art bbf-reveal bbf-reveal--left"><img src="<?php echo esc_url( $bbf_img . 'panel-offload.png' ); ?>" alt="Media files syncing between a BuddyBoss site and Cloudflare storage"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
