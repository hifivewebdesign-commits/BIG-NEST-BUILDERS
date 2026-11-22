<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Service Pricing / Estimates Section (With Scroll Reveal Animations) -->
<section id="pricing" class="section-y relative bg-[#F8FAFC] overflow-hidden border-b border-gray-200">
  <div class="blueprint-bg pointer-events-none absolute inset-0 opacity-[0.05]"></div>

  <div class="container-x relative z-10">
    
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-12 border-b border-gray-200">
      <div class="max-w-2xl">
        <div class="eyebrow reveal-up">
          <span class="inline-block w-8 h-[2px] bg-[#078FEA]"></span>
          <span>/ SERVICE ESTIMATES</span>
        </div>
        <h2 class="mt-4 font-display text-display-2 leading-[1.02] tracking-[-0.035em] text-[#111827] reveal-up delay-75">
          Transparent Service Information.<br/>
          <em class="font-display italic gradient-text">Practical Solutions.</em>
        </h2>
      </div>

      <div class="max-w-sm reveal-up delay-100">
        <p class="text-sm leading-relaxed text-[#4B5563]">
          Clear benchmark starting rates for project budgeting. Final scope, material grades and exact pricing units are finalized following our on-site technical inspection.
        </p>
      </div>
    </div>

    <!-- Pricing Disclaimer Note (Strictly adhering to Prompt Rules) -->
    <div class="mt-8 rounded-2xl border border-amber-200/90 bg-amber-50/80 p-4 sm:p-5 flex items-start gap-3.5 shadow-sm reveal-up delay-150">
      <span class="grid h-6 w-6 place-items-center rounded-full bg-amber-500/20 text-amber-800 shrink-0 mt-0.5">
        <i data-lucide="info" class="w-4 h-4"></i>
      </span>
      <p class="text-xs sm:text-sm text-amber-950 leading-relaxed font-medium">
        <strong>Important Notice:</strong> Published rates represent base reference estimates. Exact pricing units (per square foot, per point, per unit, or turnkey scope) depend on individual property parameters, material selections, and site accessibility. Schedule a site visit for an accurate project estimate.
      </p>
    </div>

    <!-- Pricing Cards Grid -->
    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($pricing_plans as $i => $plan): 
        $delayClass = 'delay-' . min(500, (($i % 3) + 1) * 100);
      ?>
        <div class="rounded-[28px] border border-gray-200 bg-white p-7 sm:p-8 flex flex-col justify-between shadow-sm hover:border-[#078FEA] hover:shadow-xl transition-all duration-400 relative group reveal-up <?php echo $delayClass; ?>">
          
          <?php if ($plan['popular']): ?>
            <div class="absolute -top-3.5 right-6">
              <span class="rounded-full bg-[#071B85] px-3.5 py-1 text-[11px] font-extrabold uppercase tracking-wider text-[#D5E900] shadow-md border border-[#D5E900]/30">
                Most Requested
              </span>
            </div>
          <?php endif; ?>

          <div>
            <div class="flex items-center justify-between pb-4 border-b border-gray-100">
              <h3 class="font-display text-2xl font-bold text-[#111827]">
                <?php echo $plan['service']; ?>
              </h3>
              <span class="icon-pod-2026 icon-pod-blue h-9 w-9">
                <i data-lucide="check" class="w-4 h-4"></i>
              </span>
            </div>

            <div class="mt-6">
              <div class="text-[11px] uppercase tracking-wider font-extrabold text-[#078FEA]">Benchmark Estimate</div>
              <div class="mt-1.5 flex items-baseline gap-2">
                <span class="font-display text-3xl sm:text-4xl font-extrabold text-[#071B85]">
                  <?php echo $plan['estimate']; ?>
                </span>
              </div>
              <span class="inline-block mt-2 text-[12px] font-semibold text-gray-600 bg-gray-100 px-3 py-1 rounded-full border border-gray-200">
                <?php echo $plan['unit']; ?>
              </span>
            </div>

            <p class="mt-5 text-xs sm:text-sm leading-relaxed text-[#4B5563]">
              <?php echo $plan['desc']; ?>
            </p>
          </div>

          <!-- Actions -->
          <div class="mt-8 pt-5 border-t border-gray-100 flex flex-col gap-2.5">
            <a 
              href="#contact" 
              class="btn-pill btn-royal justify-center !w-full !h-12 text-xs uppercase tracking-wider service-enquire-trigger shadow-md"
              data-service-name="<?php echo htmlspecialchars($plan['service']); ?>"
            >
              <span>REQUEST A QUOTE</span>
              <span class="icon-bubble !w-8 !h-8">
                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
              </span>
            </a>

            <a 
              href="<?php echo get_whatsapp_link($plan['service']); ?>" 
              target="_blank" 
              rel="noopener"
              class="flex items-center justify-center gap-2 py-2 text-xs font-bold text-emerald-700 hover:text-emerald-800 transition-colors"
            >
              <i data-lucide="message-circle" class="w-4 h-4 text-emerald-600"></i>
              <span>Discuss Pricing on WhatsApp</span>
            </a>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
