<?php
/**
 * Title: Module — Jump cards
 * Slug: bb-features/fo-jumpcards
 * Categories: bb-module-pages
 * Description: Four numbered cards summarising the sections below.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-fo bbm-section--tight","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-fo bbm-section--tight">
	<!-- wp:group {"className":"bbm-jumpcards bbm-jumpcards--roomy bbm-stagger","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-jumpcards bbm-jumpcards--roomy bbm-stagger">
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-1.svg' ) ); ?>" alt="1" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Discuss</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Create, post, reply &amp; browse</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-2.svg' ) ); ?>" alt="2" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Features</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Eight switches, one screen</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-3.svg' ) ); ?>" alt="3" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Groups &amp; URLs</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Boards in groups, clean links</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-jumpcard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-jumpcard">
			<!-- wp:html -->
			<img class="bbm-jumpcard__num" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/num-4.svg' ) ); ?>" alt="4" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":2,"className":"bbm-jumpcard__title"} -->
			<h2 class="wp-block-heading bbm-jumpcard__title">Admin &amp; Limits</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-jumpcard__text"} -->
			<p class="bbm-jumpcard__text">Throttles, page sizes &amp; lists</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
