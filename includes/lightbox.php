<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Project Portfolio High-Res Lightbox Modal -->
<div id="project-lightbox" class="lightbox-modal" role="dialog" aria-modal="true" aria-label="Project Preview">
  
  <!-- Close Button -->
  <button id="close-lightbox-btn" class="absolute top-6 right-6 z-50 grid h-12 w-12 place-items-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors" aria-label="Close dialog">
    <i data-lucide="x" class="w-6 h-6"></i>
  </button>

  <!-- Previous Button -->
  <button id="prev-lightbox-btn" class="absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 z-50 grid h-12 w-12 place-items-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors" aria-label="Previous project">
    <i data-lucide="arrow-left" class="w-6 h-6"></i>
  </button>

  <!-- Next Button -->
  <button id="next-lightbox-btn" class="absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 z-50 grid h-12 w-12 place-items-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors" aria-label="Next project">
    <i data-lucide="arrow-right" class="w-6 h-6"></i>
  </button>

  <!-- Modal Main Box -->
  <div class="relative max-w-5xl w-full bg-[#17191F] rounded-3xl overflow-hidden border border-white/15 shadow-2xl flex flex-col md:flex-row">
    
    <!-- Image Box -->
    <div class="md:w-2/3 bg-black flex items-center justify-center min-h-[320px] sm:min-h-[460px] relative">
      <img id="lightbox-img" src="" alt="Project Photo" class="max-h-[70vh] w-full object-contain" />
    </div>

    <!-- Metadata Panel -->
    <div class="md:w-1/3 p-6 sm:p-8 flex flex-col justify-between border-t md:border-t-0 md:border-l border-white/10">
      <div>
        <div class="flex items-center justify-between pb-3 border-b border-white/10">
          <span id="lightbox-category" class="text-xs font-mono font-bold uppercase tracking-widest text-[#D5E900]">Category</span>
          <span class="text-xs text-white/50 font-mono">BIG NEST</span>
        </div>

        <h3 id="lightbox-title" class="mt-4 font-display text-2xl font-bold text-white leading-snug">
          Project Title
        </h3>

        <div class="mt-2 flex items-center gap-2 text-xs text-[#078FEA] font-semibold">
          <i data-lucide="map-pin" class="w-3.5 h-3.5"></i>
          <span id="lightbox-location">Bangalore</span>
        </div>

        <p class="mt-4 text-xs sm:text-sm text-white/70 leading-relaxed">
          Executed with precision structural planning, verified certified materials, and dedicated on-site engineering supervision.
        </p>
      </div>

      <div class="mt-8 pt-4 border-t border-white/10 space-y-3">
        <a href="#contact" onclick="document.getElementById('project-lightbox').classList.remove('active'); document.body.style.overflow='';" class="btn-pill btn-white !w-full justify-center !h-11 text-xs uppercase tracking-wider">
          <span>Inquire About Similar Build</span>
          <span class="icon-bubble !w-7 !h-7"><i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i></span>
        </a>

        <a href="<?php echo get_whatsapp_link('Portfolio Project Discussion'); ?>" target="_blank" rel="noopener" class="flex items-center justify-center gap-2 text-xs font-semibold text-emerald-400 hover:text-emerald-300 py-1">
          <i data-lucide="message-circle" class="w-4 h-4"></i>
          <span>Discuss On WhatsApp</span>
        </a>
      </div>

    </div>

  </div>

</div>

