<?php
if (!defined('APP_INIT')) die('Direct access not permitted');

// Automatically detect all available animation images in assets/header scroll/
// and sort in natural numerical order
$hero_scroll_dir = __DIR__ . '/../assets/header scroll';
$hero_frames = [];

if (is_dir($hero_scroll_dir)) {
    $files = scandir($hero_scroll_dir);
    natsort($files); // Natural numerical sort (e.g. image-10, image-11 ... image-136)
    foreach ($files as $file) {
        if (preg_match('/\.(jpg|jpeg|png|webp|avif)$/i', $file)) {
            $hero_frames[] = 'assets/header%20scroll/' . rawurlencode($file);
        }
    }
}
?>

<!-- Minimal Premium Loading Screen for Image Sequence -->
<div id="bnb-hero-loader" class="bnb-hero-loader">
  <div class="flex flex-col items-center gap-4 text-center px-4">
    <img 
      src="assets/images/logo-web.png" 
      alt="<?php echo SITE_NAME; ?>" 
      class="h-14 sm:h-16 w-auto object-contain drop-shadow"
    />
    <div class="text-xs uppercase tracking-[0.25em] font-semibold text-gray-500 mt-2">
      Loading Architectural Experience... <span id="bnb-loader-percent" class="font-mono text-[#078FEA] font-bold">0%</span>
    </div>
    <div class="bnb-loader-progress-track">
      <div id="bnb-loader-progress-fill" class="bnb-loader-progress-fill"></div>
    </div>
  </div>
</div>

<!-- 400vh Scroll Track for Cinematic Image Sequence (Reference: https://kpconstructions.group/) -->
<section id="hero" class="bnb-hero-scroll-container relative w-full">
  <div id="hero-scroll-track" class="relative w-full h-full">

    <!-- Sticky 100vh Hero Stage -->
    <div id="hero-sticky-stage" class="bnb-hero-sticky">
      
      <!-- HTML5 Canvas for Full-Screen Image Sequence Rendering (Cover Mode) -->
      <canvas id="bnb-hero-canvas" class="bnb-hero-canvas"></canvas>

      <!-- Gradient Overlays for Cinematic Atmosphere & Text Legibility -->
      <div class="bnb-hero-overlay-dark"></div>
      <div class="bnb-hero-overlay-radial"></div>

      <!-- Hero Content Layer (Typography & CTAs over Canvas) -->
      <div class="bnb-hero-content">
        <div class="container-x w-full">
          
          <div id="bnb-hero-text-content" class="bnb-hero-text-block">
            
            <!-- Top Label / Eyebrow Pill -->
            <div class="hero-anim-eyebrow inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3.5 sm:px-4 py-1.5 backdrop-blur mb-4 sm:mb-6 max-w-full">
              <span class="h-2 w-2 rounded-full bg-[#D5E900] animate-pulse shrink-0"></span>
              <span class="text-[10px] sm:text-xs font-semibold uppercase tracking-[0.12em] sm:tracking-[0.2em] text-white/90 truncate">
                <span class="sm:hidden">BIG NEST BUILDERS &bull; ARCHITECTURE & BUILD</span>
                <span class="hidden sm:inline">BIG NEST BUILDERS &bull; CONSTRUCTION | RENOVATION | ARCHITECTURE</span>
              </span>
            </div>

            <!-- Main Heading (Split-Line Cinematic Entrance Animation) -->
            <h1 class="font-display text-display-1 leading-[0.96] sm:leading-[0.92] tracking-[-0.035em] sm:tracking-[-0.04em] text-white max-w-4xl drop-shadow-md">
              <span class="hero-line-mask block overflow-hidden pb-1">
                <span class="hero-anim-title-1 block">Building Dreams.</span>
              </span>
              <span class="hero-line-mask block overflow-hidden pb-2 mt-1 sm:mt-2">
                <span class="hero-anim-title-2 block">
                  <em class="font-display italic gradient-text">Creating Landmarks.</em>
                </span>
              </span>
            </h1>

            <!-- Supporting Description -->
            <p class="hero-anim-desc mt-4 sm:mt-6 max-w-2xl text-sm sm:text-base lg:text-lg leading-[1.6] sm:leading-[1.65] text-white/85 font-normal">
              From thoughtfully designed homes to exceptional commercial spaces, Big Nest Builders transforms architectural visions into lasting landmarks through quality construction, innovation and trust.
            </p>

            <!-- Final Frame Completion Emphasis (Revealed at Frame 127) -->
            <div class="bnb-hero-final-sub mt-4 text-xs font-mono uppercase tracking-widest text-[#D5E900] opacity-0 translate-y-2 transition-all duration-500">
              <i data-lucide="check-circle" class="w-3.5 h-3.5 inline mr-1 text-[#D5E900]"></i>
              Completed Architectural Landmark &bull; Bangalore
            </div>

            <!-- CTA Buttons Cluster (Touch Friendly, Responsive Stack on Mobile) -->
            <div class="hero-anim-cta mt-6 sm:mt-9 flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-3 sm:gap-4 bnb-hero-interactive w-full sm:w-auto">
              <!-- Primary CTA -->
              <a href="#projects" class="btn-pill btn-white text-xs uppercase tracking-wider shadow-xl min-h-[46px] justify-center sm:justify-start">
                <span>Explore Our Projects</span>
                <span class="icon-bubble">
                  <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                </span>
              </a>

              <!-- Secondary CTA -->
              <a href="#contact" class="btn-pill btn-outline-white text-xs uppercase tracking-wider min-h-[46px] justify-center sm:justify-start">
                <span>Contact Us</span>
                <span class="icon-bubble !bg-white/10 !w-8 !h-8">
                  <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </span>
              </a>

              <!-- Direct Phone Shortcut -->
              <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="btn-pill btn-outline-white !border-[#078FEA]/40 !bg-[#078FEA]/15 hover:!bg-[#078FEA]/30 text-xs min-h-[46px] justify-center sm:justify-start">
                <i data-lucide="phone-call" class="w-4 h-4 text-[#078FEA]"></i>
                <span>Direct Line: <?php echo SITE_PHONE; ?></span>
              </a>
            </div>

          </div>

        </div>
      </div>

      <!-- Scroll Indicator (Fades out when user starts scrolling) -->
      <a href="#about" id="bnb-hero-scroll-indicator" class="bnb-hero-scroll-indicator" aria-label="Scroll down to explore">
        <div class="bnb-scroll-pill">
          <span>SCROLL TO EXPLORE</span>
          <i data-lucide="arrow-down" class="w-3.5 h-3.5 bnb-scroll-arrow text-[#D5E900]"></i>
        </div>
      </a>

    </div>

  </div>
</section>

<!-- Inject detected 127 frames as JSON array for JavaScript Engine -->
<script>
  window.BNB_HERO_FRAMES = <?php echo json_encode(array_values($hero_frames), JSON_UNESCAPED_SLASHES); ?>;
</script>
