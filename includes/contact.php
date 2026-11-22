<?php
if (!defined('APP_INIT')) die('Direct access not permitted');

// Generate CSRF token if not set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
?>
<!-- Contact and Project Enquiry Section (Reference "Ready to build your next project?" with Scroll Animations) -->
<section id="contact" class="section-y relative bg-white overflow-hidden border-b border-gray-200">
  <div class="blueprint-bg pointer-events-none absolute inset-0 opacity-[0.05]"></div>

  <div class="container-x relative z-10">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
      
      <!-- Left Column: Company Information & Map Location -->
      <div class="lg:col-span-5 reveal-left">
        <div class="eyebrow">
          <span class="inline-block w-8 h-[2px] bg-[#078FEA]"></span>
          <span>/ START A PROJECT</span>
        </div>

        <h2 class="mt-4 font-display text-display-2 leading-[1.02] tracking-[-0.035em] text-[#111827]">
          Ready to Build<br/>
          <em class="font-display italic gradient-text">Your Next Dream?</em>
        </h2>

        <p class="mt-6 text-base leading-relaxed text-[#4B5563]">
          Tell us about your residential construction, renovation or home improvement requirements. Get in touch with Big Nest Builders to discuss your project, explore ideas and receive a transparent estimate.
        </p>

        <!-- Company Contact Details Block -->
        <div class="mt-8 space-y-4">
          
          <div class="group flex items-start gap-4 p-5 rounded-2xl border border-gray-200 bg-[#F8FAFC] shadow-sm hover:border-[#071B85] hover:bg-white transition-all duration-300">
            <span class="icon-pod-2026 icon-pod-royal h-12 w-12 shrink-0 mt-0.5">
              <i data-lucide="map-pin" class="w-5 h-5"></i>
            </span>
            <div>
              <h4 class="text-xs font-bold uppercase tracking-wider text-gray-500">Corporate Address</h4>
              <p class="text-sm font-semibold text-[#111827] mt-1 leading-snug">
                <?php echo SITE_NAME; ?><br/>
                <?php echo SITE_ADDRESS; ?>
              </p>
            </div>
          </div>

          <div class="group flex items-center gap-4 p-5 rounded-2xl border border-gray-200 bg-[#F8FAFC] shadow-sm hover:border-[#078FEA] hover:bg-white transition-all duration-300">
            <span class="icon-pod-2026 icon-pod-blue h-12 w-12 shrink-0">
              <i data-lucide="phone-call" class="w-5 h-5"></i>
            </span>
            <div>
              <h4 class="text-xs font-bold uppercase tracking-wider text-gray-500">Direct Phone</h4>
              <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="text-sm font-bold text-[#111827] hover:text-[#078FEA] transition-colors">
                <?php echo SITE_PHONE; ?>
              </a>
            </div>
          </div>

          <div class="group flex items-center gap-4 p-5 rounded-2xl border border-emerald-200 bg-emerald-50/70 shadow-sm hover:border-emerald-500 hover:bg-white transition-all duration-300">
            <span class="icon-pod-2026 icon-pod-emerald h-12 w-12 shrink-0">
              <i data-lucide="message-circle" class="w-5 h-5"></i>
            </span>
            <div>
              <h4 class="text-xs font-bold uppercase tracking-wider text-emerald-800">WhatsApp Instant Connect</h4>
              <a href="<?php echo get_whatsapp_link(); ?>" target="_blank" rel="noopener" class="text-sm font-bold text-emerald-950 hover:underline">
                <?php echo SITE_PHONE; ?> (Direct Chat)
              </a>
            </div>
          </div>

          <div class="group flex items-center gap-4 p-5 rounded-2xl border border-red-200 bg-red-50/70 shadow-sm hover:border-red-500 hover:bg-white transition-all duration-300">
            <span class="icon-pod-2026 icon-pod-crimson h-12 w-12 shrink-0">
              <?php echo get_youtube_svg('w-6 h-6'); ?>
            </span>
            <div>
              <h4 class="text-xs font-bold uppercase tracking-wider text-red-800">Official YouTube Channel</h4>
              <a href="<?php echo SITE_YOUTUBE_URL; ?>" target="_blank" rel="noopener" class="text-sm font-bold text-red-950 hover:underline">
                @big_nestbuilders
              </a>
            </div>
          </div>

        </div>

      </div>

      <!-- Right Column: Interactive Project Enquiry Form -->
      <div class="lg:col-span-7 bg-[#F8FAFC] rounded-[32px] border border-gray-200 p-8 sm:p-12 shadow-xl relative reveal-right delay-100">
        
        <div class="mb-8">
          <span class="text-xs font-mono uppercase tracking-widest text-[#078FEA] font-extrabold">PROJECT CONSULTATION FORM</span>
          <h3 class="font-display text-2xl sm:text-3xl font-bold text-[#111827] mt-1">Submit Your Requirements</h3>
          <p class="text-xs sm:text-sm text-gray-500 mt-1.5">Fill out the details below. Our engineering supervisor will review and respond promptly.</p>
        </div>

        <!-- Success Alert (Hidden by Default) -->
        <div id="form-success-alert" class="hidden mb-6 rounded-2xl border border-emerald-300 bg-emerald-50 p-5 text-emerald-900 shadow-sm">
          <div class="flex items-start gap-3">
            <i data-lucide="check-circle" class="w-6 h-6 text-emerald-600 shrink-0 mt-0.5"></i>
            <div>
              <h5 class="text-sm font-bold">Enquiry Successfully Received!</h5>
              <p class="text-xs sm:text-sm mt-1 success-message leading-relaxed font-medium">
                Thank you! Your project enquiry has been submitted. Our team will contact you shortly.
              </p>
            </div>
          </div>
        </div>

        <!-- Error Alert (Hidden by Default) -->
        <div id="form-error-alert" class="hidden mb-6 rounded-2xl border border-red-300 bg-red-50 p-5 text-red-900 shadow-sm">
          <div class="flex items-start gap-3">
            <i data-lucide="alert-circle" class="w-6 h-6 text-red-600 shrink-0 mt-0.5"></i>
            <div>
              <h5 class="text-sm font-bold">Submission Error</h5>
              <p class="text-xs sm:text-sm mt-1 error-message leading-relaxed font-medium">
                Please check the form fields and try again.
              </p>
            </div>
          </div>
        </div>

        <!-- Form Element -->
        <form id="project-enquiry-form" method="POST" action="api/contact.php" class="space-y-5">
          
          <!-- CSRF Token -->
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>" />
          
          <!-- Honeypot Field (Anti-Spam) -->
          <div class="hidden" aria-hidden="true">
            <input type="text" name="website_check" tabindex="-1" autocomplete="off" />
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <!-- Full Name -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-1.5">
                Full Name <span class="text-red-500">*</span>
              </label>
              <input 
                type="text" 
                name="full_name" 
                required 
                placeholder="e.g. Ramesh Kumar" 
                class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-[#111827] outline-none transition-all focus:border-[#078FEA] focus:ring-2 focus:ring-[#078FEA]/20"
              />
              <span class="field-error-msg text-xs text-red-600 mt-1 block font-medium" data-for="full_name"></span>
            </div>

            <!-- Mobile Number -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-1.5">
                Mobile Number (India) <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <span class="absolute left-3.5 top-3 text-sm font-bold text-gray-500">+91</span>
                <input 
                  type="tel" 
                  name="phone" 
                  required 
                  placeholder="96203 64786" 
                  pattern="[0-9]{10}"
                  class="w-full rounded-xl border border-gray-300 bg-white pl-12 pr-4 py-3 text-sm text-[#111827] outline-none transition-all focus:border-[#078FEA] focus:ring-2 focus:ring-[#078FEA]/20 font-medium"
                />
              </div>
              <span class="field-error-msg text-xs text-red-600 mt-1 block font-medium" data-for="phone"></span>
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <!-- Email Address -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-1.5">
                Email Address <span class="text-red-500">*</span>
              </label>
              <input 
                type="email" 
                name="email" 
                required 
                placeholder="name@example.com" 
                class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-[#111827] outline-none transition-all focus:border-[#078FEA] focus:ring-2 focus:ring-[#078FEA]/20"
              />
              <span class="field-error-msg text-xs text-red-600 mt-1 block font-medium" data-for="email"></span>
            </div>

            <!-- Select Service -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-1.5">
                Select Your Service <span class="text-red-500">*</span>
              </label>
              <select 
                name="service" 
                required 
                class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-[#111827] outline-none transition-all focus:border-[#078FEA] focus:ring-2 focus:ring-[#078FEA]/20 font-medium"
              >
                <option value="">-- Choose Required Service --</option>
                <option value="Construction">Residential Construction</option>
                <option value="Home Renovation">Home Renovation</option>
                <option value="Interior Work">Interior Work & Woodwork</option>
                <option value="Electrical Services">Electrical Services</option>
                <option value="Plumbing Services">Plumbing Services</option>
                <option value="Carpentry">Carpentry & Cabinetry</option>
                <option value="Painting">Painting & Coatings</option>
                <option value="Tiles Fixing">Tiles Fixing & Flooring</option>
                <option value="WPVC Doors">WPVC Doors & Frames</option>
                <option value="Complete Home Maintenance">Complete Home Maintenance</option>
                <option value="Other">Other Civil Work</option>
              </select>
              <span class="field-error-msg text-xs text-red-600 mt-1 block font-medium" data-for="service"></span>
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <!-- Property Location -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-1.5">
                Property Location in Bangalore <span class="text-red-500">*</span>
              </label>
              <input 
                type="text" 
                name="location" 
                required 
                placeholder="e.g. Horamavu, Hennur, Indiranagar" 
                class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-[#111827] outline-none transition-all focus:border-[#078FEA] focus:ring-2 focus:ring-[#078FEA]/20"
              />
              <span class="field-error-msg text-xs text-red-600 mt-1 block font-medium" data-for="location"></span>
            </div>

            <!-- Estimated Budget -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-1.5">
                Estimated Budget <span class="text-red-500">*</span>
              </label>
              <select 
                name="budget" 
                required 
                class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-[#111827] outline-none transition-all focus:border-[#078FEA] focus:ring-2 focus:ring-[#078FEA]/20 font-medium"
              >
                <option value="">-- Select Budget Range --</option>
                <option value="Below ₹50,000">Below ₹50,000</option>
                <option value="₹50,000 – ₹1,00,000">₹50,000 – ₹1,00,000</option>
                <option value="₹1,00,000 – ₹3,00,000">₹1,00,000 – ₹3,00,000</option>
                <option value="₹3,00,000 – ₹5,00,000">₹3,00,000 – ₹5,00,000</option>
                <option value="Above ₹5,00,000">Above ₹5,00,000</option>
                <option value="Not Decided">Not Decided</option>
              </select>
              <span class="field-error-msg text-xs text-red-600 mt-1 block font-medium" data-for="budget"></span>
            </div>
          </div>

          <!-- Project Description -->
          <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-1.5">
              Project Description & Requirements <span class="text-red-500">*</span>
            </label>
            <textarea 
              name="description" 
              rows="4" 
              required 
              placeholder="Tell us about your property type, approximate dimensions, timeline, and key requirements..." 
              class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-[#111827] outline-none transition-all focus:border-[#078FEA] focus:ring-2 focus:ring-[#078FEA]/20"
            ></textarea>
            <span class="field-error-msg text-xs text-red-600 mt-1 block font-medium" data-for="description"></span>
          </div>

          <!-- Submit Button -->
          <div class="pt-2">
            <button 
              type="submit" 
              id="submit-enquiry-btn" 
              class="btn-pill btn-royal !w-full justify-center !h-14 text-xs uppercase tracking-wider shadow-xl"
            >
              <span id="submit-btn-text">SUBMIT PROJECT ENQUIRY</span>
              <span id="submit-btn-spinner" class="hidden animate-spin">
                <i data-lucide="loader-2" class="w-5 h-5"></i>
              </span>
              <span class="icon-bubble !w-9 !h-9">
                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
              </span>
            </button>
            <p class="text-center text-[11px] text-gray-500 mt-3 font-medium">
              We respect your privacy. Zero spam. Your inquiry goes directly to our engineering supervisors.
            </p>
          </div>

        </form>

      </div>

    </div>

  </div>
</section>
