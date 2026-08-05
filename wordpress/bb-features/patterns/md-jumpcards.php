<?php
/**
 * Title: Module — Jump cards
 * Slug: bb-features/md-jumpcards
 * Categories: bb-module-pages
 * Description: Four numbered cards summarising the sections below.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-section--tight","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-section--tight">
	<!-- wp:group {"className":"bbm-jumpcards bbm-jumpcards--roomy bbm-stagger","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-jumpcards bbm-jumpcards--roomy bbm-stagger">
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-1.svg' ) ); ?>" alt="1" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Protect</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Blocking and reporting, before an admin steps in</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-2.svg' ) ); ?>" alt="2" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Define</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">The reasons members pick, written by you</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-3.svg' ) ); ?>" alt="3" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Automate</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Auto hide, auto suspend, and the alerts that follow</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-4.svg' ) ); ?>" alt="4" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Resolve</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Flagged members, reported content, blog posts</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
