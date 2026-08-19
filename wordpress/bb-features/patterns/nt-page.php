<?php
/**
 * Title: Module — Notifications full page
 * Slug: bb-features/nt-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Notifications module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'nt-hero',
	'nt-discover',
	'nt-reviews',
	'nt-cta-big',
	'nt-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
