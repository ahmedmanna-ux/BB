<?php
/**
 * Title: Module — Courses full page
 * Slug: bb-features/co-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Courses module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'co-hero',
	'co-jumpcards',
	'co-discover',
	'co-choose',
	'co-cta',
	'co-learn',
	'co-connect',
	'co-reviews',
	'co-cta-big',
	'co-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
