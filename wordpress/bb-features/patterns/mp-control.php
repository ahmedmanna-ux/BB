<?php
/**
 * Title: Module — Control
 * Slug: bb-features/mp-control
 * Categories: bb-module-pages
 * Description: Section head, a pair, a full-width card and three mini cards on privacy and permissions.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-mcontrol","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-mcontrol">
	<!-- wp:group {"className":"bbm-secthead bbm-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-secthead bbm-reveal">
		<!-- wp:html -->
		<span class="bbm-tag"><span>Control</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbm-h2 bbm-secthead__title"} -->
		<h2 class="wp-block-heading bbm-h2 bbm-secthead__title">Member control on your terms</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-fcards","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-fcards">
		<!-- wp:group {"className":"bbm-fduo","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fduo">
			<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--left","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--left">
				<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-fcard__copy">
					<!-- wp:html -->
					<span class="bbm-tag"><span>Field Visibility</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">Privacy, decided field by field</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">Every profile field carries its own audience: Public, All Members, My Connections, or Only Me. Let members choose per field, or enforce a visibility they can’t override. No competitor hands members this control.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'mp-ct-visibility.png' ); ?>" alt="A field visibility menu offering Public, All Members, My Connections and Only Me beside the Add New Field form"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-reveal bbm-reveal--right">
				<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-fcard__copy">
					<!-- wp:html -->
					<span class="bbm-tag"><span>Account Deletion</span></span>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
					<h3 class="wp-block-heading bbm-h3">Members with their own rules</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbm-body-sm"} -->
					<p class="bbm-body-sm">Every profile type gets its own fields, directory visibility, group permissions and even an auto-assigned WordPress role. Color-coded labels tell members who they’re talking to.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
				<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'mp-ct-deletion.png' ); ?>" alt="A switch allowing members to delete their profiles, above the Delete Account confirmation"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--stack bbm-fcard--wide bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--stack bbm-fcard--wide bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>Connection Access</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Who can ask to connect</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Connection requests don’t have to flow in every direction. Set the rule per profile type — each type can send requests to all members, or only to the specific types you choose — so students can reach coaches without the whole network reaching them. Administrators aren’t bound by the restriction.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'mp-ct-connect.png' ); ?>" alt="A rule letting the Investor profile type send connection requests to specific types only, beside the member cards it applies to"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-minicards bbm-stagger","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-minicards bbm-stagger">
		<!-- wp:group {"className":"bbm-minicard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-minicard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/mp-ic-messaging.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"bbm-minicard__title"} -->
			<h3 class="wp-block-heading bbm-minicard__title">Connection-Gated Messaging</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-minicard__text"} -->
			<p class="bbm-minicard__text">Require members to be connected before they can message each other — and decide, per profile type, who can send connection requests at all. Cold spam never reaches an inbox, and administrators stay exempt.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-minicard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-minicard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/mp-ic-approval.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"bbm-minicard__title"} -->
			<h3 class="wp-block-heading bbm-minicard__title">Group Type Approval</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-minicard__text"} -->
			<p class="bbm-minicard__text">Pick the group types a profile type should join automatically, and members land in them the moment their account is activated — no request, no waiting on an organizer.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-minicard","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-minicard">
			<!-- wp:html -->
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/mp-ic-permissions.svg' ) ); ?>" alt="" />
			<!-- /wp:html -->
			<!-- wp:heading {"level":3,"className":"bbm-minicard__title"} -->
			<h3 class="wp-block-heading bbm-minicard__title">Group Create Permissions</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"bbm-minicard__text"} -->
			<p class="bbm-minicard__text">Each profile type carries its own group rules. Let one type create any kind of group, hold another to a short list of group types, or take group creation away from a type entirely.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
