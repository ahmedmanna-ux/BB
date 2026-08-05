<?php
/**
 * Title: Module — Moderation full page
 * Slug: bb-features/md-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Moderation module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'md-hero',
	'md-jumpcards',
	'md-protect',
	'md-define',
	'md-cta',
	'md-automate',
	'md-resolve',
	'md-reviews',
	'md-cta-big',
	'md-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
