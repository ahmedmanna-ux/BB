<?php
/**
 * Title: Features — Media Uploads
 * Slug: bb-features/media-uploads
 * Categories: bb-features
 * Description: Wide artwork panel with a four-column feature row beneath it.
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
			<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Media Uploads</p><!-- /wp:paragraph -->
			<!-- wp:heading {"className":"bbf-h2"} --><h2 class="wp-block-heading bbf-h2">Share every media type</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbf-stack bbf-stack--blue bbf-stack--narrow bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-stack bbf-stack--blue bbf-stack--narrow bbf-reveal">
			<!-- wp:image {"className":"bbf-stack__panel"} -->
			<figure class="wp-block-image bbf-stack__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-media.png' ); ?>" alt="Photo grid, video post and the document uploader in the post composer"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"bbf-features bbf-stagger","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-features bbf-stagger">
				<!-- wp:group {"className":"bbf-feature bbf-f--video","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-feature bbf-f--video">
					<!-- wp:heading {"level":3,"className":"bbf-feature__title"} --><h3 class="wp-block-heading bbf-feature__title">Media types</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbf-feature__text"} --><p class="bbf-feature__text">Support photos, videos, audio, documents, and more, giving members more ways to share.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbf-feature bbf-f--images","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-feature bbf-f--images">
					<!-- wp:heading {"level":3,"className":"bbf-feature__title"} --><h3 class="wp-block-heading bbf-feature__title">Media albums</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbf-feature__text"} --><p class="bbf-feature__text">Organize photos and videos into albums, making media easier to upload, browse, and manage.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbf-feature bbf-f--upload","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-feature bbf-f--upload">
					<!-- wp:heading {"level":3,"className":"bbf-feature__title"} --><h3 class="wp-block-heading bbf-feature__title">Upload permissions</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbf-feature__text"} --><p class="bbf-feature__text">Control who can upload media with flexible permissions based on roles, profiles, or community settings.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbf-feature bbf-f--filetext","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-feature bbf-f--filetext">
					<!-- wp:heading {"level":3,"className":"bbf-feature__title"} --><h3 class="wp-block-heading bbf-feature__title">File type control</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbf-feature__text"} --><p class="bbf-feature__text">Choose which file formats members can upload to maintain content quality and community security.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbf-stack__cta","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-stack__cta">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbf-btn bbf-btn--ghost bbf-btn--md"} -->
					<div class="wp-block-button bbf-btn bbf-btn--ghost bbf-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore Media Uploads</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
