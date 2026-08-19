<?php
/**
 * Title: Features — Member Profiles
 * Slug: bb-features/member-profiles
 * Categories: bb-features
 * Description: Split card with the green accent border for the Member Profiles module.
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
			<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Member Profiles</p><!-- /wp:paragraph -->
			<!-- wp:heading {"className":"bbf-h2"} --><h2 class="wp-block-heading bbf-h2">Every member. more than a username</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbf-split bbf-split--green bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-split bbf-split--green bbf-reveal">
			<!-- wp:group {"className":"bbf-split__body bbf-split__body--airy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-split__body bbf-split__body--airy">
				<!-- wp:group {"className":"bbf-split__intro","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-split__intro">
					<!-- wp:heading {"level":3,"className":"bbf-h5"} --><h3 class="wp-block-heading bbf-h5">Give every member a rich profile — with the fields you define and privacy down to every field</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Members join for the content and stay for the people. Profiles turn a user list into a community — faces, stories, things in common — on a WordPress site you own.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:list {"className":"bbf-checks bbf-stagger"} -->
				<ul class="wp-block-list bbf-checks bbf-stagger">
					<!-- wp:list-item --><li><strong>Profile fields</strong> — custom field types, no code</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Profile types</strong> — unique fields &amp; permissions per type</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Member directory</strong> — searchable grid &amp; list views</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Advanced profile search</strong> — filter by the fields you choose</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Member connections</strong> — connect, follow &amp; message</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>WordPress roles</strong> — auto-assigned per profile type</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><strong>Avatars &amp; covers</strong> — branded defaults, member uploads</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bbf-btn bbf-btn--ghost bbf-btn--md"} -->
					<div class="wp-block-button bbf-btn bbf-btn--ghost bbf-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore Member Profiles</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"className":"bbf-split__panel"} -->
			<figure class="wp-block-image bbf-split__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-profiles.png' ); ?>" alt="A member profile with about fields, connections and a photo cropper"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
