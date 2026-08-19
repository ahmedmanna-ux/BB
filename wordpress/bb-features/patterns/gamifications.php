<?php
/**
 * Title: Features — Gamifications
 * Slug: bb-features/gamifications
 * Categories: bb-features
 * Description: Wide artwork panel with a two-column copy and checklist block beneath it.
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
			<!-- wp:paragraph {"className":"bbf-tag"} --><p class="bbf-tag">Gamifications</p><!-- /wp:paragraph -->
			<!-- wp:heading {"className":"bbf-h2"} --><h2 class="wp-block-heading bbf-h2">Gamify your commmunity</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbf-stack bbf-stack--tight bbf-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbf-stack bbf-stack--tight bbf-reveal">
			<!-- wp:image {"className":"bbf-stack__panel"} -->
			<figure class="wp-block-image bbf-stack__panel"><img src="<?php echo esc_url( $bbf_img . 'panel-gamification.png' ); ?>" alt="Achievement cards, a rank unlock modal and a member card with badges"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"bbf-stack__split","layout":{"type":"default"}} -->
			<div class="wp-block-group bbf-stack__split">
				<!-- wp:group {"className":"bbf-stack__left","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-stack__left">
					<!-- wp:heading {"level":3,"className":"bbf-h4"} --><h3 class="wp-block-heading bbf-h4">Reward the behavior you want — community gamification built into WordPress</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbf-body"} --><p class="bbf-body">Keep members motivated with points, badges, ranks, and achievements that reward participation, recognize contributions, and encourage long-term community engagement.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbf-stack__right","layout":{"type":"default"}} -->
				<div class="wp-block-group bbf-stack__right">
					<!-- wp:list {"className":"bbf-checks bbf-checks--roomy bbf-stagger"} -->
					<ul class="wp-block-list bbf-checks bbf-checks--roomy bbf-stagger">
						<!-- wp:list-item --><li><strong>Points</strong> — reward the actions you choose</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li><strong>Ranks</strong> — levels members climb</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li><strong>Content unlocks</strong> — courses &amp; hidden groups, per rank</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li><strong>Achievements</strong> — badges for any milestone</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li><strong>Leaderboards</strong> — by point type &amp; timeframe</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li><strong>Profile badges</strong> — progress on display everywhere</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li><strong>Awards page</strong> — the community trophy case</li><!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"bbf-btn bbf-btn--ghost bbf-btn--md"} -->
						<div class="wp-block-button bbf-btn bbf-btn--ghost bbf-btn--md"><a class="wp-block-button__link wp-element-button" href="#">Explore Gamifications</a></div>
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
