<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Six-Step Working Process (Reference "Six steps. Zero surprises." with Scroll Animations) -->
<section id="process" class="section-y relative bg-[#F8FAFC] overflow-hidden border-b border-gray-200">
  <div class="blueprint-bg pointer-events-none absolute inset-0 opacity-[0.05]"></div>

  <div class="container-x relative z-10">
    
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-12 border-b border-gray-200">
      <div class="max-w-2xl">
        <div class="eyebrow reveal-up">
          <span class="inline-block w-8 h-[2px] bg-[#078FEA]"></span>
          <span>/ HOW WE WORK</span>
        </div>
        <h2 class="mt-4 font-display text-display-2 leading-[1.02] tracking-[-0.035em] text-[#111827] reveal-up delay-75">
          Six Steps.<br/>
          <em class="font-display italic gradient-text">A Clearer Journey.</em>
        </h2>
      </div>

      <div class="max-w-sm reveal-up delay-100">
        <p class="text-sm leading-relaxed text-[#4B5563]">
          From initial consultation to final key handover, our transparent milestones ensure structured delivery with zero surprises.
        </p>
      </div>
    </div>

    <!-- Process Timeline -->
    <div class="relative mt-16 lg:mt-24">
      
      <!-- Horizontal Connecting Line (Desktop) with Gradient -->
      <div aria-hidden="true" class="absolute left-0 right-0 top-[44px] hidden h-[2px] bg-gray-200 lg:block z-0"></div>
      <div aria-hidden="true" class="absolute left-0 right-0 top-[44px] hidden h-[3px] bg-gradient-to-r from-[#078FEA] via-[#071B85] to-[#D5E900] lg:block z-0 opacity-70"></div>

      <!-- Steps Grid -->
      <ol class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8 lg:gap-4 relative z-10">
        <?php foreach ($process_steps as $i => $step): 
          $delayClass = 'delay-' . min(600, ($i + 1) * 100);
        ?>
          <li class="process-step-item group flex flex-col items-start lg:items-center text-left lg:text-center reveal-up <?php echo $delayClass; ?>">
            
            <!-- 2026 Process Milestone Dial with Icon & Step Badge -->
            <div class="relative group/dial">
              <div class="icon-pod-2026 icon-pod-blue h-20 w-20 shadow-lg border-2 border-white group-hover/dial:scale-110 group-hover/dial:border-[#078FEA] transition-all duration-300">
                <i data-lucide="<?php echo $step['icon']; ?>" class="w-8 h-8 text-[#071B85] group-hover/dial:text-[#078FEA] transition-colors"></i>
              </div>
              <span class="absolute -top-2 -right-2 grid h-7 w-7 place-items-center rounded-full bg-[#071B85] text-[#D5E900] text-xs font-mono font-bold shadow-md border-2 border-white">
                <?php echo $step['num']; ?>
              </span>
            </div>

            <!-- Title & Description -->
            <h3 class="mt-6 font-display text-xl font-bold text-[#111827] group-hover:text-[#078FEA] transition-colors">
              <?php echo $step['title']; ?>
            </h3>

            <p class="mt-2 text-xs sm:text-sm leading-relaxed text-[#4B5563]">
              <?php echo $step['desc']; ?>
            </p>

          </li>
        <?php endforeach; ?>
      </ol>

    </div>

    <!-- Process Assurance Note -->
    <div class="mt-16 text-center reveal-up delay-300">
      <div class="inline-flex items-center gap-3 rounded-full bg-white border border-gray-200 px-6 py-3 shadow-md text-xs sm:text-sm text-[#111827] font-semibold">
        <span class="h-2.5 w-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
        <span>Every stage is certified with stage-signoff inspection reports and high-resolution photo logs.</span>
      </div>
    </div>

  </div>
</section>
