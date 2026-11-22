<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Selected Works / Project Portfolio (Editorial Masonry Grid with Lightbox & Scroll Animations) -->
<section id="projects" class="section-y relative bg-white overflow-hidden border-b border-gray-200">
  <div class="blueprint-bg pointer-events-none absolute inset-0 opacity-[0.04]"></div>

  <div class="container-x relative z-10">
    
    <!-- Section Header -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-12 border-b border-gray-200">
      <div class="max-w-2xl">
        <div class="eyebrow reveal-up">
          <span class="inline-block w-8 h-[2px] bg-[#078FEA]"></span>
          <span>/ SELECTED WORKS</span>
        </div>
        <h2 class="mt-4 font-display text-display-2 leading-[1.02] tracking-[-0.035em] text-[#111827] reveal-up delay-75">
          A Closer Look at<br/>
          <em class="font-display italic gradient-text">What We Build.</em>
        </h2>
      </div>

      <div class="max-w-md reveal-up delay-100">
        <p class="text-sm sm:text-base leading-relaxed text-[#4B5563]">
          Explore residential construction, villa remodels and turnkey home improvement works executed across Bangalore neighborhoods. Click any project to open high-resolution gallery view.
        </p>
      </div>
    </div>

    <!-- Category Filter Pills Bar -->
    <div class="mt-10 flex items-center gap-2.5 overflow-x-auto pb-4 no-scrollbar reveal-up delay-150">
      <?php foreach ($project_categories as $slug => $cat_name): ?>
        <button 
          class="filter-pill whitespace-nowrap <?php echo $slug === 'all' ? 'active' : ''; ?>"
          data-filter="<?php echo $slug; ?>"
        >
          <?php echo $cat_name; ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Projects Grid (Asymmetric Editorial Layout) -->
    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" id="projects-grid">
      <?php foreach ($projects as $index => $proj): 
        $isWide = ($index === 0 || $index === 4);
        $delayClass = 'delay-' . min(500, (($index % 4) + 1) * 100);
      ?>
        <div 
          class="project-grid-item project-card group <?php echo $isWide ? 'lg:col-span-2' : ''; ?> transition-all duration-500 reveal-up <?php echo $delayClass; ?>"
          data-category="<?php echo $proj['category']; ?>"
          data-title="<?php echo htmlspecialchars($proj['title']); ?>"
          data-location="<?php echo htmlspecialchars($proj['location']); ?>"
          data-category-name="<?php echo htmlspecialchars($proj['category_name']); ?>"
          data-image="<?php echo $proj['image']; ?>"
        >
          <!-- Image Container with Hover Zoom & Overlay Trigger -->
          <div class="img-container relative cursor-pointer lightbox-trigger overflow-hidden">
            <img 
              src="<?php echo $proj['image']; ?>" 
              alt="<?php echo $proj['title']; ?>" 
              class="w-full <?php echo $isWide ? 'h-72 sm:h-80' : 'h-64 sm:h-72'; ?> object-cover transition-transform duration-700 group-hover:scale-108"
              loading="lazy"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-[#111827]/85 via-[#111827]/25 to-transparent opacity-60 group-hover:opacity-85 transition-opacity duration-300"></div>
            
            <!-- Quick View Indicator -->
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <span class="inline-flex items-center gap-2 rounded-full bg-white/95 px-4 py-2 text-xs font-bold text-[#111827] shadow-xl backdrop-blur transform translate-y-2 group-hover:translate-y-0 transition-transform">
                <i data-lucide="zoom-in" class="w-4 h-4 text-[#078FEA]"></i>
                <span>Enlarge View</span>
              </span>
            </div>

            <!-- Category Badge Top -->
            <div class="absolute top-4 left-4">
              <span class="rounded-full bg-black/60 px-3 py-1 text-[11px] font-mono uppercase tracking-wider text-white backdrop-blur border border-white/20">
                <?php echo $proj['category_name']; ?>
              </span>
            </div>
          </div>

          <!-- Project Metadata -->
          <div class="p-6">
            <div class="flex items-center gap-1.5 text-xs font-bold text-[#078FEA]">
              <i data-lucide="map-pin" class="w-3.5 h-3.5"></i>
              <span><?php echo $proj['location']; ?></span>
            </div>

            <h3 class="mt-2 font-display text-xl font-bold text-[#111827] group-hover:text-[#078FEA] transition-colors leading-snug">
              <?php echo $proj['title']; ?>
            </h3>

            <p class="mt-2 text-xs sm:text-sm text-[#4B5563]">
              <?php echo $proj['scope']; ?>
            </p>

            <!-- Tags -->
            <div class="mt-4 flex flex-wrap gap-1.5 pt-3 border-t border-gray-100">
              <?php foreach ($proj['tags'] as $tag): ?>
                <span class="text-[11px] font-semibold text-gray-500 bg-gray-100 px-2.5 py-0.5 rounded-full">
                  #<?php echo $tag; ?>
                </span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom Project CTA -->
    <div class="mt-14 rounded-[32px] border border-gray-200 bg-[#F8FAFC] p-8 sm:p-10 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-sm reveal-up delay-200">
      <div>
        <h4 class="font-display text-2xl sm:text-3xl font-bold text-[#111827]">Have a custom architectural project in mind?</h4>
        <p class="mt-1.5 text-sm text-[#4B5563]">We offer comprehensive architectural design and civil execution services.</p>
      </div>

      <a href="#contact" class="btn-pill btn-royal text-xs uppercase tracking-wider shrink-0 shadow-lg">
        <span>Discuss Your Project</span>
        <span class="icon-bubble">
          <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
        </span>
      </a>
    </div>

  </div>
</section>
