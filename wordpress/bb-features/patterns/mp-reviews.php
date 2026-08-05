<?php
/**
 * Title: Module — Review masonry
 * Slug: bb-features/mp-reviews
 * Categories: bb-module-pages
 * Description: Peach band with three columns of customer reviews.
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbm bbm-reviews bbm-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbm bbm-reviews bbm-section">
	<!-- wp:group {"className":"bbm-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbm-shell">
		<!-- wp:heading {"level":2,"className":"bbm-h2 bbm-reviews__title bbm-reveal"} -->
		<h2 class="wp-block-heading bbm-h2 bbm-reviews__title bbm-reveal">Trusted by 65,000+ customers and rated 4.8/5 based on 700+ customer reviews</h2>
		<!-- /wp:heading -->
		<!-- wp:group {"className":"bbm-rgrid bbm-stagger","layout":{"type":"default"}} -->
		<div class="wp-block-group bbm-rgrid bbm-stagger">
			<!-- wp:group {"className":"bbm-rcol","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-rcol">
				<!-- wp:group {"className":"bbm-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-review">
					<!-- wp:html -->
					<img class="bbm-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-trustpilot.png' ) ); ?>" alt="Trustpilot" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbm-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-dwayne.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbm-review__name">Dwayne Moore</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbm-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__stars">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbm-review__text"} -->
					<p class="bbm-review__text">Great support people. Very attentive and helpful and quick to respond. We launched a new community site that includes an app. This was a major first-time undertaking for us, and we couldn’t have done it without the expertise and patience determination we found in the support team at Buddyboss. These guys and gals are good!</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbm-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-review">
					<!-- wp:html -->
					<img class="bbm-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-wordpress.svg' ) ); ?>" alt="WordPress" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbm-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-nate.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbm-review__name">Nate Walker</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbm-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__stars">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbm-review__text"} -->
					<p class="bbm-review__text">I have used the BuddyBoss theme, platform, mobile app, done-for-you, and agency services for nearly two years. I am constantly impressed with the product and services. The leaders model excellence in software development and communication, feverously making groundbreaking improvements while keeping its community informed. The support services are first-rate, and the employees are dedicated and hardworking. I don’t know what I would have done without BuddyBoss during this pandemic. Their software and support team have made it possible to build a custom multisite and mobile app from scratch. I’m incredibly grateful for BuddyBoss and look forward to investing in its continued success.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbm-rcol","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-rcol">
				<!-- wp:group {"className":"bbm-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-review">
					<!-- wp:html -->
					<img class="bbm-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-trustpilot.png' ) ); ?>" alt="Trustpilot" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbm-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-ryan.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbm-review__name">Ryan Carlock</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbm-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__stars">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20-outline.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbm-review__text"} -->
					<p class="bbm-review__text">BuddyBoss is leading the way for Wordpress Users to enter into the App Space with their Native App plugin, Platform Plugin and plan to make it even easier in the future. It has personally revolutionized our own business, and as full stack developers we can attest to the uniqueness of what they’ve created. Bad reviews happen every day, but it’s not every day where you come across an opportunity to utilize something like BB App and Platform with freedom, and the support of those freedoms is why I’m sticking with them for the long haul! We have a vision to build the Internet of Apps, and BuddyBoss is helping make that a reality!</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbm-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-review">
					<!-- wp:html -->
					<img class="bbm-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-trustpilot.png' ) ); ?>" alt="Trustpilot" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbm-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-dwayne.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbm-review__name">Kevin Castello</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbm-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__stars">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbm-review__text"} -->
					<p class="bbm-review__text">The BuddyBoss DFY Web process was very well laid out. It provided video explanations of each step and instructions for completing those steps. The questionnaires at the beginning of each stage help to set the expectations of the upcoming work. They also offer a full service agency approach if you would prefer to not be involved in the setup at all.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbm-rcol","layout":{"type":"default"}} -->
			<div class="wp-block-group bbm-rcol">
				<!-- wp:group {"className":"bbm-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-review">
					<!-- wp:html -->
					<img class="bbm-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-capterra.svg' ) ); ?>" alt="Capterra" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbm-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-kyler.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbm-review__name">Kyler Boudreau</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbm-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__stars">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbm-review__text"} -->
					<p class="bbm-review__text">I’ve helped built a niche community on Drupal. Used Discourse, Mighty Networks and Circle. BuddyBoss blows all of them out of the water. ZERO contest. I’m an so excited to have moved my private community and training to this platform.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbm-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbm-review">
					<!-- wp:html -->
					<img class="bbm-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-wordpress.svg' ) ); ?>" alt="WordPress" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbm-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-circle.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbm-review__name">Circle One</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbm-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbm-review__stars">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/star-20.svg' ) ); ?>" alt="" />
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"bbm-review__text"} -->
					<p class="bbm-review__text">Their line of products are consistent, elegant, and well thought out to build social platforms. Their support team is one of the best I’ve ever experienced and we owe our success to their entire team, especially their support staff who are organized, prompt, and reliable. Their support team is above the rest and is essential to the operations of our business and the future of our company’s growth. The new releases and the continual improvements the BB team does is excellent! They really know what their doing, consistently deliver, and we’re so thankful to have partnered with them two years ago.</p>
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
