<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Master Site Footer (Royal Blue #071B85 Background) -->
<footer class="relative overflow-hidden bg-[#071B85] text-white pt-20 pb-10 border-t-4 border-[#D5E900]">
  
  <div class="blueprint-bg-dark pointer-events-none absolute inset-0 opacity-[0.08]"></div>

  <div class="container-x relative z-10">
    
    <!-- Top 4 Columns Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-10 pb-16 border-b border-white/15">
      
      <!-- Column 1: Brand & Identity (Col Span 4) -->
      <div class="lg:col-span-4">
        <a href="#hero" class="inline-flex items-center group">
          <img 
            src="assets/images/Footer%20White%20logo.png" 
            alt="<?php echo SITE_NAME; ?>" 
            class="h-20 sm:h-24 md:h-28 w-auto object-contain transition-transform duration-300 group-hover:scale-105 drop-shadow-md"
          />
        </a>

        <div class="mt-4 font-display text-lg font-bold tracking-tight text-[#D5E900]">
          <?php echo SITE_TAGLINE; ?>
        </div>

        <p class="mt-3 text-sm leading-relaxed text-white/75 max-w-sm">
          Complete residential construction, villa renovation, bespoke modular interiors and essential home maintenance solutions across Bangalore.
        </p>

        <!-- Social & Quick Action Buttons -->
        <div class="mt-6 flex items-center gap-3">
          <a 
            href="<?php echo SITE_WHATSAPP_URL; ?>" 
            target="_blank" 
            rel="noopener" 
            class="icon-pod-2026 icon-pod-dark h-11 w-11 hover:!bg-[#25D366] hover:!text-white hover:!border-[#25D366] text-white/90"
            aria-label="WhatsApp"
          >
            <i data-lucide="message-circle" class="w-5 h-5"></i>
          </a>

          <a 
            href="<?php echo SITE_YOUTUBE_URL; ?>" 
            target="_blank" 
            rel="noopener" 
            class="icon-pod-2026 icon-pod-dark h-11 w-11 hover:!bg-red-600 hover:!text-white hover:!border-red-600 text-white/90"
            aria-label="YouTube Channel"
          >
            <?php echo get_youtube_svg('w-5 h-5'); ?>
          </a>

          <a 
            href="tel:<?php echo SITE_PHONE_TEL; ?>" 
            class="icon-pod-2026 icon-pod-dark h-11 w-11 hover:!bg-[#078FEA] hover:!text-white hover:!border-[#078FEA] text-white/90"
            aria-label="Direct Call"
          >
            <i data-lucide="phone-call" class="w-5 h-5"></i>
          </a>
        </div>
      </div>

      <!-- Column 2: Company Navigation (Col Span 2) -->
      <div class="lg:col-span-2">
        <h4 class="text-xs font-mono font-bold uppercase tracking-[0.2em] text-[#D5E900] mb-5">
          Company
        </h4>
        <ul class="space-y-3 text-sm font-medium">
          <li><a href="#hero" class="text-white/80 hover:text-[#D5E900] transition-colors">Home</a></li>
          <li><a href="#about" class="text-white/80 hover:text-[#D5E900] transition-colors">About Us</a></li>
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">Services</a></li>
          <li><a href="#projects" class="text-white/80 hover:text-[#D5E900] transition-colors">Our Projects</a></li>
          <li><a href="#process" class="text-white/80 hover:text-[#D5E900] transition-colors">Our Process</a></li>
          <li><a href="#contact" class="text-white/80 hover:text-[#D5E900] transition-colors">Contact Us</a></li>
        </ul>
      </div>

      <!-- Column 3: Specialized Services (Col Span 3) -->
      <div class="lg:col-span-3">
        <h4 class="text-xs font-mono font-bold uppercase tracking-[0.2em] text-[#D5E900] mb-5">
          Our Services
        </h4>
        <ul class="space-y-2.5 text-sm">
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">Residential Construction</a></li>
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">Home Renovation</a></li>
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">Interior Work & Woodwork</a></li>
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">Electrical Services</a></li>
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">Plumbing Services</a></li>
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">Carpentry & Paneling</a></li>
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">Painting & Coatings</a></li>
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">Tiles Fixing & Flooring</a></li>
          <li><a href="#services" class="text-white/80 hover:text-[#D5E900] transition-colors">WPVC Doors & Frames</a></li>
        </ul>
      </div>

      <!-- Column 4: Contact & Office (Col Span 3) -->
      <div class="lg:col-span-3">
        <h4 class="text-xs font-mono font-bold uppercase tracking-[0.2em] text-[#D5E900] mb-5">
          Head Office
        </h4>
        <div class="space-y-3.5 text-sm text-white/80">
          <p class="font-semibold text-white">BIG NEST BUILDERS</p>
          <p class="leading-relaxed">
            Near Gandhi Statue,<br/>
            Horamavu, Bangalore – 560043,<br/>
            Karnataka, India.
          </p>
          <div class="pt-2 space-y-2">
            <p class="flex items-center gap-2">
              <i data-lucide="phone" class="w-4 h-4 text-[#D5E900]"></i>
              <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="hover:underline font-semibold text-white"><?php echo SITE_PHONE; ?></a>
            </p>
            <p class="flex items-center gap-2">
              <i data-lucide="message-circle" class="w-4 h-4 text-emerald-400"></i>
              <a href="<?php echo get_whatsapp_link(); ?>" target="_blank" rel="noopener" class="hover:underline font-semibold text-emerald-300">WhatsApp Instant Chat</a>
            </p>
            <p class="flex items-center gap-2">
              <?php echo get_youtube_svg('w-4 h-4 text-red-500'); ?>
              <a href="<?php echo SITE_YOUTUBE_URL; ?>" target="_blank" rel="noopener" class="hover:underline font-semibold text-red-300">@big_nestbuilders</a>
            </p>
          </div>
        </div>
      </div>

    </div>

    <!-- Bottom Footer Bar -->
    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-white/60">
      <p>&copy; 2026 Big Nest Builders. All Rights Reserved.</p>
      <div class="flex items-center gap-6">
        <a href="privacy.php" class="hover:text-white transition-colors">Privacy Policy</a>
        <span>&bull;</span>
        <a href="terms.php" class="hover:text-white transition-colors">Terms & Conditions</a>
      </div>
    </div>

  </div>
</footer>

