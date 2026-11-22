<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Customer Experiences / Testimonials Carousel (Reference "What our clients actually say." with Scroll Animations) -->
<section id="testimonials" class="section-y relative bg-white overflow-hidden border-b border-gray-200">
  <div class="blueprint-bg pointer-events-none absolute inset-0 opacity-[0.04]"></div>

  <div class="container-x relative z-10">
    
    <!-- Section Header with Slider Navigation Controls -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 pb-12 border-b border-gray-200">
      <div class="max-w-2xl">
        <div class="eyebrow reveal-up">
          <span class="inline-block w-8 h-[2px] bg-[#078FEA]"></span>
          <span>/ CUSTOMER EXPERIENCES</span>
        </div>
        <h2 class="mt-4 font-display text-display-2 leading-[1.02] tracking-[-0.035em] text-[#111827] reveal-up delay-75">
          What Our Customers<br/>
          <em class="font-display italic gradient-text">Actually Say.</em>
        </h2>
      </div>

      <!-- Carousel Navigation Buttons (Matching reference circles) -->
      <div class="flex items-center gap-3 reveal-up delay-100">
        <button 
          id="prev-testimonial-btn" 
          aria-label="Previous review" 
          class="icon-pod-2026 icon-pod-blue h-12 w-12 text-[#111827] shadow-sm hover:!bg-[#111827] hover:!text-white hover:!border-[#111827]"
        >
          <i data-lucide="arrow-left" class="w-5 h-5"></i>
        </button>

        <button 
          id="next-testimonial-btn" 
          aria-label="Next review" 
          class="icon-pod-2026 icon-pod-royal h-12 w-12 !bg-[#071B85] text-white shadow-md hover:!bg-[#078FEA] hover:!border-[#078FEA]"
        >
          <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </button>
      </div>
    </div>

    <!-- Testimonials Slider Viewport -->
    <div class="mt-12 relative min-h-[300px]">
      <?php foreach ($testimonials as $index => $t): ?>
        <div class="testimonial-slide <?php echo $index === 0 ? 'block' : 'hidden'; ?> transition-all duration-500 reveal-scale delay-150">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center rounded-[32px] border border-gray-200 bg-[#F8FAFC] p-8 sm:p-12 lg:p-16 shadow-xl">
            
            <!-- Left: Quote Text & Ratings -->
            <div class="lg:col-span-8">
              
              <!-- Stars Rating -->
              <div class="flex items-center gap-1.5 text-amber-400 mb-6">
                <?php for ($i = 0; $i < $t['rating']; $i++): ?>
                  <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                <?php endfor; ?>
                <span class="ml-2.5 text-xs font-bold text-gray-600 uppercase tracking-wider">5.0 Verified Homeowner</span>
              </div>

              <!-- Quote Content -->
              <blockquote class="font-display text-2xl sm:text-3xl lg:text-4xl leading-[1.3] text-[#111827] font-semibold tracking-tight">
                &ldquo;<?php echo $t['quote']; ?>&rdquo;
              </blockquote>

              <!-- Client Details -->
              <div class="mt-8 flex items-center gap-4">
                <div class="grid h-14 w-14 place-items-center rounded-2xl bg-[#071B85] text-white font-display text-xl font-extrabold shadow-md">
                  <?php echo substr($t['author'], 0, 1); ?>
                </div>
                <div>
                  <h4 class="font-display text-lg font-bold text-[#111827]"><?php echo $t['author']; ?></h4>
                  <p class="text-xs text-[#078FEA] font-bold"><?php echo $t['location']; ?> &bull; <span class="text-gray-500 font-medium"><?php echo $t['project']; ?></span></p>
                </div>
              </div>

            </div>

            <!-- Right: Trust Badge & Project Scope Summary -->
            <div class="lg:col-span-4 border-t lg:border-t-0 lg:border-l border-gray-200 pt-6 lg:pt-0 lg:pl-10">
              <div class="rounded-2xl bg-white p-6 border border-gray-200 shadow-sm">
                <div class="flex items-center gap-2 text-emerald-600 text-xs font-extrabold uppercase tracking-wider">
                  <i data-lucide="check-circle" class="w-4 h-4"></i>
                  <span>Completed Project</span>
                </div>
                <div class="mt-3 font-display text-lg font-bold text-[#111827]">
                  <?php echo $t['project']; ?>
                </div>
                <p class="mt-1.5 text-xs text-gray-500 font-medium leading-relaxed">
                  Site executed with quality inspections, certified branded materials, and zero delay.
                </p>
                <div class="mt-4 pt-3 border-t border-gray-100 flex items-center justify-between text-[11px] text-gray-400 font-mono font-bold">
                  <span>BANGALORE</span>
                  <span>VERIFIED RECORD</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
