<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Why Choose Us / Bento Grid Showcase (Reference "Seven reasons owners come back" with Staggered Scroll Animations) -->
<section id="why-us" class="section-y relative bg-white overflow-hidden border-b border-gray-200">
  <div class="blueprint-bg pointer-events-none absolute inset-0 opacity-[0.04]"></div>

  <div class="container-x relative z-10">
    
    <!-- Header with Eyebrow & Description -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-12 border-b border-gray-200">
      <div class="max-w-2xl">
        <div class="eyebrow reveal-up">
          <span class="inline-block w-8 h-[2px] bg-[#078FEA]"></span>
          <span>/ WHY BIG NEST</span>
        </div>
        <h2 class="mt-4 font-display text-display-2 leading-[1.02] tracking-[-0.035em] text-[#111827] reveal-up delay-75">
          Everything Your Home Needs.<br/>
          <em class="font-display italic gradient-text">One Reliable Team.</em>
        </h2>
      </div>
      <p class="max-w-sm text-sm sm:text-base leading-relaxed text-[#4B5563] reveal-up delay-100">
        Every commitment we make is backed by disciplined civil execution, transparent material specifications and verified on-site engineering supervision.
      </p>
    </div>

    <!-- 7 Bento Grid Cards (Asymmetrical Layout matching reference) -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-12 gap-6">
      
      <!-- 01 - Featured Large Card with Image & Blueprint Overlay (Col Span 6, Row Span 2) -->
      <div class="md:col-span-6 md:row-span-2 group relative overflow-hidden rounded-[32px] border border-[#111827] bg-[#111827] text-white p-8 md:p-10 flex flex-col justify-between min-h-[460px] shadow-2xl transition-all duration-500 hover:-translate-y-2 hover:border-[#078FEA] reveal-scale">
        <!-- Background Image & Gradient -->
        <div class="absolute inset-0 z-0">
          <img 
            src="assets/images/why-us-engineer.jpg" 
            alt="Big Nest Builders Quality Assurance" 
            class="h-full w-full object-cover opacity-60 transition-transform duration-1000 group-hover:scale-105"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-[#111827] via-[#111827]/75 to-transparent"></div>
          <div class="blueprint-bg-dark pointer-events-none absolute inset-0 opacity-25 mix-blend-overlay"></div>
        </div>

        <!-- Card Top Bar -->
        <div class="relative z-10 flex items-center justify-between">
          <span class="text-xs font-mono uppercase tracking-[0.2em] text-[#D5E900] font-bold">Featured Standard</span>
          <span class="font-display text-4xl font-extrabold text-white/30 group-hover:text-[#D5E900] transition-colors">01</span>
        </div>

        <!-- Card Content -->
        <div class="relative z-10 mt-20">
          <span class="inline-block py-1.5 px-3.5 rounded-full bg-white/10 text-xs font-bold uppercase tracking-wider text-white backdrop-blur mb-3.5 border border-white/15">
            Single-Window Delivery
          </span>
          <h3 class="font-display text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight text-white">
            Complete Home Solutions
          </h3>
          <p class="mt-3.5 text-sm sm:text-base leading-relaxed text-white/80 max-w-lg">
            From foundation civil construction and turnkey remodeling to fine interior carpentry and ongoing home maintenance, we provide all required trades seamlessly under one roof. No juggling between disparate sub-contractors.
          </p>
          
          <div class="mt-6 flex items-center gap-3">
            <a href="#services" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#D5E900] hover:text-white transition-colors group/link">
              <span>View All 10 Services</span>
              <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover/link:translate-x-1"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- 02 - Quality-Focused Work (Col Span 6) -->
      <div class="md:col-span-6 bento-card reveal-up delay-100 group">
        <div class="flex items-center justify-between">
          <span class="icon-pod-2026 icon-pod-blue h-12 w-12">
            <i data-lucide="award" class="w-6 h-6"></i>
          </span>
          <span class="font-display text-3xl font-extrabold text-gray-300">02</span>
        </div>
        <div class="mt-8">
          <h3 class="font-display text-2xl font-bold text-[#111827] group-hover:text-[#078FEA] transition-colors">
            Quality-Focused Work
          </h3>
          <p class="mt-2.5 text-sm leading-relaxed text-[#4B5563]">
            Careful attention to certified branded materials, skilled workmanship, structural tests, and refined finishing at every critical milestone.
          </p>
        </div>
      </div>

      <!-- 03 - Multiple Service Expertise (Col Span 6) -->
      <div class="md:col-span-6 bento-card reveal-up delay-150 group">
        <div class="flex items-center justify-between">
          <span class="icon-pod-2026 icon-pod-royal h-12 w-12">
            <i data-lucide="layers" class="w-6 h-6"></i>
          </span>
          <span class="font-display text-3xl font-extrabold text-gray-300">03</span>
        </div>
        <div class="mt-8">
          <h3 class="font-display text-2xl font-bold text-[#111827] group-hover:text-[#071B85] transition-colors">
            Multiple Service Expertise
          </h3>
          <p class="mt-2.5 text-sm leading-relaxed text-[#4B5563]">
            Turnkey construction, custom interiors, electrical wiring, plumbing pipelines, painting, tiling and WPVC door solutions executed by dedicated trade specialists.
          </p>
        </div>
      </div>

      <!-- 04 - Customer-Focused Planning (Col Span 3) -->
      <div class="md:col-span-3 bento-card reveal-up delay-200 group">
        <div class="flex items-center justify-between">
          <span class="icon-pod-2026 icon-pod-blue h-11 w-11">
            <i data-lucide="clipboard-list" class="w-5 h-5"></i>
          </span>
          <span class="font-display text-2xl font-extrabold text-gray-300">04</span>
        </div>
        <div class="mt-6">
          <h3 class="font-display text-xl font-bold text-[#111827]">
            Customer Planning
          </h3>
          <p class="mt-2 text-xs sm:text-sm leading-relaxed text-[#4B5563]">
            We aim to understand your space, architectural preferences and lifestyle requirements before beginning work.
          </p>
        </div>
      </div>

      <!-- 05 - Practical Solutions (Col Span 3) -->
      <div class="md:col-span-3 bento-card reveal-up delay-250 group">
        <div class="flex items-center justify-between">
          <span class="icon-pod-2026 icon-pod-royal h-11 w-11">
            <i data-lucide="check-check" class="w-5 h-5"></i>
          </span>
          <span class="font-display text-2xl font-extrabold text-gray-300">05</span>
        </div>
        <div class="mt-6">
          <h3 class="font-display text-xl font-bold text-[#111827]">
            Practical Solutions
          </h3>
          <p class="mt-2 text-xs sm:text-sm leading-relaxed text-[#4B5563]">
            Pragmatic, durable engineering solutions designed around your practical space constraints and agreed project scope.
          </p>
        </div>
      </div>

      <!-- 06 - Organized Execution (Col Span 3) -->
      <div class="md:col-span-3 bento-card reveal-up delay-300 group">
        <div class="flex items-center justify-between">
          <span class="icon-pod-2026 icon-pod-blue h-11 w-11">
            <i data-lucide="calendar" class="w-5 h-5"></i>
          </span>
          <span class="font-display text-2xl font-extrabold text-gray-300">06</span>
        </div>
        <div class="mt-6">
          <h3 class="font-display text-xl font-bold text-[#111827]">
            Organized Execution
          </h3>
          <p class="mt-2 text-xs sm:text-sm leading-relaxed text-[#4B5563]">
            A structured, milestone-based approach to procurement, labor scheduling, and carrying out approved tasks on time.
          </p>
        </div>
      </div>

      <!-- 07 - Attention to Detail (Col Span 3) -->
      <div class="md:col-span-3 bento-card reveal-up delay-350 group">
        <div class="flex items-center justify-between">
          <span class="icon-pod-2026 icon-pod-lime h-11 w-11">
            <i data-lucide="sparkles" class="w-5 h-5 text-[#071B85]"></i>
          </span>
          <span class="font-display text-2xl font-extrabold text-gray-300">07</span>
        </div>
        <div class="mt-6">
          <h3 class="font-display text-xl font-bold text-[#111827]">
            Attention to Detail
          </h3>
          <p class="mt-2 text-xs sm:text-sm leading-relaxed text-[#4B5563]">
            Focus on the fine craftsmanship and joint finishes that make a lasting difference in the final living atmosphere.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>
