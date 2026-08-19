<?php
/**
 * Title: Module — Social Groups full page
 * Slug: bb-features/sg-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Social Groups module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'sg-hero',
	'sg-jumpcards',
	'sg-create',
	'sg-identity',
	'sg-cta',
	'sg-discover',
	'sg-manage',
	'sg-reviews',
	'sg-cta-big',
	'sg-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
