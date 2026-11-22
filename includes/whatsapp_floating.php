<?php
if (!defined('APP_INIT')) die('Direct access not permitted');
?>
<!-- Floating Sticky WhatsApp Connect Button (Hidden on Mobile) -->
<a 
  href="<?php echo get_whatsapp_link(); ?>" 
  target="_blank" 
  rel="noopener" 
  class="floating-whatsapp hidden md:flex group"
  aria-label="Chat with Big Nest Builders on WhatsApp"
>
  <span class="pulse-dot"></span>
  <i data-lucide="message-circle" class="w-5 h-5 text-white"></i>
  <span class="text-xs font-bold uppercase tracking-wider hidden sm:inline-block">
    Chat On WhatsApp
  </span>
</a>

