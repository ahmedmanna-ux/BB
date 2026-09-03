<?php
/**
 * Title: Home — Community bento
 * Slug: bb-features/hp-bento1
 * Categories: bb-home
 * Description: COMMUNITY FEATURES head over the seven-tile bento: activity feed, member profile, social groups, forums, moderation, private messaging and reactions.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-bento","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-bento">
	<!-- wp:group {"className":"bbh-bento__head","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-bento__head">
		<!-- wp:html -->
		<span class="bbh-tag"><span>Community Features</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbh-h2 bbh-bento__title"} -->
		<h2 class="wp-block-heading bbh-h2 bbh-bento__title">A social network on your own WordPress site</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"bbh-bento__lede"} -->
		<p class="bbh-bento__lede">Build online communities, membership sites, and social learning platforms with profiles, groups, forums, activity feeds, messaging, notifications, media sharing, courses, gamification, and mobile apps</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbh-bento__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-bento__grid">
		<!-- wp:group {"className":"bbh-bento__row bbh-bento__row--a","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-bento__row bbh-bento__row--a">
			<!-- wp:group {"className":"bbh-tile bbh-tile--feed","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-tile bbh-tile--feed">
				<!-- wp:group {"className":"bbh-tile__wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-tile__wrap">
					<!-- wp:heading {"level":3,"className":"bbh-h5 bbh-tile__title"} -->
					<h3 class="wp-block-heading bbh-h5 bbh-tile__title">Activity feed</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-body-md bbh-tile__text"} -->
					<p class="bbh-body-md bbh-tile__text">Personalized activity feeds with posts, comments, likes, and @mentions — the heartbeat of your community, free from algorithms.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
				<img class="bbh-tile__art" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-activity.png' ) ); ?>" alt="" aria-hidden="true"/>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-bento__col","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-bento__col">
				<!-- wp:group {"className":"bbh-tile bbh-tile--profile","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-tile bbh-tile--profile">
					<!-- wp:group {"className":"bbh-tile__wrap","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-tile__wrap">
						<!-- wp:heading {"level":3,"className":"bbh-h6 bbh-tile__title"} -->
						<h3 class="wp-block-heading bbh-h6 bbh-tile__title">Member profile</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"className":"bbh-body-sm bbh-tile__text"} -->
						<p class="bbh-body-sm bbh-tile__text">Granular permissions, access controls, and moderation tools.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:html -->
					<img class="bbh-tile__art" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-profile.png' ) ); ?>" alt="" aria-hidden="true"/>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-bento__pair","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bento__pair">
					<!-- wp:group {"className":"bbh-tile bbh-tile--groups","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-tile bbh-tile--groups">
						<!-- wp:group {"className":"bbh-tile__wrap","layout":{"type":"default"}} -->
						<div class="wp-block-group bbh-tile__wrap">
							<!-- wp:heading {"level":3,"className":"bbh-h6 bbh-tile__title"} -->
							<h3 class="wp-block-heading bbh-h6 bbh-tile__title">Social groups</h3>
							<!-- /wp:heading -->
							<!-- wp:paragraph {"className":"bbh-body-sm bbh-tile__text"} -->
							<p class="bbh-body-sm bbh-tile__text">Organize members by interest, topic, or cohort.</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
						<!-- wp:html -->
						<img class="bbh-tile__art" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-groups.png' ) ); ?>" alt="" aria-hidden="true"/>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbh-tile bbh-tile--forums","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-tile bbh-tile--forums">
						<!-- wp:group {"className":"bbh-tile__wrap","layout":{"type":"default"}} -->
						<div class="wp-block-group bbh-tile__wrap">
							<!-- wp:heading {"level":3,"className":"bbh-h6 bbh-tile__title"} -->
							<h3 class="wp-block-heading bbh-h6 bbh-tile__title">Forums</h3>
							<!-- /wp:heading -->
							<!-- wp:paragraph {"className":"bbh-body-sm bbh-tile__text"} -->
							<p class="bbh-body-sm bbh-tile__text">Organize members by interest, topic, or cohort.</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
						<!-- wp:html -->
						<img class="bbh-tile__art" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-forums.png' ) ); ?>" alt="" aria-hidden="true"/>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-bento__row bbh-bento__row--b","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-bento__row bbh-bento__row--b">
			<!-- wp:group {"className":"bbh-tile bbh-tile--wide","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-tile bbh-tile--wide">
				<!-- wp:group {"className":"bbh-tile__wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-tile__wrap">
					<!-- wp:heading {"level":3,"className":"bbh-h6 bbh-tile__title"} -->
					<h3 class="wp-block-heading bbh-h6 bbh-tile__title">Moderation</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-body-sm bbh-tile__text"} -->
					<p class="bbh-body-sm bbh-tile__text">Member &amp; content blocking with auto-block hide</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
				<img class="bbh-tile__art" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-moderation.png' ) ); ?>" alt="" aria-hidden="true"/>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-tile bbh-tile--wide","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-tile bbh-tile--wide">
				<!-- wp:group {"className":"bbh-tile__wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-tile__wrap">
					<!-- wp:heading {"level":3,"className":"bbh-h6 bbh-tile__title"} -->
					<h3 class="wp-block-heading bbh-h6 bbh-tile__title">Private messaging</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-body-sm bbh-tile__text"} -->
					<p class="bbh-body-sm bbh-tile__text">One to one or group chats with file sharing</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
				<img class="bbh-tile__art" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-messaging.png' ) ); ?>" alt="" aria-hidden="true"/>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-tile bbh-tile--wide","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-tile bbh-tile--wide">
				<!-- wp:group {"className":"bbh-tile__wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-tile__wrap">
					<!-- wp:heading {"level":3,"className":"bbh-h6 bbh-tile__title"} -->
					<h3 class="wp-block-heading bbh-h6 bbh-tile__title">Like &amp; Reactions</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-body-sm bbh-tile__text"} -->
					<p class="bbh-body-sm bbh-tile__text">Granular permissions, access controls, and ipsum</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
				<img class="bbh-tile__art" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-bento-reactions.png' ) ); ?>" alt="" aria-hidden="true"/>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbh-bento__cta","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-bento__cta">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"bbh-btn bbh-btn--ghost bbh-btn--lg"} -->
			<div class="wp-block-button bbh-btn bbh-btn--ghost bbh-btn--lg"><a class="wp-block-button__link wp-element-button" href="#">See All Features</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
