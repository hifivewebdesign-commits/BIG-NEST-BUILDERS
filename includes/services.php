<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- ==========================================================================
     OUR SERVICES & CAPABILITIES SHOWCASE (World-Class Architectural Design)
     Visual Reference: https://kpconstructions.group/
     ========================================================================== -->
<section id="services" class="services-section section-y relative overflow-hidden bg-[#0B111E] text-white">
  
  <!-- Subtle Architectural Blueprint Grid Background -->
  <div class="blueprint-bg-dark pointer-events-none absolute inset-0 opacity-[0.07]"></div>

  <!-- Ambient Glow Gradients -->
  <div class="pointer-events-none absolute -top-40 -left-40 h-[600px] w-[600px] rounded-full bg-[#078FEA]/10 blur-[140px]"></div>
  <div class="pointer-events-none absolute bottom-0 right-0 h-[600px] w-[600px] rounded-full bg-[#D5E900]/5 blur-[160px]"></div>

  <div class="container-x relative z-10">
    
    <!-- Section Header -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 pb-12 border-b border-white/10">
      <div class="max-w-2xl">
        <div class="eyebrow eyebrow-dark reveal-up">
          <span class="inline-block w-8 h-[2px] bg-[#D5E900]"></span>
          <span>// 03. FULL-SCOPE CAPABILITIES</span>
        </div>
        <h2 class="mt-4 font-display text-display-2 leading-[1.04] tracking-[-0.035em] text-white reveal-up delay-75">
          Complete Home Solutions.<br/>
          <em class="font-serif italic font-normal text-transparent bg-clip-text bg-gradient-to-r from-[#078FEA] via-[#38BDF8] to-[#D5E900]">
            10 Disciplines. Zero Compromise.
          </em>
        </h2>
      </div>

      <div class="max-w-md reveal-up delay-100 flex flex-col justify-between">
        <p class="text-sm sm:text-base leading-relaxed text-white/75 font-normal">
          We eliminate the friction of managing scattered contractors. From ground-up turnkey construction to bespoke interiors and specialist trades, Big Nest Builders coordinates every single phase under direct in-house engineering supervision.
        </p>
        <div class="mt-6 flex flex-wrap items-center gap-4">
          <a href="<?php echo get_whatsapp_link('General Services Consultation'); ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#D5E900] hover:text-white transition-colors group">
            <span>Talk to Chief Project Engineer</span>
            <i data-lucide="arrow-up-right" class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
          </a>
          <span class="text-xs text-white/40">•</span>
          <span class="text-xs text-white/60 font-mono">100% In-House Execution</span>
        </div>
      </div>
    </div>

    <!-- Flagship Capabilities Spotlight (2 Large Hero Showcase Cards) -->
    <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8 reveal-scale delay-150">
      
      <!-- Flagship 1: Turnkey Residential Construction -->
      <div class="group relative overflow-hidden rounded-[32px] border border-white/15 bg-gradient-to-b from-white/[0.08] to-white/[0.02] backdrop-blur-xl p-8 sm:p-10 flex flex-col justify-between transition-all duration-500 hover:border-[#078FEA] hover:shadow-[0_25px_60px_-15px_rgba(7,143,234,0.35)]">
        <!-- Background Image with Gradient Overlay -->
        <div class="absolute inset-0 z-0 overflow-hidden">
          <img 
            src="<?php echo $services[0]['image']; ?>" 
            alt="Residential Construction by Big Nest Builders"
            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-35"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-[#0B111E] via-[#0B111E]/80 to-[#0B111E]/40"></div>
        </div>

        <div class="relative z-10">
          <div class="flex items-center justify-between pb-6 border-b border-white/10">
            <span class="inline-flex items-center gap-2 rounded-full bg-[#D5E900]/15 border border-[#D5E900]/30 px-3.5 py-1 text-[11px] font-mono font-bold tracking-wider text-[#D5E900]">
              <span class="w-1.5 h-1.5 rounded-full bg-[#D5E900] animate-pulse"></span>
              FLAGSHIP DISCIPLINE
            </span>
            <span class="font-mono text-2xl font-bold text-white/40">01 / 10</span>
          </div>

          <h3 class="mt-6 font-display text-2xl sm:text-3xl lg:text-4xl font-bold text-white leading-snug">
            Turnkey Residential Construction
          </h3>

          <p class="mt-4 text-sm sm:text-base text-white/80 leading-relaxed max-w-xl">
            Complete villa and individual home building under a single unified contract. From soil testing, RCC foundation and statutory approvals to 3D architectural elevations and key handover.
          </p>

          <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3">
            <?php foreach ($services[0]['features'] as $feat): ?>
              <div class="flex items-center gap-2.5 text-xs sm:text-sm text-white/90 font-medium">
                <span class="grid h-5 w-5 place-items-center rounded-full bg-[#078FEA] text-white flex-shrink-0">
                  <i data-lucide="check" class="w-3.5 h-3.5"></i>
                </span>
                <span><?php echo $feat; ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="relative z-10 mt-8 pt-6 border-t border-white/10 flex flex-wrap items-center gap-4">
          <a 
            href="#contact" 
            class="service-enquire-trigger btn-pill btn-blue text-xs uppercase tracking-wider shadow-lg"
            data-service-name="Residential Construction"
          >
            <span>Request Build Consultation</span>
            <span class="icon-bubble">
              <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
            </span>
          </a>

          <a 
            href="<?php echo get_whatsapp_link('Residential Construction'); ?>" 
            target="_blank" 
            rel="noopener"
            class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-white transition-colors px-4 py-2 rounded-full border border-emerald-500/30 bg-emerald-500/10"
          >
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>WhatsApp Estimate</span>
          </a>
        </div>
      </div>

      <!-- Flagship 2: Home Renovation & Remodeling -->
      <div class="group relative overflow-hidden rounded-[32px] border border-white/15 bg-gradient-to-b from-white/[0.08] to-white/[0.02] backdrop-blur-xl p-8 sm:p-10 flex flex-col justify-between transition-all duration-500 hover:border-[#078FEA] hover:shadow-[0_25px_60px_-15px_rgba(7,143,234,0.35)]">
        <!-- Background Image with Gradient Overlay -->
        <div class="absolute inset-0 z-0 overflow-hidden">
          <img 
            src="<?php echo $services[1]['image']; ?>" 
            alt="Home Renovation by Big Nest Builders"
            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-35"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-[#0B111E] via-[#0B111E]/80 to-[#0B111E]/40"></div>
        </div>

        <div class="relative z-10">
          <div class="flex items-center justify-between pb-6 border-b border-white/10">
            <span class="inline-flex items-center gap-2 rounded-full bg-[#078FEA]/20 border border-[#078FEA]/40 px-3.5 py-1 text-[11px] font-mono font-bold tracking-wider text-[#078FEA]">
              <span class="w-1.5 h-1.5 rounded-full bg-[#078FEA] animate-pulse"></span>
              SPACE TRANSFORMATION
            </span>
            <span class="font-mono text-2xl font-bold text-white/40">02 / 10</span>
          </div>

          <h3 class="mt-6 font-display text-2xl sm:text-3xl lg:text-4xl font-bold text-white leading-snug">
            Full Home Renovation & Remodeling
          </h3>

          <p class="mt-4 text-sm sm:text-base text-white/80 leading-relaxed max-w-xl">
            Breathe new life into aging spaces. Structural reconfiguration, wall demolition, contemporary facade elevation, plumbing line replacements, and complete interior modernization.
          </p>

          <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3">
            <?php foreach ($services[1]['features'] as $feat): ?>
              <div class="flex items-center gap-2.5 text-xs sm:text-sm text-white/90 font-medium">
                <span class="grid h-5 w-5 place-items-center rounded-full bg-[#078FEA] text-white flex-shrink-0">
                  <i data-lucide="check" class="w-3.5 h-3.5"></i>
                </span>
                <span><?php echo $feat; ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="relative z-10 mt-8 pt-6 border-t border-white/10 flex flex-wrap items-center gap-4">
          <a 
            href="#contact" 
            class="service-enquire-trigger btn-pill btn-white text-xs uppercase tracking-wider shadow-lg"
            data-service-name="Home Renovation"
          >
            <span>Request Renovation Plan</span>
            <span class="icon-bubble">
              <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
            </span>
          </a>

          <a 
            href="<?php echo get_whatsapp_link('Home Renovation'); ?>" 
            target="_blank" 
            rel="noopener"
            class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-white transition-colors px-4 py-2 rounded-full border border-emerald-500/30 bg-emerald-500/10"
          >
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>WhatsApp Estimate</span>
          </a>
        </div>
      </div>

    </div>

    <!-- Interactive Category Filter Pills -->
    <div class="mt-16 pt-10 border-t border-white/10 flex flex-col md:flex-row md:items-center justify-between gap-6 reveal-up delay-200">
      <div>
        <h3 class="font-display text-2xl sm:text-3xl font-bold text-white">All 10 Specialized Disciplines</h3>
        <p class="mt-1 text-xs sm:text-sm text-white/60">Select a discipline category to filter specific service scopes</p>
      </div>

      <!-- Filter Buttons -->
      <div class="flex flex-wrap items-center gap-2.5" id="services-category-filters">
        <button 
          type="button"
          class="service-cat-filter-btn active rounded-full px-4 py-2 text-xs font-mono font-bold tracking-wider uppercase transition-all duration-300 border border-[#078FEA] bg-[#078FEA]/20 text-white shadow-md"
          data-filter="all"
        >
          <span>All Disciplines</span>
          <span class="ml-1.5 rounded-full bg-white/20 px-2 py-0.5 text-[10px]">10</span>
        </button>

        <button 
          type="button"
          class="service-cat-filter-btn rounded-full px-4 py-2 text-xs font-mono font-bold tracking-wider uppercase transition-all duration-300 border border-white/10 text-white/70 hover:border-white/30 hover:text-white"
          data-filter="civil"
        >
          <span>Civil & Build</span>
          <span class="ml-1.5 rounded-full bg-white/10 px-2 py-0.5 text-[10px]">2</span>
        </button>

        <button 
          type="button"
          class="service-cat-filter-btn rounded-full px-4 py-2 text-xs font-mono font-bold tracking-wider uppercase transition-all duration-300 border border-white/10 text-white/70 hover:border-white/30 hover:text-white"
          data-filter="interior"
        >
          <span>Interiors & Finishes</span>
          <span class="ml-1.5 rounded-full bg-white/10 px-2 py-0.5 text-[10px]">4</span>
        </button>

        <button 
          type="button"
          class="service-cat-filter-btn rounded-full px-4 py-2 text-xs font-mono font-bold tracking-wider uppercase transition-all duration-300 border border-white/10 text-white/70 hover:border-white/30 hover:text-white"
          data-filter="systems"
        >
          <span>Trades & Maintenance</span>
          <span class="ml-1.5 rounded-full bg-white/10 px-2 py-0.5 text-[10px]">4</span>
        </button>
      </div>
    </div>

    <!-- The 10 Master Architectural Discipline Cards Grid -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="services-grid-container">
      <?php foreach ($services as $index => $srv): 
        $staggerDelay = 'delay-' . min(500, (($index % 3) + 1) * 100);
      ?>
        <div 
          class="service-discipline-card group relative flex flex-col justify-between overflow-hidden rounded-[26px] border border-white/10 bg-[#131A29]/80 backdrop-blur-md p-6 sm:p-7 transition-all duration-500 hover:-translate-y-2 hover:border-[#078FEA] hover:bg-[#182236] hover:shadow-[0_20px_45px_-10px_rgba(7,143,234,0.3)] reveal-up <?php echo $staggerDelay; ?>"
          data-service-category="<?php echo $srv['category']; ?>"
        >
          <div>
            <!-- Card Image Frame with Hover Zoom & Gradient -->
            <div class="relative h-48 sm:h-52 w-full overflow-hidden rounded-2xl">
              <img 
                src="<?php echo $srv['image']; ?>" 
                alt="<?php echo $srv['title']; ?> - Big Nest Builders"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-108"
                loading="lazy"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-[#131A29] via-black/25 to-black/30"></div>

              <!-- Top Badges on Image -->
              <div class="absolute top-3.5 left-3.5 right-3.5 flex items-center justify-between">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-black/60 backdrop-blur-md border border-white/15 px-2.5 py-1 text-[11px] font-mono font-bold text-white">
                  <span class="w-1.5 h-1.5 rounded-full bg-[#D5E900]"></span>
                  <?php echo $srv['num']; ?>
                </span>

                <span class="rounded-full bg-black/60 backdrop-blur-md border border-white/15 px-2.5 py-1 text-[10px] font-mono uppercase tracking-wider text-[#D5E900] font-bold">
                  <?php echo $srv['tag']; ?>
                </span>
              </div>

              <!-- Bottom Category Tag on Image -->
              <div class="absolute bottom-3 left-3 text-[11px] font-mono text-white/80 font-bold uppercase tracking-wider">
                <?php echo $srv['category_name']; ?>
              </div>
            </div>

            <!-- Card Header & Title -->
            <div class="mt-5">
              <h4 class="font-display text-xl sm:text-2xl font-bold text-white group-hover:text-[#078FEA] transition-colors leading-snug">
                <?php echo $srv['title']; ?>
              </h4>

              <p class="mt-2.5 text-xs sm:text-sm text-white/70 font-normal leading-relaxed">
                <?php echo $srv['desc']; ?>
              </p>
            </div>

            <!-- Deliverables Checklist -->
            <div class="mt-5 pt-4 border-t border-white/10 space-y-2.5">
              <?php foreach ($srv['features'] as $fIndex => $feat): ?>
                <div class="flex items-center gap-2.5 text-xs text-white/85">
                  <span class="badge-check-2026">
                    <i data-lucide="check" class="w-3 h-3 text-white"></i>
                  </span>
                  <span class="font-medium"><?php echo $feat; ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Card Bottom Action Row -->
          <div class="mt-6 pt-5 border-t border-white/10 flex items-center justify-between">
            <a 
              href="#contact" 
              class="service-enquire-trigger inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-white hover:text-[#078FEA] transition-colors group/btn"
              data-service-name="<?php echo htmlspecialchars($srv['title']); ?>"
            >
              <span>Enquire Now</span>
              <span class="grid h-6 w-6 place-items-center rounded-full bg-white/10 text-white transition-all group-hover/btn:bg-[#078FEA] group-hover/btn:translate-x-0.5">
                <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
              </span>
            </a>

            <a 
              href="<?php echo get_whatsapp_link($srv['title']); ?>" 
              target="_blank" 
              rel="noopener"
              class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-400 hover:text-emerald-300 transition-colors"
              aria-label="WhatsApp enquiry for <?php echo $srv['title']; ?>"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
              <span>WhatsApp</span>
            </a>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

    <!-- Architectural Quality Guarantee & Assurance Strip -->
    <div class="mt-16 rounded-[28px] border border-white/10 bg-white/[0.03] backdrop-blur-md p-6 sm:p-8 lg:p-10 reveal-up">
      <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-6 border-b border-white/10">
        <div>
          <span class="text-xs font-mono uppercase tracking-[0.2em] text-[#D5E900] font-bold">THE BIG NEST ASSURANCE</span>
          <h4 class="mt-1 font-display text-xl sm:text-2xl font-bold text-white">
            Uncompromising Standards Across Every Discipline
          </h4>
        </div>
        <a 
          href="#contact" 
          class="btn-pill btn-white text-xs uppercase tracking-wider self-start lg:self-auto"
        >
          <span>Schedule Site Inspection</span>
          <span class="icon-bubble"><i data-lucide="arrow-up-right" class="w-4 h-4"></i></span>
        </a>
      </div>

      <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="group flex items-start gap-3.5">
          <div class="icon-pod-2026 icon-pod-dark h-11 w-11 text-[#078FEA]">
            <i data-lucide="shield-check" class="w-5 h-5"></i>
          </div>
          <div>
            <h5 class="text-sm font-bold text-white group-hover:text-[#078FEA] transition-colors">Zero Subcontract Risk</h5>
            <p class="mt-1 text-xs text-white/60 leading-relaxed">Direct in-house engineers, certified electricians, and master carpenters only.</p>
          </div>
        </div>

        <div class="group flex items-start gap-3.5">
          <div class="icon-pod-2026 icon-pod-dark h-11 w-11 text-[#D5E900]">
            <i data-lucide="layers" class="w-5 h-5"></i>
          </div>
          <div>
            <h5 class="text-sm font-bold text-white group-hover:text-[#D5E900] transition-colors">ISI-Grade Materials</h5>
            <p class="mt-1 text-xs text-white/60 leading-relaxed">Branded cement, 550D TMT steel bars, marine plywood, and fire-rated cables.</p>
          </div>
        </div>

        <div class="group flex items-start gap-3.5">
          <div class="icon-pod-2026 icon-pod-dark h-11 w-11 text-[#078FEA]">
            <i data-lucide="smartphone" class="w-5 h-5"></i>
          </div>
          <div>
            <h5 class="text-sm font-bold text-white group-hover:text-[#078FEA] transition-colors">Daily WhatsApp Logs</h5>
            <p class="mt-1 text-xs text-white/60 leading-relaxed">Timestamped photo updates and milestone delivery reports sent directly to you.</p>
          </div>
        </div>

        <div class="group flex items-start gap-3.5">
          <div class="icon-pod-2026 icon-pod-dark h-11 w-11 text-emerald-400">
            <i data-lucide="award" class="w-5 h-5"></i>
          </div>
          <div>
            <h5 class="text-sm font-bold text-white group-hover:text-emerald-400 transition-colors">5-Year Warranty</h5>
            <p class="mt-1 text-xs text-white/60 leading-relaxed">Comprehensive structural integrity warranty with dedicated post-handover care.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>