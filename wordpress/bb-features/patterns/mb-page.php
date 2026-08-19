<?php
/**
 * Title: Module — Member Blog full page
 * Slug: bb-features/mb-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Member Blog module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'mb-hero',
	'mb-jumpcards',
	'mb-write',
	'mb-publish',
	'mb-cta',
	'mb-read',
	'mb-control',
	'mb-reviews',
	'mb-cta-big',
	'mb-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
