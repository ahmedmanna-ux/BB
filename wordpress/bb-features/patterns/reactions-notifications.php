<?php
/**
 * Title: Features — Reactions + Notifications
 * Slug: bb-features/reactions-notifications
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
				<figure class="wp-block-image bbf-duo__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-reactions.png' ); ?>" alt="An activity post with the emoji reaction bar open"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"bbf-duo__body","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-duo__body">
					<!-- wp:group {"className":"bbf-duo__intro","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-duo__intro">
						<!-- wp:group {"className":"bbf-duo__intro-head","layout":{"type":"default"}} -->
						<div class="wp-block-group bbf-duo__intro-head">
							<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Like &amp; Reactions</p><!-- /wp:paragraph -->
							<!-- wp:heading {"className":"bbf-h3"} --><h2 class="wp-block-heading bbf-h3">Reactions beyond the like button</h2><!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
						<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Encourage everyday engagement with customizable emoji reactions across activity posts, comments, blog posts, and private messages. Choose a simple Like button or up to six emotions to make every interaction more expressive.</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
						<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore Like &amp; Reactions</a></div>
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
				<figure class="wp-block-image bbf-duo__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-notifications.png' ); ?>" alt="The notifications panel with mentions, replies and follows"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"bbf-duo__body","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-duo__body">
					<!-- wp:group {"className":"bbf-duo__intro","layout":{"type":"default"}} -->
					<div class="wp-block-group bbf-duo__intro">
						<!-- wp:group {"className":"bbf-duo__intro-head","layout":{"type":"default"}} -->
						<div class="wp-block-group bbf-duo__intro-head">
							<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Notifications</p><!-- /wp:paragraph -->
							<!-- wp:heading {"className":"bbf-h3"} --><h2 class="wp-block-heading bbf-h3">Notifications, never noise</h2><!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
						<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Keep members engaged with personalized notifications across email, web push, and on-screen alerts. Deliver mentions, replies, and invites while letting members choose how and when they stay informed.</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
						<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore Notifications</a></div>
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
