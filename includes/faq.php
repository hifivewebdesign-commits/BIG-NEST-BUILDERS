<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Frequently Asked Questions (Reference "Questions, answered." with Scroll Animations) -->
<section id="faq" class="section-y relative bg-[#F8FAFC] overflow-hidden border-b border-gray-200">
  <div class="blueprint-bg pointer-events-none absolute inset-0 opacity-[0.05]"></div>

  <div class="container-x relative z-10">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
      
      <!-- Left Column: Sticky Header & Quick Contact -->
      <div class="lg:col-span-4 lg:sticky lg:top-32 reveal-left">
        <div class="eyebrow">
          <span class="inline-block w-8 h-[2px] bg-[#078FEA]"></span>
          <span>/ FREQUENTLY ASKED QUESTIONS</span>
        </div>

        <h2 class="mt-4 font-display text-display-2 leading-[1.02] tracking-[-0.035em] text-[#111827]">
          Questions,<br/>
          <em class="font-display italic gradient-text">Answered.</em>
        </h2>

        <p class="mt-6 text-sm leading-relaxed text-[#4B5563]">
          Don't see what you need? Get in touch directly — a senior engineer responds within one business day to discuss your specific site requirements.
        </p>

        <div class="mt-8 flex flex-col gap-3.5">
          <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="inline-flex items-center gap-3.5 rounded-2xl bg-white border border-gray-200 p-4 shadow-sm hover:border-[#078FEA] hover:shadow-md transition-all duration-300 group">
            <span class="icon-pod-2026 icon-pod-blue h-11 w-11">
              <i data-lucide="phone-call" class="w-5 h-5"></i>
            </span>
            <div>
              <div class="text-[11px] font-bold uppercase tracking-wider text-gray-500">Direct Engineering Line</div>
              <div class="text-sm font-bold text-[#111827]"><?php echo SITE_PHONE; ?></div>
            </div>
          </a>

          <a href="<?php echo get_whatsapp_link('FAQ Query'); ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-3.5 rounded-2xl bg-white border border-gray-200 p-4 shadow-sm hover:border-emerald-500 hover:shadow-md transition-all duration-300 group">
            <span class="icon-pod-2026 icon-pod-emerald h-11 w-11">
              <i data-lucide="message-circle" class="w-5 h-5"></i>
            </span>
            <div>
              <div class="text-[11px] font-bold uppercase tracking-wider text-emerald-800">WhatsApp Query</div>
              <div class="text-sm font-bold text-emerald-700">Message Our Team Directly</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Right Column: Accordion Items (All 10 Questions) -->
      <div class="lg:col-span-8 bg-white rounded-[32px] border border-gray-200 p-6 sm:p-10 shadow-lg reveal-right delay-100">
        <div class="divide-y divide-gray-200">
          <?php foreach ($faqs as $index => $item): 
            $isOpen = ($index === 0);
          ?>
            <div class="faq-item">
              <button 
                class="faq-button"
                aria-expanded="<?php echo $isOpen ? 'true' : 'false'; ?>"
                aria-controls="faq-ans-<?php echo $index; ?>"
              >
                <span class="faq-title font-display text-lg sm:text-xl font-bold text-[#111827] pr-4 leading-snug">
                  <span class="text-xs font-mono font-bold text-[#078FEA] mr-2.5"><?php echo sprintf('%02d', $index + 1); ?>.</span>
                  <?php echo $item['q']; ?>
                </span>

                <span class="faq-icon-circle shadow-sm">
                  <i data-lucide="plus" class="w-4 h-4"></i>
                </span>
              </button>

              <div 
                id="faq-ans-<?php echo $index; ?>" 
                class="faq-answer <?php echo $isOpen ? 'open' : ''; ?>"
              >
                <p class="text-sm sm:text-base leading-relaxed text-[#4B5563] pb-2">
                  <?php echo $item['a']; ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

  </div>
</section>
