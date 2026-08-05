<?php
/**
 * Title: Module — Member Profiles full page
 * Slug: bb-features/mp-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Member Profiles module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'mp-hero',
	'mp-jumpcards',
	'mp-identity',
	'mp-cta-1',
	'mp-directory',
	'mp-cta-2',
	'mp-connect',
	'mp-cta-3',
	'mp-control',
	'mp-reviews',
	'mp-cta-big',
	'mp-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
