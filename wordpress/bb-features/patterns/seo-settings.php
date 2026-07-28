<?php
/**
 * Title: Features — SEO Settings
 * Slug: bb-features/seo-settings
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
		<!-- wp:group {"className":"bbf-halves","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-halves">
			<!-- wp:group {"className":"bbf-halves__copy bbf-reveal bbf-reveal--left","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-halves__copy bbf-reveal bbf-reveal--left">
				<!-- wp:group {"className":"bbf-halves__intro","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-halves__intro">
					<!-- wp:group {"className":"bbf-halves__intro-head","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-halves__intro-head">
						<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">SEO Settings</p><!-- /wp:paragraph -->
						<!-- wp:heading {"className":"bbf-h3"} --><h2 class="wp-block-heading bbf-h3">Built-in SEO tools</h2><!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Improve your community's visibility with built-in SEO settings that help search engines discover, index, and rank your content more effectively.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
				<ul class="wp-block-list bbf-checks bbf-stagger">
					<!-- wp:list-item --><li><strong>SEO title &amp; description</strong> — control your search snippet</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Open graph</strong> — rich previews when shared</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Activity title templates</strong> — dynamic tags per post</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Indexing controls</strong> — choose what Google sees</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Clean permalinks</strong> — custom slugs site-wide</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
					<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore More Member Profiles</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"className":"bbf-halves__art bbf-reveal bbf-reveal--right"} -->
			<figure class="wp-block-image bbf-halves__art bbf-reveal bbf-reveal--right"><img src="<?php echo esc_url( $bbf_img . 'panel-seo.png' ); ?>" alt="SEO title and description settings with the resulting search snippet"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
