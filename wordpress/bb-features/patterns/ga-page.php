<?php
/**
 * Title: Module — Gamifications full page
 * Slug: bb-features/ga-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Gamifications module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'ga-hero',
	'ga-jumpcards',
	'ga-points',
	'ga-achievements',
	'ga-cta',
	'ga-ranks',
	'ga-recognition',
	'ga-reviews',
	'ga-cta-big',
	'ga-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
