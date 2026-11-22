<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Brand Introduction & About Section (Editorial Split Layout with Scroll Animations) -->
<section id="about" class="section-y relative bg-[#F8FAFC] overflow-hidden border-b border-gray-200">
  <div class="blueprint-bg pointer-events-none absolute inset-0 opacity-[0.06]"></div>

  <div class="container-x relative z-10">
    
    <!-- Top Editorial Split -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
      
      <!-- Left Column: Narrative & Values -->
      <div class="lg:col-span-7">
        
        <div class="eyebrow reveal-up">
          <span class="inline-block w-8 h-[2px] bg-[#078FEA]"></span>
          <span>/ ABOUT BIG NEST BUILDERS</span>
        </div>

        <h2 class="mt-4 font-display text-display-2 leading-[1.02] tracking-[-0.035em] text-[#111827] reveal-up delay-75">
          More Than Construction.<br/>
          <em class="font-display italic gradient-text">We Build Your Dream Spaces.</em>
        </h2>

        <p class="mt-6 text-base sm:text-lg leading-[1.75] text-[#4B5563] reveal-up delay-100">
          At <strong class="text-[#111827] font-bold">Big Nest Builders</strong>, we believe a home is far more than just a concrete structure. It is an enduring sanctuary where family comfort, lifelong memories, and daily living seamlessly converge. 
        </p>

        <p class="mt-4 text-base sm:text-lg leading-[1.75] text-[#4B5563] reveal-up delay-150">
          From architectural planning, structural RCC construction and modern remodeling to custom modular interiors, electrical distribution, plumbing and premium painting, we provide end-to-end solutions designed around your individual vision with complete milestone accountability.
        </p>

        <!-- Mission & Approach Cards -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-5">
          
          <div class="rounded-3xl border border-gray-200 bg-white p-6 sm:p-7 shadow-sm hover:border-[#078FEA] hover:shadow-lg transition-all duration-300 reveal-up delay-200 group">
            <div class="flex items-center gap-3.5">
              <span class="icon-pod-2026 icon-pod-blue h-11 w-11">
                <i data-lucide="compass" class="w-5 h-5"></i>
              </span>
              <h4 class="font-display text-xl font-bold text-[#111827]">Our Mission</h4>
            </div>
            <p class="mt-3.5 text-sm leading-relaxed text-[#4B5563]">
              To empower homeowners with turnkey construction and architectural excellence, turning dream concepts into durable, beautiful spaces.
            </p>
          </div>

          <div class="rounded-3xl border border-gray-200 bg-white p-6 sm:p-7 shadow-sm hover:border-[#D5E900] hover:shadow-lg transition-all duration-300 reveal-up delay-250 group">
            <div class="flex items-center gap-3.5">
              <span class="icon-pod-2026 icon-pod-royal h-11 w-11">
                <i data-lucide="workflow" class="w-5 h-5"></i>
              </span>
              <h4 class="font-display text-xl font-bold text-[#111827]">Our Approach</h4>
            </div>
            <p class="mt-3.5 text-sm leading-relaxed font-semibold text-[#111827]">
              <span class="text-[#078FEA]">Understand.</span> 
              <span class="text-[#071B85]">Plan.</span> 
              <span class="text-[#078FEA]">Execute.</span> 
              <span class="text-emerald-600">Complete.</span>
            </p>
            <p class="mt-1 text-xs text-[#6B7280]">
              Milestone delivery with clear quality stage sign-offs.
            </p>
          </div>

        </div>

        <!-- CTA & Contact Shortcut -->
        <div class="mt-9 flex flex-wrap items-center gap-4 reveal-up delay-300">
          <a href="#services" class="btn-pill btn-royal text-xs uppercase tracking-wider">
            <span>Explore All Services</span>
            <span class="icon-bubble">
              <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
            </span>
          </a>

          <a href="<?php echo get_whatsapp_link('General Enquiry'); ?>" target="_blank" rel="noopener" class="btn-pill btn-outline-dark text-xs uppercase tracking-wider !border-emerald-300 !text-emerald-700 hover:!bg-emerald-50">
            <i data-lucide="message-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>Chat With Engineers</span>
          </a>
        </div>

      </div>

      <!-- Right Column: Asymmetrical Double Image Composition with Architectural Accent -->
      <div class="lg:col-span-5 relative reveal-scale delay-150">
        <div class="relative mx-auto max-w-md lg:max-w-none">
          
          <!-- Large Main Image with Border Glow -->
          <div class="relative overflow-hidden rounded-[32px] border-2 border-white bg-white shadow-2xl group">
            <img 
              src="assets/images/about-villa.jpg" 
              alt="Big Nest Builders Completed Villa Architecture" 
              class="w-full h-[440px] object-cover transition-transform duration-700 group-hover:scale-105"
            />
          </div>

          <!-- Smaller Overlapping Supporting Image -->
          <div class="absolute -bottom-10 -left-6 sm:-left-10 w-52 sm:w-60 overflow-hidden rounded-2xl border-4 border-white bg-white shadow-2xl hidden sm:block reveal-left delay-300">
            <img 
              src="assets/images/about-architect.jpg" 
              alt="Big Nest Builders Site Inspection and Planning" 
              class="w-full h-44 object-cover"
            />
            <div class="p-3 bg-white">
              <div class="flex items-center gap-1.5 text-xs font-bold text-[#071B85]">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-[#078FEA]"></i>
                <span>Supervised On-Site</span>
              </div>
              <p class="text-[11px] text-gray-500 mt-0.5 font-medium">Bangalore Civil Standards</p>
            </div>
          </div>

          <!-- Decorative Brand Accent Badge -->
          <div class="absolute -top-5 -right-5 grid h-22 w-22 p-4 place-items-center rounded-3xl bg-[#071B85] text-white shadow-xl border-4 border-white animate-pulse">
            <div class="text-center">
              <div class="font-display text-2xl font-extrabold leading-none text-[#D5E900]">10+</div>
              <div class="text-[10px] uppercase font-bold tracking-wider mt-1 text-white/90">Trades</div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>
