<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacy Policy | <?php echo SITE_NAME; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gray-50 text-gray-900">
  
  <?php require_once __DIR__ . '/includes/header.php'; ?>

  <main class="pt-32 pb-20">
    <div class="container-x max-w-4xl mx-auto bg-white p-8 sm:p-12 rounded-3xl border border-gray-200 shadow-sm">
      <div class="eyebrow">
        <span class="inline-block w-6 h-[2px] bg-[#078FEA]"></span>
        <span>LEGAL INFORMATION</span>
      </div>

      <h1 class="font-display text-3xl sm:text-4xl font-bold mt-4 text-[#17191F]">Privacy Policy</h1>
      <p class="text-xs text-gray-500 font-mono mt-1">Last Updated: January 2026</p>

      <div class="mt-8 space-y-6 text-sm text-gray-700 leading-relaxed">
        <p>
          At <strong><?php echo SITE_NAME; ?></strong>, we are committed to respecting your privacy and protecting the personal information you share with us. This policy describes how we collect, store, and utilize data when you use our website or submit project enquiries.
        </p>

        <h3 class="font-display text-xl font-bold text-[#17191F] pt-4">1. Information We Collect</h3>
        <p>
          When you fill out our project consultation form, we collect your full name, phone number, email address, property location, service preference, estimated budget, and project notes. This information is gathered solely to provide accurate quotations and technical consultations.
        </p>

        <h3 class="font-display text-xl font-bold text-[#17191F] pt-4">2. How We Use Your Information</h3>
        <p>
          We use the information you provide to:
        </p>
        <ul class="list-disc pl-5 space-y-1">
          <li>Review your construction, renovation, or home improvement specifications.</li>
          <li>Schedule on-site technical property evaluations in Bangalore.</li>
          <li>Deliver transparent quotations, milestone schedules, and progress updates.</li>
          <li>Communicate via direct phone calls or WhatsApp regarding your project inquiry.</li>
        </ul>

        <h3 class="font-display text-xl font-bold text-[#17191F] pt-4">3. Data Security & Non-Disclosure</h3>
        <p>
          We never sell, rent, or distribute your personal contact information to third-party marketing brokers. Your project details are kept strictly confidential between you and the civil engineering team at <?php echo SITE_NAME; ?>.
        </p>

        <h3 class="font-display text-xl font-bold text-[#17191F] pt-4">4. Contact Us</h3>
        <p>
          If you have questions regarding our privacy practices, please contact our administrative desk at:
        </p>
        <p class="font-semibold text-[#071B85]">
          <?php echo SITE_NAME; ?><br/>
          <?php echo SITE_ADDRESS; ?><br/>
          Phone / WhatsApp: <?php echo SITE_PHONE; ?>
        </p>
      </div>

      <div class="mt-10 pt-6 border-t border-gray-200">
        <a href="index.php" class="btn-pill btn-royal text-xs uppercase tracking-wider">
          <span>Back to Homepage</span>
          <span class="icon-bubble"><i data-lucide="arrow-left" class="w-4 h-4"></i></span>
        </a>
      </div>
    </div>
  </main>

  <?php require_once __DIR__ . '/includes/footer.php'; ?>
  <?php require_once __DIR__ . '/includes/whatsapp_floating.php'; ?>

  <script src="assets/js/main.js"></script>
</body>
</html>

