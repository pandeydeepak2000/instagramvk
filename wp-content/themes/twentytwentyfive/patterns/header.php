<?php
/**
 * Title: Header
 * Slug: twentytwentyfive/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: InstagramVK Ultra-Modern Creator Header
 */
$logo_url = home_url( '/wp-content/uploads/igvk-nav-logo.jpg' );
$home_url = home_url( '/' );
?>
<!-- wp:html -->
<header class="igvk-header">
	<div class="igvk-header-inner">
		<div class="igvk-brand">
			<a href="<?php echo esc_url( $home_url ); ?>" class="igvk-logo-link" title="InstagramVK - Viral Instagram Growth & Creator Monetization">
				<img src="<?php echo esc_url( $logo_url ); ?>" alt="InstagramVK" class="igvk-logo-img" />
				<div class="igvk-brand-text">
					<span class="igvk-brand-title">Instagram<span class="igvk-gradient-text">VK</span></span>
					<span class="igvk-brand-sub">CREATOR GROWTH LAB</span>
				</div>
			</a>
		</div>

		<nav class="igvk-nav" aria-label="Main Navigation">
			<ul class="igvk-nav-list">
				<li><a href="<?php echo esc_url( $home_url ); ?>" class="igvk-nav-item active">Home</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/reels-growth/' ); ?>" class="igvk-nav-item">Reels Growth</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/creator-monetization/' ); ?>" class="igvk-nav-item">Monetization</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/instagram-growth/' ); ?>" class="igvk-nav-item">Algorithm Secrets</a></li>
				<li><a href="<?php echo esc_url( $home_url . 'category/creator-monetization/' ); ?>" class="igvk-nav-item">Brand Deals</a></li>
			</ul>
		</nav>

		<div class="igvk-header-actions">
			<a href="<?php echo esc_url( $home_url . 'instagram-algorithm-ranking-signals-viral-reach-2024/' ); ?>" class="igvk-btn-cta">
				<span>Viral Playbook</span> 🔥
			</a>
			<button class="igvk-mobile-toggle" aria-label="Toggle navigation" onclick="document.querySelector('.igvk-header').classList.toggle('igvk-mobile-open')">
				<span class="igvk-bar"></span>
				<span class="igvk-bar"></span>
				<span class="igvk-bar"></span>
			</button>
		</div>
	</div>
</header>
<!-- /wp:html -->