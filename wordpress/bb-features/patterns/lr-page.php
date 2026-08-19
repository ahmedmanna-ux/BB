<?php
/**
 * Title: Module — Like & Reactions full page
 * Slug: bb-features/lr-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Like & Reactions module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'lr-hero',
	'lr-react',
	'lr-reviews',
	'lr-cta-big',
	'lr-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
