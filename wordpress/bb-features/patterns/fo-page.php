<?php
/**
 * Title: Module — Forums full page
 * Slug: bb-features/fo-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Forums module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'fo-hero',
	'fo-jumpcards',
	'fo-discuss',
	'fo-features',
	'fo-cta',
	'fo-groups',
	'fo-manage',
	'fo-reviews',
	'fo-cta-big',
	'fo-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
