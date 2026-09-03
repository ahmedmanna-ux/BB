<?php
/**
 * Title: Home — full page
 * Slug: bb-features/hp-page
 * Categories: bb-home, pages
 * Block Types: core/post-content
 * Description: The whole BuddyBoss Home page, section by section.
 *
 * @package BB_Features
 */

$bbh_sections = array(
	'hp-hero',
	'hp-logowall',
	'hp-bento1',
	'hp-courses',
	'hp-memberships',
	'hp-review-1',
	'hp-gamification',
	'hp-facts',
	'hp-bento2',
	'hp-review-2',
	'hp-migration',
	'hp-app',
	'hp-integrations',
	'hp-themerl',
	'hp-review-3',
	'hp-difference',
	'hp-bento3',
	'hp-testimonials',
	'hp-pricing',
);

foreach ( $bbh_sections as $bbh_section ) {
	$bbh_file = __DIR__ . '/' . $bbh_section . '.php';

	if ( is_readable( $bbh_file ) ) {
		require $bbh_file;
	}
}
