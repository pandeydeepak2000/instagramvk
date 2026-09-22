<?php
/**
 * Title: Hidden blog heading
 * Slug: twentytwentyfive/hidden-blog-heading
 * Description: InstagramVK Viral Creator Hero Banner
 * Inserter: no
 */
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<section class="igvk-hero-section">
	<div class="igvk-hero-glow"></div>
	<div class="igvk-hero-content">
		<div class="igvk-hero-badge">
			<span class="igvk-badge-icon">🔥</span>
			<span>ALGORITHM • REACH • REVENUE</span>
		</div>
		<h1 class="igvk-hero-title">
			Crack the Instagram Algorithm &amp; <span class="igvk-gradient-text">Build an Unstoppable Brand</span>
		</h1>
		<p class="igvk-hero-subtitle">
			The tactical intelligence hub for creators and digital brands: Master viral Reels retention, scale high-ticket brand sponsorships, and automate 6-figure follower-to-buyer funnels.
		</p>
		<div class="igvk-hero-tags">
			<a href="<?php echo esc_url( $home_url . 'category/reels-growth/' ); ?>" class="igvk-pill">#ViralReels</a>
			<a href="<?php echo esc_url( $home_url . 'category/instagram-growth/' ); ?>" class="igvk-pill">#AlgorithmHacks</a>
			<a href="<?php echo esc_url( $home_url . 'category/creator-monetization/' ); ?>" class="igvk-pill">#CreatorEconomy</a>
			<a href="<?php echo esc_url( $home_url . 'category/creator-monetization/' ); ?>" class="igvk-pill">#BrandSponsorships</a>
			<a href="<?php echo esc_url( $home_url . 'category/reels-growth/' ); ?>" class="igvk-pill">#AudienceScaling</a>
		</div>
	</div>
</section>

<div class="igvk-section-header">
	<div class="igvk-section-title-wrap">
		<span class="igvk-section-bar"></span>
		<h2 class="igvk-section-title">Trending Creator Playbooks</h2>
		<span class="igvk-badge-count"><?php echo (int) wp_count_posts()->publish; ?> Blueprints</span>
	</div>
</div>
<!-- /wp:html -->