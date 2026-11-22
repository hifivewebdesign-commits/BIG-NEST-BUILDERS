<?php
session_start();
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Big Nest Builders | Construction & Home Renovation in Bangalore</title>
  
  <meta name="description" content="Big Nest Builders offers construction, home renovation, interior work, electrical, plumbing, carpentry, painting, tiles fixing and home maintenance services in Horamavu, Bangalore.">
  <meta name="keywords" content="Construction company in Horamavu, Home construction in Bangalore, Home renovation in Bangalore, Interior work in Bangalore, Electrical services in Horamavu, Plumbing services in Bangalore, Painting services in Bangalore, Carpentry services in Bangalore, Tiles fixing in Bangalore, WPVC doors in Bangalore">
  <meta name="author" content="Big Nest Builders">
  <meta name="robots" content="index, follow">

  <!-- Open Graph / Facebook / WhatsApp -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo SITE_URL; ?>/">
  <meta property="og:title" content="Big Nest Builders | Construction & Home Renovation in Bangalore">
  <meta property="og:description" content="YOU DREAM IT. WE BUILD IT. Turnkey residential construction, home renovation, modular interiors and maintenance solutions in Bangalore.">
  <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/hero-main.jpg">

  <!-- Twitter Meta -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Big Nest Builders | Construction & Home Renovation in Bangalore">
  <meta name="twitter:description" content="YOU DREAM IT. WE BUILD IT. Premium construction and home improvement services in Bangalore.">
  <meta name="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/hero-main.jpg">

  <link rel="canonical" href="<?php echo SITE_URL; ?>/">
  <link rel="icon" type="image/png" href="assets/images/logo-web.png">

  <!-- Tailwind CSS & Lucide Icons CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Custom Design System & Hero Animation Stylesheets (Visual Reference: https://kpconstructions.group/) -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/hero-animation.css">

  <!-- Local Business Schema (JSON-LD) for Local SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "HomeAndConstructionBusiness",
    "name": "Big Nest Builders",
    "image": "<?php echo SITE_URL; ?>/assets/images/logo-web.png",
    "@id": "<?php echo SITE_URL; ?>/#business",
    "url": "<?php echo SITE_URL; ?>/",
    "telephone": "<?php echo SITE_PHONE; ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Near Gandhi Statue, Horamavu",
      "addressLocality": "Bangalore",
      "postalCode": "560043",
      "addressRegion": "Karnataka",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 13.0382,
      "longitude": 77.6657
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
      ],
      "opens": "09:00",
      "closes": "19:00"
    },
    "sameAs": [
      "<?php echo SITE_YOUTUBE_URL; ?>",
      "<?php echo SITE_WHATSAPP_URL; ?>"
    ],
    "priceRange": "₹₹",
    "slogan": "YOU DREAM IT. WE BUILD IT.",
    "areaServed": [
      "Horamavu",
      "Hennur",
      "Kalyan Nagar",
      "Banaswadi",
      "Whitefield",
      "Indiranagar",
      "Bangalore",
      "Karnataka"
    ]
  }
  </script>
</head>
<body class="bg-white text-[#17191F]">

  <!-- Header & Navigation -->
  <?php require_once __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Part 4: Cinematic Hero Experience -->
    <?php require_once __DIR__ . '/includes/hero.php'; ?>

    <!-- Specialization & Trust Strip -->
    <?php require_once __DIR__ . '/includes/trust_bar.php'; ?>

    <!-- Part 5 & 6: Brand Introduction & About Us -->
    <?php require_once __DIR__ . '/includes/about.php'; ?>

    <!-- Part 7: Why Choose Us (Bento Grid) -->
    <?php require_once __DIR__ . '/includes/why_us.php'; ?>

    <!-- Part 8: Services Showcase (10 Integrated Disciplines) -->
    <?php require_once __DIR__ . '/includes/services.php'; ?>

    <!-- Part 9: Service Estimates & Pricing System -->
    <?php require_once __DIR__ . '/includes/pricing.php'; ?>

    <!-- Part 10: Selected Works / Project Portfolio with Lightbox -->
    <?php require_once __DIR__ . '/includes/projects.php'; ?>

    <!-- Part 11: Our Six-Step Working Process -->
    <?php require_once __DIR__ . '/includes/process.php'; ?>

    <!-- Part 12: Video Showcase -->
    <?php require_once __DIR__ . '/includes/video.php'; ?>

    <!-- Part 13: Customer Experiences / Testimonials -->
    <?php require_once __DIR__ . '/includes/testimonials.php'; ?>

    <!-- Part 14: Frequently Asked Questions Accordion -->
    <?php require_once __DIR__ . '/includes/faq.php'; ?>

    <!-- Part 15: Contact & Project Enquiry -->
    <?php require_once __DIR__ . '/includes/contact.php'; ?>

    <!-- Part 17: Final Full-Width Call To Action -->
    <?php require_once __DIR__ . '/includes/cta.php'; ?>
  </main>

  <!-- Part 18: Royal Blue Footer -->
  <?php require_once __DIR__ . '/includes/footer.php'; ?>

  <!-- Part 16: Sticky Floating WhatsApp Button -->
  <?php require_once __DIR__ . '/includes/whatsapp_floating.php'; ?>

  <!-- Lightbox Modal Container -->
  <?php require_once __DIR__ . '/includes/lightbox.php'; ?>

  <!-- GSAP & ScrollTrigger for Cinematic Scroll Scrubbing -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <!-- Hero Scroll Animation Engine -->
  <script src="assets/js/hero-animation.js"></script>

  <!-- Core Interactive Script -->
  <script src="assets/js/main.js"></script>

</body>
</html>

