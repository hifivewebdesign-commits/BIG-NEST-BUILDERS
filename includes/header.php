<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Master Site Header (Prominent Logo with Clean Menu - Z-Index 100) -->
<header class="site-header fixed inset-x-0 top-0 z-[100] transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-gray-200/80 shadow-sm">
  <div class="container-x flex h-20 sm:h-24 md:h-[96px] items-center justify-between gap-4">
    
    <!-- Left: Prominent Big Nest Builders Logo -->
    <a href="#hero" aria-label="<?php echo SITE_NAME; ?> Home" class="logo-container group shrink-0 py-1.5">
      <img 
        src="assets/images/logo-web.png" 
        alt="<?php echo SITE_NAME; ?> - <?php echo SITE_TAGLINE; ?>" 
        id="header-logo"
        class="h-14 sm:h-18 md:h-[80px] lg:h-[86px] w-auto max-w-[260px] sm:max-w-[320px] object-contain transition-transform duration-300 group-hover:scale-105 drop-shadow-sm"
      />
    </a>

    <!-- Center: Desktop Navigation (Clean Menu without 123 numbers) -->
    <nav class="hidden lg:flex items-center gap-2 xl:gap-4">
      <?php foreach ($nav_items as $item): ?>
        <a 
          href="<?php echo $item['url']; ?>" 
          class="nav-link group relative px-3 py-2 text-[15px] font-bold text-[#17191F] hover:text-[#078FEA] transition-colors"
        >
          <span class="tracking-wide"><?php echo $item['title']; ?></span>
          <span class="nav-underline absolute inset-x-3 -bottom-0.5 h-[2px] origin-left bg-gradient-to-r from-[#078FEA] to-[#D5E900] transition-transform duration-300 scale-x-0 group-hover:scale-x-100"></span>
        </a>
      <?php endforeach; ?>
    </nav>

    <!-- Right: Quick Phone Shortcut & Get Free Quote CTA Button (Desktop Only) -->
    <div class="hidden lg:flex items-center gap-3 xl:gap-4 shrink-0">
      <a 
        href="tel:<?php echo SITE_PHONE_TEL; ?>" 
        class="nav-phone hidden xl:inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#17191F] border border-gray-200 rounded-full px-4 py-2 bg-gray-50 hover:bg-[#078FEA]/10 hover:border-[#078FEA]/40 hover:text-[#078FEA] transition-all shadow-sm group"
      >
        <span class="icon-pod-2026 icon-pod-blue !rounded-full h-6 w-6">
          <i data-lucide="phone" class="w-3 h-3 text-[#078FEA]"></i>
        </span>
        <span><?php echo SITE_PHONE; ?></span>
      </a>

      <a href="#contact" class="btn-pill btn-royal text-xs uppercase tracking-wider !h-12 !pl-6 !pr-2 shadow-md">
        <span>Get Free Quote</span>
        <span class="icon-bubble !w-8 !h-8 !bg-[#078FEA] text-white">
          <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
        </span>
      </a>
    </div>

    <!-- Mobile Hamburger Toggle (High Contrast 2026 Pod) -->
    <button 
      id="mobile-menu-btn" 
      class="lg:hidden icon-pod-2026 icon-pod-blue h-11 w-11 text-[#17191F]" 
      aria-label="Toggle navigation menu"
    >
      <i data-lucide="menu" class="w-5 h-5"></i>
    </button>

  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div id="mobile-nav-drawer" class="mobile-nav-drawer">
  <div class="flex items-center justify-between pb-6 border-b border-white/10">
    <a href="#hero" class="inline-flex items-center">
      <img src="assets/images/logo-web.png" alt="<?php echo SITE_NAME; ?>" class="h-16 w-auto object-contain brightness-0 invert" />
    </a>
    <button id="close-mobile-menu-btn" class="icon-pod-2026 icon-pod-dark h-11 w-11 text-white" aria-label="Close menu">
      <i data-lucide="x" class="w-5 h-5"></i>
    </button>
  </div>

  <nav class="flex flex-col gap-4 py-8">
    <?php foreach ($nav_items as $item): ?>
      <a href="<?php echo $item['url']; ?>" class="mobile-nav-link text-2xl font-display font-bold text-white hover:text-[#078FEA] transition-colors py-2">
        <span><?php echo $item['title']; ?></span>
      </a>
    <?php endforeach; ?>
  </nav>

  <div class="pt-6 border-t border-white/10 flex flex-col gap-4">
    <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="flex items-center gap-3 text-white/90 text-sm font-semibold">
      <i data-lucide="phone-call" class="w-4 h-4 text-[#078FEA]"></i>
      <span>Direct Line: <?php echo SITE_PHONE; ?></span>
    </a>
  </div>
</div>
