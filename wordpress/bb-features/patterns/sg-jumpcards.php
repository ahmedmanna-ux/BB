<?php
/**
 * Title: Module — Jump cards
 * Slug: bb-features/sg-jumpcards
 * Categories: bb-module-pages
 * Description: Four numbered cards summarising the sections below.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-sg bbm-section--tight","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-sg bbm-section--tight">
	<!-- wp:group {"className":"bbm-jumpcards bbm-jumpcards--roomy bbm-stagger","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-jumpcards bbm-jumpcards--roomy bbm-stagger">
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-1.svg' ) ); ?>" alt="1" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Create</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Groups, subgroups &amp; subscriptions</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-2.svg' ) ); ?>" alt="2" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Identity</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Avatars, covers &amp; headers</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-3.svg' ) ); ?>" alt="3" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Discover</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Directory views &amp; navigation</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-4.svg' ) ); ?>" alt="4" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Manage</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Access, types &amp; admin tools</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
