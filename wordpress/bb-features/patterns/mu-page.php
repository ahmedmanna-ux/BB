<?php
/**
 * Title: Module — Media Uploading full page
 * Slug: bb-features/mu-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Media Uploading module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'mu-hero',
	'mu-jumpcards',
	'mu-photos',
	'mu-cta-1',
	'mu-documents',
	'mu-emoji',
	'mu-cta-2',
	'mu-security',
	'mu-reviews',
	'mu-cta-big',
	'mu-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
