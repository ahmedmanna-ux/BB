<?php
/**
 * Title: Features — Activity Feeds
 * Slug: bb-features/activity-feeds
 * Categories: bb-features
 * Description: Headline plus a bordered split card — checklist on the left, product artwork on the right.
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
			<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Activity Feeds</p><!-- /wp:paragraph -->
			<!-- wp:heading {"className":"bbf-h2"} --><h2 class="wp-block-heading bbf-h2">Activity feeds that feels alive</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbf-split bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-split bbf-reveal">
			<!-- wp:group {"className":"bbf-split__body","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-split__body">
				<!-- wp:group {"className":"bbf-split__intro","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-split__intro">
					<!-- wp:heading {"level":3,"className":"bbf-h5"} --><h3 class="wp-block-heading bbf-h5">Keep members engaged with a personalized activity feed</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Give members a familiar social space to share updates, discover conversations, and stay connected with the people and communities that matter most.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
				<ul class="wp-block-list bbf-checks bbf-stagger">
					<!-- wp:list-item --><li><strong>Personalized feed</strong> — only posts that matter</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Pinned posts</strong> — keep key posts on top</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Scheduled posts</strong> — write now, publish later</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Polls</strong> — ask, vote, decide</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Activity topics</strong> — organize the feed</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Threaded comments</strong> — replies stay organized</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Auto refresh</strong> — never miss a post</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Post sharing</strong> — share anywhere, even WhatsApp</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbf-btn bbf-btn--ghost bbf-btn--md"} -->
					<div class="wp-block-button bbf-btn bbf-btn--ghost bbf-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore Activity Feeds</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"className":"bbf-split__panel"} -->
			<figure class="wp-block-image bbf-split__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-feed.png' ); ?>" alt="BuddyBoss activity feed with post composer, reactions and a live poll"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
