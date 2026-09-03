<?php
/**
 * Title: Home — Migration
 * Slug: bb-features/hp-migration
 * Categories: bb-home
 * Description: MIGRATION head over the platform map — Circle, Skool, Mighty Networks, Kajabi, BuddyPress and the rest wired in to the BuddyBoss mark.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-migration","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-migration">
	<!-- wp:group {"className":"bbh-migration__head","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-migration__head">
		<!-- wp:html -->
		<span class="bbh-tag"><span>migration</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbh-h2 bbh-migration__title"} -->
		<h2 class="wp-block-heading bbh-h2 bbh-migration__title">Bring the community you already have</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbh-migration__card","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-migration__card">
		<!-- wp:group {"className":"bbh-migration__map","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-migration__map">
			<!-- wp:group {"className":"bbh-migration__node bbh-migration__node--fluent","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-migration__node bbh-migration__node--fluent">
				<!-- wp:html -->
				<img class="bbh-migration__node-logo bbh-migration__node-logo--round" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-migrate-fluentcommunity-lg.png' ) ); ?>" alt="Fluent Community" />
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-migration__node bbh-migration__node--circle","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-migration__node bbh-migration__node--circle">
				<!-- wp:html -->
				<img class="bbh-migration__node-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-migrate-circle-lg.png' ) ); ?>" alt="Circle" />
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-migration__node bbh-migration__node--skool","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-migration__node bbh-migration__node--skool">
				<!-- wp:html -->
				<img class="bbh-migration__node-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-skool.png' ) ); ?>" alt="Skool" />
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-migration__node bbh-migration__node--kajabi","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-migration__node bbh-migration__node--kajabi">
				<!-- wp:html -->
				<img class="bbh-migration__node-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-kajabi.png' ) ); ?>" alt="Kajabi" />
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-migration__node bbh-migration__node--mighty","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-migration__node bbh-migration__node--mighty">
				<!-- wp:html -->
				<img class="bbh-migration__node-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-migrate-mightynetworks-lg.png' ) ); ?>" alt="Mighty Networks" />
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-migration__node bbh-migration__node--buddypress","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-migration__node bbh-migration__node--buddypress">
				<!-- wp:html -->
				<img class="bbh-migration__node-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-buddypress.png' ) ); ?>" alt="BuddyPress" />
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-migration__node bbh-migration__node--bb","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-migration__node bbh-migration__node--bb">
				<!-- wp:html -->
				<img class="bbh-migration__bb-mark" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-mig-bb-mark.svg' ) ); ?>" alt="BuddyBoss" />
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<img class="bbh-migration__wires" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-mig-lines.svg' ) ); ?>" alt="" aria-hidden="true"/>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-migration__lists","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-migration__lists">
			<!-- wp:group {"className":"bbh-migration__group bbh-migration__group--wp","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-migration__group bbh-migration__group--wp">
				<!-- wp:paragraph {"className":"bbh-h6 bbh-migration__group-title"} -->
				<p class="bbh-h6 bbh-migration__group-title">Built in - moving from WordPress</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<ul class="bbh-migration__chips"><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-buddypress.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">BuddyPress</span></li><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-peepso.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">PeepSo</span></li><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-fluentcommunity.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">Fluent Community</span></li><li class="bbh-migration__chip bbh-migration__chip--plain"><span class="bbh-migration__chip-label">wpForo</span></li><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-migrate-bbpress.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">bbPress</span></li><li class="bbh-migration__chip bbh-migration__chip--plain"><span class="bbh-migration__chip-label">phpBB</span></li><li class="bbh-migration__chip bbh-migration__chip--plain"><span class="bbh-migration__chip-label">XenForo</span></li><li class="bbh-migration__chip bbh-migration__chip--plain"><span class="bbh-migration__chip-label">and more</span></li></ul>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-migration__group bbh-migration__group--hosted","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-migration__group bbh-migration__group--hosted">
				<!-- wp:paragraph {"className":"bbh-h6 bbh-migration__group-title"} -->
				<p class="bbh-h6 bbh-migration__group-title">Our agency team - moving from hosted platorm</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<ul class="bbh-migration__chips bbh-migration__chips--muted"><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-kajabi.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">Kajabi</span></li><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-thinkific.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">Thinkific</span></li><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-mightynetworks.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">Mighty Networks</span></li><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-circle.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">Circle</span></li><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-skool.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">Skool</span></li><li class="bbh-migration__chip"><img class="bbh-migration__chip-logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/migrate-higherlogic.png' ) ); ?>" alt="" aria-hidden="true"><span class="bbh-migration__chip-label">Higher Logic</span></li></ul>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
