<?php
/**
 * Title: Home — Built your way
 * Slug: bb-features/hp-bento3
 * Categories: bb-home
 * Description: BUILT YOUR WAY head over the freedom bento: drag & drop editors, appearance options, data & privacy and custom development.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-shell bbh-bento3","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-shell bbh-bento3">
	<!-- wp:group {"className":"bbh-bento3__head","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-bento3__head">
		<!-- wp:html -->
		<span class="bbh-tag"><span>built your way</span></span>
		<!-- /wp:html -->
		<!-- wp:heading {"level":2,"className":"bbh-h2 bbh-bento3__title"} -->
		<h2 class="wp-block-heading bbh-h2 bbh-bento3__title">Freedom to build without limits</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"bbh-body-md bbh-bento3__lede"} -->
		<p class="bbh-body-md bbh-bento3__lede">Build online communities, membership sites, and social learning platforms with profiles, groups, forums, activity feeds, messaging, notifications, media sharing, courses, gamification, and mobile apps</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"bbh-bento3__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-bento3__grid">
		<!-- wp:group {"className":"bbh-bento3__row","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-bento3__row">
			<!-- wp:group {"className":"bbh-bcard bbh-bcard--privacy","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-bcard bbh-bcard--privacy">
				<!-- wp:group {"className":"bbh-bcard__wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bcard__wrap">
					<!-- wp:heading {"level":3,"className":"bbh-h5 bbh-bcard__title"} -->
					<h3 class="wp-block-heading bbh-h5 bbh-bcard__title">Data &amp; privacy</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-bcard__text"} -->
					<p class="bbh-bcard__text">Members control how their data is collected and shared across the community.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-bcard__art","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bcard__art">
					<!-- wp:html -->
					<img class="bbh-b3-privacy" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-b3-privacy.png' ) ); ?>" alt="" aria-hidden="true"/>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-bcard bbh-bcard--appearance","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-bcard bbh-bcard--appearance">
				<!-- wp:group {"className":"bbh-bcard__wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bcard__wrap">
					<!-- wp:heading {"level":3,"className":"bbh-h5 bbh-bcard__title"} -->
					<h3 class="wp-block-heading bbh-h5 bbh-bcard__title">Appearance options </h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-bcard__text"} -->
					<p class="bbh-bcard__text">Personalized activity feeds with posts, comments, likes, and @mentions — the heartbeat of your community, free from algorithms.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-bcard__art","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bcard__art">
					<!-- wp:html -->
					<span class="bbh-b3-glow bbh-b3-glow--appearance"></span>
					<!-- /wp:html -->
					<!-- wp:html -->
					<span class="bbh-b3-shot bbh-b3-shot--appearance"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-b3-appearance.png' ) ); ?>" alt="" aria-hidden="true"></span>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-bento3__row","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-bento3__row">
			<!-- wp:group {"className":"bbh-bcard bbh-bcard--editors","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-bcard bbh-bcard--editors">
				<!-- wp:group {"className":"bbh-bcard__wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bcard__wrap">
					<!-- wp:heading {"level":3,"className":"bbh-h5 bbh-bcard__title"} -->
					<h3 class="wp-block-heading bbh-h5 bbh-bcard__title">Drag &amp; drop editors</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-bcard__text"} -->
					<p class="bbh-bcard__text">Personalized activity feeds with posts, comments, likes, and @mentions — the heartbeat of your community, free from algorithms.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-bcard__art","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bcard__art">
					<!-- wp:html -->
					<span class="bbh-b3-glow bbh-b3-glow--editors"></span>
					<!-- /wp:html -->
					<!-- wp:html -->
					<span class="bbh-b3-shot bbh-b3-shot--editors"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-b3-editors.png' ) ); ?>" alt="" aria-hidden="true"></span>
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbh-b3-tools","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-b3-tools">
						<!-- wp:group {"className":"bbh-b3-tools__row","layout":{"type":"default"}} -->
						<div class="wp-block-group bbh-b3-tools__row">
							<!-- wp:html -->
							<span class="bbh-b3-tool bbh-b3-tool--1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-b3-tool-1.png' ) ); ?>" alt="" aria-hidden="true"></span>
							<!-- /wp:html -->
							<!-- wp:html -->
							<span class="bbh-b3-tool bbh-b3-tool--2"><span class="bbh-b3-tool__crop"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-b3-tool-2.png' ) ); ?>" alt="" aria-hidden="true"></span></span>
							<!-- /wp:html -->
							<!-- wp:html -->
							<span class="bbh-b3-tool bbh-b3-tool--3"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-b3-tool-3.png' ) ); ?>" alt="" aria-hidden="true"></span>
							<!-- /wp:html -->
							<!-- wp:html -->
							<span class="bbh-b3-tool bbh-b3-tool--4"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-b3-tool-4.png' ) ); ?>" alt="" aria-hidden="true"></span>
							<!-- /wp:html -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:html -->
					<span class="bbh-b3-shot bbh-b3-shot--blocks"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hp-b3-blocks.png' ) ); ?>" alt="" aria-hidden="true"></span>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-bcard bbh-bcard--custom","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-bcard bbh-bcard--custom">
				<!-- wp:group {"className":"bbh-bcard__wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bcard__wrap">
					<!-- wp:heading {"level":3,"className":"bbh-h5 bbh-bcard__title"} -->
					<h3 class="wp-block-heading bbh-h5 bbh-bcard__title">Custom development</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"bbh-bcard__text"} -->
					<p class="bbh-bcard__text">Personalized activity feeds with posts, comments, likes, and @mentions — the heartbeat of your community, free from</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-bcard__art","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-bcard__art">
					<!-- wp:html -->
					<span class="bbh-b3-glow bbh-b3-glow--custom"></span>
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbh-b3-code","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-b3-code">
						<!-- wp:group {"className":"bbh-b3-code__bar","layout":{"type":"default"}} -->
						<div class="wp-block-group bbh-b3-code__bar">
							<!-- wp:html -->
							<span class="bbh-b3-code__dot bbh-b3-code__dot--red"></span>
							<!-- /wp:html -->
							<!-- wp:html -->
							<span class="bbh-b3-code__dot bbh-b3-code__dot--amber"></span>
							<!-- /wp:html -->
							<!-- wp:html -->
							<span class="bbh-b3-code__dot bbh-b3-code__dot--green"></span>
							<!-- /wp:html -->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {"className":"bbh-b3-code__body","layout":{"type":"default"}} -->
						<div class="wp-block-group bbh-b3-code__body">
							<!-- wp:group {"className":"bbh-b3-code__gutter","layout":{"type":"default"}} -->
							<div class="wp-block-group bbh-b3-code__gutter">
								<!-- wp:html -->
								<span>1</span>
								<!-- /wp:html -->
								<!-- wp:html -->
								<span>2</span>
								<!-- /wp:html -->
								<!-- wp:html -->
								<span>3</span>
								<!-- /wp:html -->
								<!-- wp:html -->
								<span>4</span>
								<!-- /wp:html -->
								<!-- wp:html -->
								<span>5</span>
								<!-- /wp:html -->
								<!-- wp:html -->
								<span>6</span>
								<!-- /wp:html -->
								<!-- wp:html -->
								<span>7</span>
								<!-- /wp:html -->
							</div>
							<!-- /wp:group -->
							<!-- wp:group {"className":"bbh-b3-code__lines","layout":{"type":"default"}} -->
							<div class="wp-block-group bbh-b3-code__lines">
								<!-- wp:paragraph {"className":"bbh-b3-code__comment"} -->
								<p class="bbh-b3-code__comment">// extend any member profile</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p><span class="bbh-b3-code__fn">add_filter</span>( <span class="bbh-b3-code__str">'bb_member_profile'</span>, <span class="bbh-b3-code__fn">function</span>( $fields ) {</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>  $fields[<span class="bbh-b3-code__str">'badge'</span>] = <span class="bbh-b3-code__fn">get_rank</span>( $user );</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>  <span class="bbh-b3-code__fn">return</span> $fields;</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>} );</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>&#8203;</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p><span class="bbh-b3-code__fn">register_rest_route</span>( <span class="bbh-b3-code__str">'bb/v1'</span></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
