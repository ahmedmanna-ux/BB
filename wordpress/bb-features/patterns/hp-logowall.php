<?php
/**
 * Title: Home — Logo wall
 * Slug: bb-features/hp-logowall
 * Categories: bb-home
 * Description: Centred heading over one wrapping row of customer and university logos.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-logowall","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-logowall">
	<!-- wp:heading {"level":2,"className":"bbh-h4 bbh-logowall__title"} -->
	<h2 class="wp-block-heading bbh-h4 bbh-logowall__title">Trusted by creators and brands worldwide</h2>
	<!-- /wp:heading -->
	<!-- wp:group {"className":"bbh-logowall__logos","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-logowall__logos">
		<!-- wp:image {"sizeSlug":"full","className":"bbh-logowall__logo bbh-logowall__logo--bossbabe"} -->
		<figure class="wp-block-image size-full bbh-logowall__logo bbh-logowall__logo--bossbabe"><img src="<?php echo esc_url( $bbh_img . 'hp-logo-bossbabe.png' ); ?>" alt="bossbabe"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"full","className":"bbh-logowall__logo bbh-logowall__logo--stanford"} -->
		<figure class="wp-block-image size-full bbh-logowall__logo bbh-logowall__logo--stanford"><img src="<?php echo esc_url( $bbh_img . 'hp-logo-stanford.png' ); ?>" alt="Stanford University"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"full","className":"bbh-logowall__logo bbh-logowall__logo--fea"} -->
		<figure class="wp-block-image size-full bbh-logowall__logo bbh-logowall__logo--fea"><img src="<?php echo esc_url( $bbh_img . 'hp-logo-fea.png' ); ?>" alt="female ENTREPRENEUR association"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"full","className":"bbh-logowall__logo bbh-logowall__logo--mit"} -->
		<figure class="wp-block-image size-full bbh-logowall__logo bbh-logowall__logo--mit"><img src="<?php echo esc_url( $bbh_img . 'hp-logo-mit.png' ); ?>" alt="Massachusetts Institute of Technology"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"full","className":"bbh-logowall__logo bbh-logowall__logo--lifemastery"} -->
		<figure class="wp-block-image size-full bbh-logowall__logo bbh-logowall__logo--lifemastery"><img src="<?php echo esc_url( $bbh_img . 'hp-logo-lifemastery.png' ); ?>" alt="Project Life Mastery"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"full","className":"bbh-logowall__logo bbh-logowall__logo--yale"} -->
		<figure class="wp-block-image size-full bbh-logowall__logo bbh-logowall__logo--yale"><img src="<?php echo esc_url( $bbh_img . 'hp-logo-yale.png' ); ?>" alt="Yale University"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"full","className":"bbh-logowall__logo bbh-logowall__logo--chalene"} -->
		<figure class="wp-block-image size-full bbh-logowall__logo bbh-logowall__logo--chalene"><img src="<?php echo esc_url( $bbh_img . 'hp-logo-chalene.png' ); ?>" alt="Chalene"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"full","className":"bbh-logowall__logo bbh-logowall__logo--foundr"} -->
		<figure class="wp-block-image size-full bbh-logowall__logo bbh-logowall__logo--foundr"><img src="<?php echo esc_url( $bbh_img . 'hp-logo-foundr.png' ); ?>" alt="foundr"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
