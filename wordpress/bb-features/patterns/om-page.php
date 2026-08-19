<?php
/**
 * Title: Module — Offload Media full page
 * Slug: bb-features/om-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Offload Media module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'om-hero',
	'om-discover',
	'om-reviews',
	'om-cta-big',
	'om-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
