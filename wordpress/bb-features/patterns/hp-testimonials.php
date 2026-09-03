<?php
/**
 * Title: Home — Testimonials
 * Slug: bb-features/hp-testimonials
 * Categories: bb-home
 * Description: Peach band: the 65,000-customer headline, the three expert cards and the three-column review masonry.
 *
 * @package BB_Features
 */

$bbh_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"bbh bbh-mp-reviews bbh-testimonials","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bbh bbh-mp-reviews bbh-testimonials">
	<!-- wp:group {"className":"bbh-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group bbh-shell">
		<!-- wp:heading {"level":2,"className":"bbh-h2 bbh-mp-reviews__title bbh-reveal"} -->
		<h2 class="wp-block-heading bbh-h2 bbh-mp-reviews__title bbh-reveal">Trusted by 65,000+ customers and rated 4.8/5 based on 700+ customer reviews</h2>
		<!-- /wp:heading -->
		<!-- wp:group {"className":"bbh-experts bbh-stagger","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-experts bbh-stagger">
			<!-- wp:group {"className":"bbh-expert","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-expert">
				<!-- wp:group {"className":"bbh-expert__info","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-expert__info">
					<!-- wp:group {"className":"bbh-expert__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-expert__who">
						<!-- wp:html -->
						<img class="bbh-expert__portrait" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-av-expert.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:group {"className":"bbh-expert__id","layout":{"type":"default"}} -->
						<div class="wp-block-group bbh-expert__id">
							<!-- wp:paragraph {"className":"bbh-h6 bbh-expert__name"} -->
							<p class="bbh-h6 bbh-expert__name">Adam Preiser</p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"bbh-expert__role"} -->
							<p class="bbh-expert__role"><span class="bbh-expert__role-pre">Founder of</span><span class="bbh-expert__org">WPCrafter</span></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:html -->
					<img class="bbh-expert__logo bbh-expert__logo--wpcrafter" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-logo-wpcrafter.png' ) ); ?>" alt="WPCrafter" />
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
				<blockquote class="bbh-expert__quote"><p class="bbh-expert__text">“I fell in love with BuddyBoss instantly. It got me to open up my wallet right away and start using it!”</p></blockquote>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-expert","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-expert">
				<!-- wp:group {"className":"bbh-expert__info","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-expert__info">
					<!-- wp:group {"className":"bbh-expert__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-expert__who">
						<!-- wp:html -->
						<img class="bbh-expert__portrait" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-av-expert.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:group {"className":"bbh-expert__id","layout":{"type":"default"}} -->
						<div class="wp-block-group bbh-expert__id">
							<!-- wp:paragraph {"className":"bbh-h6 bbh-expert__name"} -->
							<p class="bbh-h6 bbh-expert__name">Stephen James</p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"bbh-expert__role"} -->
							<p class="bbh-expert__role"><span class="bbh-expert__role-pre">Founder of</span><span class="bbh-expert__org">ProjectLifeMastery</span></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:html -->
					<img class="bbh-expert__logo bbh-expert__logo--plm" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-logo-projectlifemastery.png' ) ); ?>" alt="Project Life Mastery" />
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
				<blockquote class="bbh-expert__quote"><p class="bbh-expert__text">“I looked at Kajabi and Thinkific and a variety of others, but they didn’t accomplish what I was looking for, they didn’t allow the customization that I wanted for my customers.”</p></blockquote>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-expert","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-expert">
				<!-- wp:group {"className":"bbh-expert__info","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-expert__info">
					<!-- wp:group {"className":"bbh-expert__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-expert__who">
						<!-- wp:html -->
						<img class="bbh-expert__portrait" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-av-expert.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:group {"className":"bbh-expert__id","layout":{"type":"default"}} -->
						<div class="wp-block-group bbh-expert__id">
							<!-- wp:paragraph {"className":"bbh-h6 bbh-expert__name"} -->
							<p class="bbh-h6 bbh-expert__name">Vito Peleg</p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"bbh-expert__role"} -->
							<p class="bbh-expert__role"><span class="bbh-expert__role-pre">Founder of</span><span class="bbh-expert__org">Atarim</span></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:html -->
					<img class="bbh-expert__logo bbh-expert__logo--atarim" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-logo-atarim.png' ) ); ?>" alt="Atarim" />
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
				<blockquote class="bbh-expert__quote"><p class="bbh-expert__text">“BuddyBoss worked perfectly and literally saved us months and months of development”</p></blockquote>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-expert","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-expert">
				<!-- wp:group {"className":"bbh-expert__info","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-expert__info">
					<!-- wp:group {"className":"bbh-expert__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-expert__who">
						<!-- wp:html -->
						<img class="bbh-expert__portrait" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-av-expert.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:group {"className":"bbh-expert__id","layout":{"type":"default"}} -->
						<div class="wp-block-group bbh-expert__id">
							<!-- wp:paragraph {"className":"bbh-h6 bbh-expert__name"} -->
							<p class="bbh-h6 bbh-expert__name">Justin Ferriman</p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"bbh-expert__role"} -->
							<p class="bbh-expert__role"><span class="bbh-expert__role-pre">Founder &amp; Advisor of</span><span class="bbh-expert__org">LearnDash</span></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:html -->
					<img class="bbh-expert__logo bbh-expert__logo--learndash" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/hp-logo-learndash.png' ) ); ?>" alt="LearnDash" />
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:html -->
				<blockquote class="bbh-expert__quote"><p class="bbh-expert__text">“Big props to the guys at BuddyBoss for hitting a home run with this product. Such a great fit for many use-cases.”</p></blockquote>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"bbh-mp-rgrid bbh-stagger","layout":{"type":"default"}} -->
		<div class="wp-block-group bbh-mp-rgrid bbh-stagger">
			<!-- wp:group {"className":"bbh-mp-rcol","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-mp-rcol">
				<!-- wp:group {"className":"bbh-mp-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-mp-review">
					<!-- wp:html -->
					<img class="bbh-mp-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-trustpilot.png' ) ); ?>" alt="Trustpilot" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbh-mp-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-dwayne.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbh-mp-review__name">Dwayne Moore</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbh-mp-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__stars">
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
					<!-- wp:paragraph {"className":"bbh-mp-review__text"} -->
					<p class="bbh-mp-review__text">Great support people. Very attentive and helpful and quick to respond. We launched a new community site that includes an app. This was a major first-time undertaking for us, and we couldn't have done it without the expertise and patience determination we found in the support team at Buddyboss.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-mp-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-mp-review">
					<!-- wp:html -->
					<img class="bbh-mp-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-wordpress.svg' ) ); ?>" alt="WordPress" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbh-mp-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-nate.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbh-mp-review__name">Nate Walker</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbh-mp-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__stars">
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
					<!-- wp:paragraph {"className":"bbh-mp-review__text"} -->
					<p class="bbh-mp-review__text">I have used the BuddyBoss theme, platform, mobile app, done-for-you, and agency services for nearly two years. I am constantly impressed with the product and services. The leaders model excellence in software development and communication, feverously making groundbreaking improvements while keeping its community informed. The support services are first-rate, and the employees are dedicated and hardworking. I don't know what I would have done without BuddyBoss during this pandemic. Their software and support team have made it possible to build a custom multisite and mobile app from scratch. I'm incredibly grateful for BuddyBoss and look forward to investing in its continued success.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-mp-rcol","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-mp-rcol">
				<!-- wp:group {"className":"bbh-mp-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-mp-review">
					<!-- wp:html -->
					<img class="bbh-mp-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-trustpilot.png' ) ); ?>" alt="Trustpilot" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbh-mp-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-ryan.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbh-mp-review__name">Ryan Carlock</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbh-mp-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__stars">
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
					<!-- wp:paragraph {"className":"bbh-mp-review__text"} -->
					<p class="bbh-mp-review__text">BuddyBoss is leading the way for Wordpress Users to enter into the App Space with their Native App plugin, Platform Plugin and plan to make it even easier in the future. It has personally revolutionized our own business, and as full stack developers we can attest to the uniqueness of what they've created. Bad reviews happen every day, but it's not every day where you come across an opportunity to utilize something like BB App and Platform with freedom, and the support of those freedoms is why I'm sticking with them.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-mp-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-mp-review">
					<!-- wp:html -->
					<img class="bbh-mp-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-trustpilot.png' ) ); ?>" alt="Trustpilot" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbh-mp-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-kevin.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbh-mp-review__name">Kevin Castello</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbh-mp-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__stars">
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
					<!-- wp:paragraph {"className":"bbh-mp-review__text"} -->
					<p class="bbh-mp-review__text">The BuddyBoss DFY Web process was very well laid out. It provided video explanations of each step and instructions for completing those steps. The questionnaires at the beginning of each stage help to set the expectations of the upcoming work.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"bbh-mp-rcol","layout":{"type":"default"}} -->
			<div class="wp-block-group bbh-mp-rcol">
				<!-- wp:group {"className":"bbh-mp-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-mp-review">
					<!-- wp:html -->
					<img class="bbh-mp-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-capterra.svg' ) ); ?>" alt="Capterra" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbh-mp-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-kyler.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbh-mp-review__name">Kyler Boudreau</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbh-mp-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__stars">
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
					<!-- wp:paragraph {"className":"bbh-mp-review__text"} -->
					<p class="bbh-mp-review__text">I've helped built a niche community on Drupal. Used Discourse, Mighty Networks and Circle. BuddyBoss blows all of them out of the water. ZERO contest. I'm an so excited to have moved my private community and training to this platform.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"bbh-mp-review","layout":{"type":"default"}} -->
				<div class="wp-block-group bbh-mp-review">
					<!-- wp:html -->
					<img class="bbh-mp-review__src" src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/badge-wordpress.svg' ) ); ?>" alt="WordPress" />
					<!-- /wp:html -->
					<!-- wp:group {"className":"bbh-mp-review__who","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__who">
						<!-- wp:html -->
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon/av-circle.png' ) ); ?>" alt="" />
						<!-- /wp:html -->
						<!-- wp:html -->
						<span class="bbh-mp-review__name">Circle One</span>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"bbh-mp-review__stars","layout":{"type":"default"}} -->
					<div class="wp-block-group bbh-mp-review__stars">
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
					<!-- wp:paragraph {"className":"bbh-mp-review__text"} -->
					<p class="bbh-mp-review__text">Their line of products are consistent, elegant, and well thought out to build social platforms. Their support team is one of the best I've ever experienced and we owe our success to their entire team, especially their support staff who are organized, prompt, and reliable. Their support team is above the rest and is essential to the operations of our business and the future of our company's growth. The new releases and the continual improvements the BB team does is excellent! They really know what their doing, consistently deliver, and we're so thankful to have partnered with them two years ago.</p>
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
