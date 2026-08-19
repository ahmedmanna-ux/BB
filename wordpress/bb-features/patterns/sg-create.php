<?php
/**
 * Title: Module — Create
 * Slug: bb-features/sg-create
 * Categories: bb-module-pages
 * Description: Section head and three split cards on group creation, group messaging and cover sizes.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-shell bbm-section bbm-sg-create bbm-edge--peach bbm-sg","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-shell bbm-section bbm-sg-create bbm-edge--peach bbm-sg">
	<!-- wp:group {"className":"bbm-secthead bbm-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-secthead bbm-reveal">
		<!-- wp:html -->
		<span class="bbm-tag"><span>create</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbm-h2 bbm-secthead__title"} -->
		<h2 class="wp-block-heading bbm-h2 bbm-secthead__title">Groups your members build themselves</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbm-fcards","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-fcards">
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>group creation</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Group creation open to every member — or just your admins</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Enable social group creation by all members, or keep it admin-only — administrators can always create groups regardless. On the frontend, a five-step Create-a-Group wizard walks members through Details, Privacy, Photo, Invites, and Courses.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'sg-create-wizard.png' ); ?>" alt="The five-step Create a Group wizard on the frontend"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-fcard bbm-fcard--split bbm-fcard--flip bbm-reveal">
			<!-- wp:group {"className":"bbm-fcard__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-fcard__copy">
				<!-- wp:html -->
				<span class="bbm-tag"><span>group message</span></span>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"bbm-h3"} -->
				<h3 class="wp-block-heading bbm-h3">Message every group member at once</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"bbm-body-sm"} -->
				<p class="bbm-body-sm">Allow for sending group messages to group members, straight from the group. The composer even switches between Group message and Private message, with every group member on the To: line.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"full","className":"bbm-fcard__art"} -->
			<figure class="wp-block-image size-full bbm-fcard__art"><img src="<?php echo esc_url( $bbm_img . 'sg-group-message.png' ); ?>" alt="The group message composer with every group member selected on the To line"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
