<?php
/**
 * Title: Features — Social Groups
 * Slug: bb-features/social-groups
 * Categories: bb-features
 * Description: Split card with the blue accent border for the Social Groups module.
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
			<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Social Groups</p><!-- /wp:paragraph -->
			<!-- wp:heading {"className":"bbf-h2"} --><h2 class="wp-block-heading bbf-h2">Big community, small groups</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbf-split bbf-split--blue bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-split bbf-split--blue bbf-reveal">
			<!-- wp:group {"className":"bbf-split__body bbf-split__body--airy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-split__body bbf-split__body--airy">
				<!-- wp:group {"className":"bbf-split__intro","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-split__intro">
					<!-- wp:heading {"level":3,"className":"bbf-h5"} --><h3 class="wp-block-heading bbf-h5">Bring members together in social groups — public, private, or hidden</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Create dedicated spaces where members connect around shared interests, collaborate, share content, and build stronger communities.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
				<ul class="wp-block-list bbf-checks bbf-stagger">
					<!-- wp:list-item --><li><strong>Group privacy</strong> — control who sees and joins</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Group feed</strong> — every group gets its own</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Roles &amp; permissions</strong> — decide who posts and invites</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Group types</strong> — reach every member at once</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Zoom meetings</strong> — schedule and sync inside groups</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Group messages</strong> — reach every member at once</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbf-btn bbf-btn--ghost"} -->
					<div class="wp-block-button bbf-btn bbf-btn--ghost"><a class="wp-block-button__link wp-element-button" href="#">Explore Social Groups</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"className":"bbf-split__panel"} -->
			<figure class="wp-block-image bbf-split__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-groups.png' ); ?>" alt="A BuddyBoss group page showing organizers, members and group cards"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
