<?php
/**
 * Title: Module — Appearance full page
 * Slug: bb-features/ap-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Appearance module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'ap-hero',
	'ap-buddyboss-theme',
	'ap-cta',
	'ap-readylaunch',
	'ap-reviews',
	'ap-cta-big',
	'ap-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
