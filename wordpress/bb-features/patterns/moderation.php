<?php
/**
 * Title: Features — Moderation
 * Slug: bb-features/moderation
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
						<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Moderation</p><!-- /wp:paragraph -->
						<!-- wp:heading {"className":"bbf-h3"} --><h2 class="wp-block-heading bbf-h3">Automated moderation tools for your community</h2><!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Keep your community safe and welcoming with powerful moderation tools that help manage content, reduce spam, and maintain healthy member interactions.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
				<ul class="wp-block-list bbf-checks bbf-stagger">
					<!-- wp:list-item --><li><strong>Member blocking</strong> — hide anyone, everywhere</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Content reporting</strong> — posts, photos, forums &amp; more</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Reporting categories</strong> — define what's reportable</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Auto-hide</strong> — content hides after enough reports</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Auto suspend</strong> — repeat offenders, handled automatically</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Reported content</strong> — review, hide, or restore</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
					<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore Moderation</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"className":"bbf-halves__art bbf-reveal bbf-reveal--right"} -->
			<figure class="wp-block-image bbf-halves__art bbf-reveal bbf-reveal--right"><img src="<?php echo esc_url( $bbf_img . 'panel-moderation.png' ); ?>" alt="Reported media hidden automatically, with the moderation toggles beside it"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
