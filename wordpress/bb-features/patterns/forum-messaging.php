<?php
/**
 * Title: Features — Forum Discussions + Private Messaging
 * Slug: bb-features/forum-messaging
 * Categories: bb-features
 * Description: Two stacked cards side by side, artwork above the copy.
 *
 * @package BB_Features
 */

$bbf_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-section">
	<!-- wp:group {"className":"bbf-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-shell">
		<!-- wp:group {"className":"bbf-duo","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-duo">
			<!-- wp:group {"className":"bbf-duo__card bbf-reveal bbf-reveal--left","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-duo__card bbf-reveal bbf-reveal--left">
				<!-- wp:image {"className":"bbf-duo__panel"} -->
				<figure class="wp-block-image bbf-duo__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-forum.png' ); ?>" alt="A forum discussion thread with nested replies"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"bbf-duo__body","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-duo__body">
					<!-- wp:group {"className":"bbf-duo__intro","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-duo__intro">
						<!-- wp:group {"className":"bbf-duo__intro-head","layout":{"type":"default"}} -->
						<div class="wp-block-group bbf-duo__intro-head">
							<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Forum Discussions</p><!-- /wp:paragraph -->
							<!-- wp:heading {"className":"bbf-h3"} --><h2 class="wp-block-heading bbf-h3">Discussions worth keeping</h2><!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
						<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Create organized discussion spaces where members can ask questions, share knowledge, exchange ideas, and build a searchable knowledge base through meaningful conversations.</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
						<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore Forum Discussions</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbf-duo__card bbf-reveal bbf-reveal--right","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-duo__card bbf-reveal bbf-reveal--right">
				<!-- wp:image {"className":"bbf-duo__panel"} -->
				<figure class="wp-block-image bbf-duo__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-messaging.png' ); ?>" alt="A private message thread with the composer open"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"bbf-duo__body","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-duo__body">
					<!-- wp:group {"className":"bbf-duo__intro","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-duo__intro">
						<!-- wp:group {"className":"bbf-duo__intro-head","layout":{"type":"default"}} -->
						<div class="wp-block-group bbf-duo__intro-head">
							<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Private Messaging</p><!-- /wp:paragraph -->
							<!-- wp:heading {"className":"bbf-h3"} --><h2 class="wp-block-heading bbf-h3">Say more with a message</h2><!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
						<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Keep conversations inside your community with private one-to-one and group messaging. Share photos, videos, audio, and files while giving you full control over who can message whom.</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
						<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore Private Messaging</a></div>
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
</div>
<!-- /wp:group -->
