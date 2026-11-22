<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Final Call To Action Banner (Full-Width Cinematic Architectural Presentation with Scroll Reveal) -->
<section class="relative py-28 sm:py-36 overflow-hidden bg-[#111827] text-white border-t border-white/10">
  
  <!-- Architectural Background Image with Deep Overlay -->
  <div class="absolute inset-0 z-0">
    <img 
      src="assets/images/cta-bg.jpg" 
      alt="Modern Residential Architecture by Big Nest Builders" 
      class="h-full w-full object-cover opacity-45"
    />
    <div class="absolute inset-0 bg-gradient-to-t from-[#071B85]/95 via-[#111827]/85 to-[#111827]/90"></div>
    <div class="blueprint-bg-dark pointer-events-none absolute inset-0 opacity-[0.08] mix-blend-overlay"></div>
  </div>

  <div class="container-x relative z-10 text-center max-w-4xl mx-auto">
    
    <!-- Eyebrow with Lime Accent -->
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 backdrop-blur mb-6 reveal-up">
      <span class="h-2 w-2 rounded-full bg-[#D5E900] animate-pulse"></span>
      <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#D5E900]">
        START YOUR JOURNEY TODAY
      </span>
    </div>

    <!-- Main Headline -->
    <h2 class="font-display text-display-1 leading-[0.95] tracking-[-0.04em] text-white reveal-up delay-75 drop-shadow-lg">
      Every Great Home<br/>
      <em class="font-display italic gradient-text">Begins With a Dream.</em>
    </h2>

    <!-- Subtitle -->
    <p class="mt-6 text-lg sm:text-xl text-white/90 max-w-2xl mx-auto font-medium leading-relaxed reveal-up delay-100">
      Let's turn your ideas into an enduring living space you and your family will cherish for generations to come.
    </p>

    <!-- CTAs -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-4 reveal-up delay-150">
      <a href="#contact" class="btn-pill btn-white text-xs uppercase tracking-wider shadow-2xl">
        <span>START YOUR PROJECT</span>
        <span class="icon-bubble">
          <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
        </span>
      </a>

      <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="btn-pill btn-outline-white text-xs uppercase tracking-wider">
        <i data-lucide="phone-call" class="w-4 h-4 text-[#D5E900]"></i>
        <span>CONTACT OUR TEAM</span>
      </a>

      <a href="<?php echo get_whatsapp_link(); ?>" target="_blank" rel="noopener" class="btn-pill btn-outline-white !border-emerald-500/60 !bg-emerald-500/20 hover:!bg-emerald-500/35 text-xs uppercase tracking-wider">
        <i data-lucide="message-circle" class="w-4 h-4 text-emerald-300"></i>
        <span>WHATSAPP US</span>
      </a>
    </div>

    <!-- Micro Note -->
    <div class="mt-8 text-xs text-white/60 font-mono tracking-widest uppercase reveal-up delay-200">
      Free Initial Site Consultation in Bangalore &bull; Zero Obligation
    </div>

  </div>
</section>
