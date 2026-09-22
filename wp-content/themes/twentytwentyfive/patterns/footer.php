<?php
/**
 * Title: Footer
 * Slug: twentytwentyfive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: InstagramVK Luxury Creator Footer
 */
$logo_url = home_url( '/wp-content/uploads/igvk-nav-logo.jpg' );
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<footer class="igvk-footer">
	<div class="igvk-footer-inner">
		<div class="igvk-footer-grid">
			<!-- Col 1: Brand Info -->
			<div class="igvk-footer-col igvk-footer-about">
				<div class="igvk-brand">
					<a href="<?php echo esc_url( $home_url ); ?>" class="igvk-logo-link">
						<img src="<?php echo esc_url( $logo_url ); ?>" alt="InstagramVK" class="igvk-logo-img" />
						<div class="igvk-brand-text">
							<span class="igvk-brand-title">Instagram<span class="igvk-gradient-text">VK</span></span>
							<span class="igvk-brand-sub">CREATOR GROWTH LAB</span>
						</div>
					</a>
				</div>
				<p class="igvk-footer-desc">
					InstagramVK is the definitive intelligence platform for ambitious creators, influencers, and digital brands scaling organic audience reach, cracking the Reels algorithm, and generating six-figure online income.
				</p>
				<div class="igvk-social-links">
					<a href="https://instagram.com" target="_blank" rel="noopener" class="igvk-social-icon" title="Instagram">📸</a>
					<a href="https://youtube.com" target="_blank" rel="noopener" class="igvk-social-icon" title="YouTube">▶️</a>
					<a href="https://threads.net" target="_blank" rel="noopener" class="igvk-social-icon" title="Threads">🧵</a>
				</div>
			</div>

			<!-- Col 2: Creator Growth Pillars -->
			<div class="igvk-footer-col">
				<h4 class="igvk-footer-heading">Creator Pillars</h4>
				<ul class="igvk-footer-links">
					<li><a href="<?php echo esc_url( $home_url . 'category/reels-growth/' ); ?>">Viral Reels Engineering</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'category/creator-monetization/' ); ?>">Sponsorships &amp; Brand Deals</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'category/instagram-growth/' ); ?>">Algorithm Ranking Signals</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'category/creator-monetization/' ); ?>">Digital Product Funnels</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'category/instagram-growth/' ); ?>">Broadcast Channels Scaling</a></li>
				</ul>
			</div>

			<!-- Col 3: Company & Trust -->
			<div class="igvk-footer-col">
				<h4 class="igvk-footer-heading">Resources &amp; Trust</h4>
				<ul class="igvk-footer-links">
					<li><a href="<?php echo esc_url( $home_url . 'about-us/' ); ?>">About InstagramVK</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'contact-us/' ); ?>">Contact &amp; Press</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'privacy-policy/' ); ?>">Privacy Policy</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'terms-of-service/' ); ?>">Terms of Service</a></li>
					<li><a href="<?php echo esc_url( $home_url . 'disclaimer/' ); ?>">Earnings Disclaimer</a></li>
				</ul>
			</div>

			<!-- Col 4: Newsletter -->
			<div class="igvk-footer-col igvk-footer-newsletter">
				<h4 class="igvk-footer-heading">Weekly Creator Drop</h4>
				<p class="igvk-newsletter-desc">Get the weekly breakdown of silent algorithm changes, trending audio signals, and viral monetization case studies.</p>
				<form class="igvk-newsletter-form" onsubmit="event.preventDefault(); alert('Subscribed to InstagramVK Creator Drop!');">
					<input type="email" placeholder="Your creator email..." required class="igvk-newsletter-input" />
					<button type="submit" class="igvk-newsletter-btn">Join 25K+ Creators</button>
				</form>
				<span class="igvk-ssl-badge">🔒 100% Free • No Spam • Instant Unsubscribe</span>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="igvk-footer-bottom">
			<p>&copy; <?php echo date( 'Y' ); ?> InstagramVK.com. All rights reserved. Built for modern digital creators.</p>
			<div class="igvk-trust-tags">
				<span>⚡ Verified Creator Strategies</span>
				<span>🛡️ DMCA Protected</span>
				<span>✨ 256-Bit SSL Encrypted</span>
			</div>
		</div>
	</div>
</footer>
<!-- /wp:html -->