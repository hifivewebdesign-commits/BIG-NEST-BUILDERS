<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terms & Conditions | <?php echo SITE_NAME; ?></title>
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

      <h1 class="font-display text-3xl sm:text-4xl font-bold mt-4 text-[#17191F]">Terms & Conditions</h1>
      <p class="text-xs text-gray-500 font-mono mt-1">Effective Date: January 2026</p>

      <div class="mt-8 space-y-6 text-sm text-gray-700 leading-relaxed">
        <p>
          Welcome to the official website of <strong><?php echo SITE_NAME; ?></strong>. By accessing or using this website, you agree to comply with and be bound by the following terms and conditions.
        </p>

        <h3 class="font-display text-xl font-bold text-[#17191F] pt-4">1. Scope of Estimates</h3>
        <p>
          Any prices, pricing tables, or benchmark rates displayed on this website are illustrative reference estimates intended for preliminary budgeting purposes only. Official binding quotations are provided exclusively following an on-site property evaluation, structural assessment, and written sign-off of materials and drawings.
        </p>

        <h3 class="font-display text-xl font-bold text-[#17191F] pt-4">2. Architectural & Engineering Contracts</h3>
        <p>
          All civil construction, renovation, interior woodwork, and maintenance projects undertaken by <?php echo SITE_NAME; ?> are governed by formal written project agreements detailing milestone payment schedules, stage sign-offs, warranty terms, and handover checklists.
        </p>

        <h3 class="font-display text-xl font-bold text-[#17191F] pt-4">3. Intellectual Property</h3>
        <p>
          The <?php echo SITE_NAME; ?> brand name, official eagle logo, website design, visual compositions, project documentation, and text are protected by applicable intellectual property and copyright laws. Unauthorized reproduction or scraping is prohibited.
        </p>

        <h3 class="font-display text-xl font-bold text-[#17191F] pt-4">4. Jurisdiction</h3>
        <p>
          These terms are governed by and construed in accordance with the laws of the State of Karnataka, India. Any disputes arising out of service agreements shall be subject to the exclusive jurisdiction of the competent courts in Bangalore.
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

