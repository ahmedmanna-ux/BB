<?php
/**
 * Title: Home — What you pay per member
 * Slug: bb-features/hp-facts
 * Categories: bb-home
 * Description: The $0-per-member card and its five no-limit tiles — members, admins, groups, events and courses.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-facts","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-facts">
	<!-- wp:group {"className":"bbh-facts__card","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-facts__card">
		<!-- wp:group {"className":"bbh-facts__head","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-facts__head">
			<!-- wp:paragraph {"className":"bbh-facts__label"} -->
			<p class="bbh-facts__label">WHAT YOU PAY PER MEMBER</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"bbh-facts__figure","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-facts__figure">
				<!-- wp:paragraph {"className":"bbh-h1 bbh-facts__price"} -->
				<p class="bbh-h1 bbh-facts__price">$0</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":2,"className":"bbh-h4 bbh-facts__lede"} -->
			<h2 class="wp-block-heading bbh-h4 bbh-facts__lede">Forever — however big you grow</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:html -->
		<ul class="bbh-facts__tiles"><li class="bbh-facts__tile"><div class="bbh-facts__tile-head"><img class="bbh-facts__icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-inf-members.svg' ) ); ?>" alt="" aria-hidden="true"><h3 class="bbh-h6 bbh-facts__tile-title">Members</h3></div><p class="bbh-body-sm">Freedom to grow your audience without limits — no per-seat pricing, ever.</p></li><li class="bbh-facts__tile bbh-facts__tile--lift"><div class="bbh-facts__tile-head"><img class="bbh-facts__icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-inf-admins.svg' ) ); ?>" alt="" aria-hidden="true"><h3 class="bbh-h6 bbh-facts__tile-title">Admins</h3></div><p class="bbh-body-sm">Grant roles and permissions across your whole team.</p></li><li class="bbh-facts__tile"><div class="bbh-facts__tile-head"><img class="bbh-facts__icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-inf-groups.svg' ) ); ?>" alt="" aria-hidden="true"><h3 class="bbh-h6 bbh-facts__tile-title">Groups</h3></div><p class="bbh-body-sm">Organize members by interests, topics, and projects.</p></li><li class="bbh-facts__tile"><div class="bbh-facts__tile-head"><img class="bbh-facts__icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-inf-events.svg' ) ); ?>" alt="" aria-hidden="true"><h3 class="bbh-h6 bbh-facts__tile-title">Events</h3></div><p class="bbh-body-sm">Bring members together, in-person or online — with Zoom &amp; YouTube Live.</p></li><li class="bbh-facts__tile"><div class="bbh-facts__tile-head"><img class="bbh-facts__icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-inf-courses.svg' ) ); ?>" alt="" aria-hidden="true"><h3 class="bbh-h6 bbh-facts__tile-title">Courses</h3></div><p class="bbh-body-sm">Sell single courses, bundles, or start the next online university.</p></li></ul>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
