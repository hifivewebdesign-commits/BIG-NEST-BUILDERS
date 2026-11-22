<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Video Showcase Section (With Scroll Reveal Animations) -->
<section id="videos" class="section-y relative bg-[#111827] text-white overflow-hidden border-b border-white/10">
  <div class="blueprint-bg-dark pointer-events-none absolute inset-0 opacity-[0.05]"></div>

  <div class="container-x relative z-10">
    
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-12 border-b border-white/10">
      <div class="max-w-2xl">
        <div class="eyebrow eyebrow-dark reveal-up">
          <span class="inline-block w-8 h-[2px] bg-[#D5E900]"></span>
          <span>/ OUR VIDEOS</span>
        </div>
        <h2 class="mt-4 font-display text-display-2 leading-[1.02] tracking-[-0.035em] text-white reveal-up delay-75">
          Discover<br/>
          <em class="font-display italic gradient-text">Big Nest Builders.</em>
        </h2>
      </div>

      <div class="max-w-md reveal-up delay-100">
        <p class="text-sm leading-relaxed text-white/70">
          Watch live construction updates, structural milestones, modular interior walkthroughs and craftsmanship insights directly from our active sites in Bangalore.
        </p>
        <div class="mt-4">
          <a href="<?php echo SITE_YOUTUBE_URL; ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#D5E900] hover:text-white transition-colors group">
            <span>Subscribe on YouTube @big_nestbuilders</span>
            <i data-lucide="external-link" class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Video Showcase Composition (One Large Featured + 2 Supporting Cards) -->
    <div class="mt-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
      
      <!-- Large Featured Video Area (Col Span 7) -->
      <div class="lg:col-span-7 rounded-[32px] overflow-hidden border border-white/15 bg-black relative group shadow-2xl flex flex-col justify-end min-h-[380px] sm:min-h-[460px] reveal-scale delay-150">
        <img 
          src="assets/images/video-thumb-1.jpg" 
          alt="Big Nest Builders Featured Video Walkthrough" 
          class="absolute inset-0 h-full w-full object-cover opacity-75 transition-transform duration-700 group-hover:scale-105"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

        <!-- Center Play Button Overlay -->
        <a 
          href="<?php echo SITE_YOUTUBE_URL; ?>" 
          target="_blank" 
          rel="noopener"
          class="absolute inset-0 flex items-center justify-center group/btn"
          aria-label="Play Video on YouTube"
        >
          <div class="relative grid h-20 w-20 place-items-center rounded-full bg-gradient-to-tr from-red-600 to-rose-500 text-white shadow-[0_0_35px_rgba(239,68,68,0.6)] transition-all duration-400 group-hover/btn:scale-115">
            <span class="absolute inset-0 rounded-full bg-red-500/30 animate-ping"></span>
            <i data-lucide="play" class="w-8 h-8 fill-current ml-1 relative z-10"></i>
          </div>
        </a>

        <!-- Metadata Bottom -->
        <div class="relative z-10 p-6 sm:p-8">
          <span class="inline-block rounded-full bg-red-600 px-3.5 py-1 text-[11px] font-mono uppercase tracking-wider text-white backdrop-blur mb-2.5 font-bold shadow-md">
            Featured Tour
          </span>
          <h3 class="font-display text-2xl sm:text-3xl font-bold text-white leading-tight">
            Horamavu Residential Project Site Progress Tour
          </h3>
          <p class="mt-2 text-xs sm:text-sm text-white/80 max-w-lg font-normal">
            Join our structural engineers as they walk through footing reinforcement, RCC beam curing, and brick masonry alignment checks.
          </p>
        </div>
      </div>

      <!-- Supporting Video Cards (Col Span 5) -->
      <div class="lg:col-span-5 flex flex-col gap-6 justify-between">
        
        <?php foreach (array_slice($video_items, 1) as $idx => $v): ?>
          <a 
            href="<?php echo $v['url']; ?>" 
            target="_blank" 
            rel="noopener"
            class="group rounded-3xl border border-white/10 bg-white/[0.04] p-5 flex flex-col sm:flex-row items-center gap-5 hover:border-red-500/50 hover:bg-white/[0.08] transition-all duration-300 flex-1 reveal-up delay-<?php echo ($idx + 2) * 100; ?>"
          >
            <!-- Thumbnail -->
            <div class="relative w-full sm:w-44 h-32 rounded-2xl overflow-hidden shrink-0">
              <img 
                src="<?php echo $v['thumb']; ?>" 
                alt="<?php echo $v['title']; ?>" 
                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-108"
              />
              <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <span class="grid h-10 w-10 place-items-center rounded-full bg-red-600 text-white shadow-lg group-hover:scale-110 transition-transform">
                  <i data-lucide="play" class="w-4 h-4 fill-current ml-0.5"></i>
                </span>
              </div>
            </div>

            <!-- Text Details -->
            <div>
              <span class="text-[11px] font-mono uppercase tracking-wider text-[#D5E900] font-bold">
                <?php echo $v['duration']; ?>
              </span>
              <h4 class="mt-1 font-display text-base sm:text-lg font-bold text-white group-hover:text-[#078FEA] transition-colors leading-snug">
                <?php echo $v['title']; ?>
              </h4>
              <p class="mt-1.5 text-xs text-white/60 line-clamp-2">
                <?php echo $v['desc']; ?>
              </p>
            </div>
          </a>
        <?php endforeach; ?>

        <!-- YouTube Callout Banner -->
        <div class="rounded-3xl border border-red-500/30 bg-red-950/20 p-6 flex items-center justify-between gap-4 reveal-up delay-300 shadow-md">
          <div class="flex items-center gap-4">
            <span class="icon-pod-2026 icon-pod-crimson h-12 w-12 shrink-0">
              <?php echo get_youtube_svg('w-6 h-6'); ?>
            </span>
            <div>
              <h5 class="text-sm font-bold text-white">Subscribe to Our Channel</h5>
              <p class="text-xs text-white/60">Weekly construction updates & client stories</p>
            </div>
          </div>

          <a 
            href="<?php echo SITE_YOUTUBE_URL; ?>" 
            target="_blank" 
            rel="noopener"
            class="btn-pill btn-white text-xs uppercase tracking-wider !h-10 !pl-4 !pr-1.5 shrink-0 shadow"
          >
            <span>Visit Channel</span>
            <span class="icon-bubble !w-7 !h-7">
              <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
            </span>
          </a>
        </div>

      </div>

    </div>

  </div>
</section>
