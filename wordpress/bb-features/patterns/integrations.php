<?php
/**
 * Title: Features — Integrations
 * Slug: bb-features/integrations
 * Categories: bb-features
 * Description: Outlined carousel round the integration artwork, with five states — the logo overview and four integration tabs — pagination dots and a prev/next pair.
 *
 * @package BB_Features
 */

$bbf_img  = get_theme_file_uri( 'assets/img/' );
$bbf_icon = get_theme_file_uri( 'assets/icon/' );
?>
<!-- wp:group {"align":"full","className":"bbf bbf-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbf bbf-section">
	<!-- wp:group {"className":"bbf-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbf-shell">
		<!-- wp:html -->
		<div class="bbf-integrations__heads bbf-reveal">
			<div class="bbf-head bbf-head--wide is-current">
				<p class="bbf-tag">integrations</p>
				<h2 class="bbf-h2">Integrations that take BuddyBoss to the next level</h2>
			</div>
			<div class="bbf-head">
				<p class="bbf-tag">tutor lms</p>
				<h2 class="bbf-h2">Tutor LMS course integration</h2>
			</div>
			<div class="bbf-head">
				<p class="bbf-tag">zoom</p>
				<h2 class="bbf-h2">Zoom integration</h2>
			</div>
			<div class="bbf-head">
				<p class="bbf-tag">recaptcha</p>
				<h2 class="bbf-h2">reCaptcha integration</h2>
			</div>
			<div class="bbf-head">
				<p class="bbf-tag">event calendar pro</p>
				<h2 class="bbf-h2">Event calendar pro integration</h2>
			</div>
		</div>

		<div class="bbf-integrations bbf-reveal">
			<div class="bbf-integrations__slides">
				<div class="bbf-integrations__slide is-current">
					<div class="bbf-integrations__panel">
						<img src="<?php echo esc_url( $bbf_img . 'panel-integrations.png' ); ?>" alt="Logos of the apps and services that integrate with BuddyBoss" loading="lazy">
					</div>
				</div>
				<div class="bbf-integrations__slide bbf-integrations__slide--tab bbf-integrations__slide--blue">
					<div class="bbf-integrations__copy">
						<div>
							<p class="bbf-integrations__lead">Connect Tutor LMS courses with BuddyBoss community.</p>
							<p class="bbf-body">A classic Like, or up to six expressive emotions — members react to posts, comments, blogs, and private messages.</p>
						</div>
						<ul class="bbf-checks">
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
						</ul>
					</div>
					<div class="bbf-integrations__art">
						<img src="<?php echo esc_url( $bbf_img . 'panel-tab-tutor.png' ); ?>" alt="The Tutor LMS course detail and course cards inside a BuddyBoss community" loading="lazy">
					</div>
				</div>
				<div class="bbf-integrations__slide bbf-integrations__slide--tab bbf-integrations__slide--green">
					<div class="bbf-integrations__copy">
						<div>
							<p class="bbf-integrations__lead">Enjoy features like video conferencing, webinars, and interactive sessions directly within your platform.</p>
							<p class="bbf-body">A classic Like, or up to six expressive emotions — members react to posts, comments, blogs, and private messages.</p>
						</div>
						<ul class="bbf-checks">
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
						</ul>
					</div>
					<div class="bbf-integrations__art">
						<img src="<?php echo esc_url( $bbf_img . 'panel-tab-zoom.png' ); ?>" alt="A scheduled Zoom meeting in the activity feed beside the Zoom settings panel" loading="lazy">
					</div>
				</div>
				<div class="bbf-integrations__slide bbf-integrations__slide--tab bbf-integrations__slide--blue">
					<div class="bbf-integrations__copy">
						<div>
							<p class="bbf-integrations__lead">Implement reCAPTCHA for BuddyBoss to enhance security and prevent spam across your community.</p>
							<p class="bbf-body">A classic Like, or up to six expressive emotions — members react to posts, comments, blogs, and private messages.</p>
						</div>
						<ul class="bbf-checks">
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
						</ul>
					</div>
					<div class="bbf-integrations__art">
						<img src="<?php echo esc_url( $bbf_img . 'panel-tab-recaptcha.png' ); ?>" alt="A reCAPTCHA image challenge and the &quot;I am not a robot&quot; checkbox" loading="lazy">
					</div>
				</div>
				<div class="bbf-integrations__slide bbf-integrations__slide--tab bbf-integrations__slide--blue">
					<div class="bbf-integrations__copy">
						<div>
							<p class="bbf-integrations__lead">Create professional event experience with event calendar pro plugin.</p>
							<p class="bbf-body">A classic Like, or up to six expressive emotions — members react to posts, comments, blogs, and private messages.</p>
						</div>
						<ul class="bbf-checks">
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
							<li><img src="<?php echo esc_url( $bbf_icon . 'check.svg' ); ?>" alt=""><span><b>Feature name</b> — what it does</span></li>
						</ul>
					</div>
					<div class="bbf-integrations__art">
						<img src="<?php echo esc_url( $bbf_img . 'panel-tab-events.png' ); ?>" alt="An event schedule list beside an event details screen" loading="lazy">
					</div>
				</div>
			</div>
			<div class="bbf-integrations__bar">
				<div class="bbf-integrations__dots">
					<button type="button" class="bbf-integrations__dot is-active" aria-label="Integrations overview"></button>
					<button type="button" class="bbf-integrations__dot" aria-label="Tutor LMS course integration"></button>
					<button type="button" class="bbf-integrations__dot" aria-label="Zoom integration"></button>
					<button type="button" class="bbf-integrations__dot" aria-label="reCaptcha integration"></button>
					<button type="button" class="bbf-integrations__dot" aria-label="Event calendar pro integration"></button>
				</div>
				<div class="bbf-integrations__nav">
					<button type="button" class="bbf-integrations__arrow bbf-integrations__arrow--prev" aria-label="Previous integration"></button>
					<button type="button" class="bbf-integrations__arrow bbf-integrations__arrow--next" aria-label="Next integration"></button>
				</div>
			</div>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
