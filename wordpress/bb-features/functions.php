<?php
/**
 * BB Features — child theme bootstrap.
 *
 * Ships the "Features (Top Modules)" marketing sections as Gutenberg block
 * patterns. Everything here is theme-agnostic apart from the parent stylesheet
 * handoff, so the whole file lifts into a plugin unchanged if you ever want the
 * patterns to survive a theme switch.
 *
 * @package BB_Features
 */

namespace BB_Features;

defined( 'ABSPATH' ) || exit;

const VERSION   = '1.0.0';
const PREFIX    = 'bb-features';
const PATTERN_CATEGORY = 'bb-features';
const MODULE_CATEGORY  = 'bb-module-pages';

/**
 * Cache-bust on file mtime in development, fall back to VERSION in production.
 */
function asset_version( string $relative_path ): string {
	$file = get_theme_file_path( $relative_path );
	return file_exists( $file ) ? (string) filemtime( $file ) : VERSION;
}

/**
 * Section styles.
 *
 * enqueue_block_assets fires on the front end *and* inside the editor canvas,
 * so the patterns look the same in both places without a second registration.
 */
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\enqueue_styles' );
function enqueue_styles(): void {
	wp_enqueue_style(
		PREFIX,
		get_theme_file_uri( 'assets/css/features.css' ),
		array(),
		asset_version( 'assets/css/features.css' )
	);

	/* The module pages (Activity Feeds, and the ones that follow it) are a
	   second, self-contained scope — .bbm rather than .bbf — so they load as
	   their own sheet instead of growing features.css. */
	wp_enqueue_style(
		PREFIX . '-module-page',
		get_theme_file_uri( 'assets/css/module-page.css' ),
		array(),
		asset_version( 'assets/css/module-page.css' )
	);
}

/**
 * Parent + child stylesheets, front end only.
 *
 * Most modern parents enqueue their own style.css; we only add it when it looks
 * like the parent expects the classic child-theme handoff.
 */
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_theme_styles', 5 );
function enqueue_theme_styles(): void {
	$parent = get_parent_theme_file_path( 'style.css' );

	if ( file_exists( $parent ) && ! wp_style_is( 'parent-style', 'enqueued' ) ) {
		wp_enqueue_style(
			'parent-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			(string) filemtime( $parent )
		);
	}

	wp_enqueue_style( PREFIX . '-child', get_stylesheet_uri(), array( 'parent-style' ), VERSION );
}

/**
 * Behaviour: scroll reveals, hero framing, stat counters, app carousel.
 *
 * Front end only — on purpose. The reveal start state is scoped to `html.js`,
 * and this script is what adds that class, so the editor canvas (which never
 * loads it) renders every section fully visible and editable.
 */
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_scripts' );
function enqueue_scripts(): void {
	if ( is_admin() ) {
		return;
	}

	wp_enqueue_script(
		PREFIX,
		get_theme_file_uri( 'assets/js/features.js' ),
		array(),
		asset_version( 'assets/js/features.js' ),
		true
	);
}

/**
 * Pattern category so the sections group together in the inserter.
 */
add_action( 'init', __NAMESPACE__ . '\\register_pattern_category' );
function register_pattern_category(): void {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	register_block_pattern_category(
		PATTERN_CATEGORY,
		array(
			'label'       => __( 'BuddyBoss — Features', 'bb-features' ),
			'description' => __( 'Marketing sections from the Features (Top Modules) design.', 'bb-features' ),
		)
	);

	register_block_pattern_category(
		MODULE_CATEGORY,
		array(
			'label'       => __( 'BuddyBoss — Module pages', 'bb-features' ),
			'description' => __( 'Sections for the per-module marketing pages: Activity Feeds, Member Profiles and Moderation.', 'bb-features' ),
		)
	);
}

/**
 * Patterns in /patterns/ are auto-registered by WordPress 6.0+. Older installs
 * get a clear notice rather than a page of missing sections.
 */
add_action( 'admin_notices', __NAMESPACE__ . '\\version_notice' );
function version_notice(): void {
	global $wp_version;

	if ( version_compare( $wp_version, '6.0', '>=' ) ) {
		return;
	}

	printf(
		'<div class="notice notice-error"><p>%s</p></div>',
		esc_html__( 'BB Features needs WordPress 6.0 or newer — pattern auto-registration was added in 6.0.', 'bb-features' )
	);
}
