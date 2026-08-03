<?php
/**
 * Title: Module — Activity Feeds full page
 * Slug: bb-features/af-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole Activity Feeds module page: hero, jump cards, the four feature sections with their CTA bands, reviews, closing CTA and the explore-more row.
 *
 * @package BB_Features
 */

$bbm_sections = array(
	'af-hero',
	'af-jumpcards',
	'af-discover',
	'af-cta-1',
	'af-post',
	'af-cta-2',
	'af-engage',
	'af-cta-3',
	'af-control',
	'af-reviews',
	'af-cta-big',
	'af-explore',
);

foreach ( $bbm_sections as $bbm_section ) {
	$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

	if ( is_readable( $bbm_file ) ) {
		require $bbm_file;
	}
}
