<?php
/**
 * Title: Features — Full page
 * Slug: bb-features/features-page
 * Categories: bb-features, pages
 * Block Types: core/post-content
 * Description: The whole Features (Top Modules) page: hero, module grid, every module section, stats, testimonials and the closing CTA.
 *
 * @package BB_Features
 */

$bbf_sections = array(
	'hero',
	'module-grid',
	'activity-feeds',
	'social-groups',
	'forum-messaging',
	'member-profiles',
	'review',
	'reactions-notifications',
	'media-uploads',
	'gamifications',
	'moderation',
	'offload-media',
	'seo-settings',
	'member-blogging',
	'mobile-app',
	'courses',
	'theme-readylaunch',
	'integrations',
	'stats',
	'testimonials',
	'cta',
);

foreach ( $bbf_sections as $bbf_section ) {
	$bbf_file = __DIR__ . '/' . $bbf_section . '.php';

	if ( is_readable( $bbf_file ) ) {
		require $bbf_file;
	}
}
