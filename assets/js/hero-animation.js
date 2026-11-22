/**
 * BIG NEST BUILDERS – CINEMATIC SCROLL-DRIVEN HERO ANIMATION
 * Visual Reference: https://kpconstructions.group/
 * Controls 127 sequential architectural frames via scroll progress.
 */

(function () {
  'use strict';

  // Wait for DOM
  document.addEventListener('DOMContentLoaded', initHeroAnimation);

  function initHeroAnimation() {
    const scrollTrack = document.getElementById('hero-scroll-track');
    const stickyStage = document.getElementById('hero-sticky-stage');
    const canvas = document.getElementById('bnb-hero-canvas');
    const loader = document.getElementById('bnb-hero-loader');
    const loaderPercent = document.getElementById('bnb-loader-percent');
    const loaderFill = document.getElementById('bnb-loader-progress-fill');
    const scrollIndicator = document.getElementById('bnb-hero-scroll-indicator');
    const heroContent = document.getElementById('bnb-hero-text-content');

    if (!scrollTrack || !canvas) {
      console.warn('[BNB Hero] Required elements not found. Skipping image sequence.');
      return;
    }

    const ctx = canvas.getContext('2d', { alpha: false });
    const framesUrls = window.BNB_HERO_FRAMES || [];
    const totalFrames = framesUrls.length;

    if (totalFrames === 0) {
      console.warn('[BNB Hero] No frames supplied in window.BNB_HERO_FRAMES.');
      if (loader) loader.classList.add('loaded');
      return;
    }

    const images = new Array(totalFrames);
    let loadedCount = 0;
    let currentRenderedIndex = -1;
    let isInitialFrameDrawn = false;
    let animationProgress = 0;

    // Optimal Device Pixel Ratio:
    // On mobile (<768px), cap at 1.5 to reduce GPU memory footprint by ~55% and ensure buttery smooth 60/120fps touch scrub.
    // On tablet & desktop, cap at 2.0 for razor-sharp rendering.
    function getOptimalDpr() {
      const isMobile = window.innerWidth < 768;
      const rawDpr = window.devicePixelRatio || 1;
      return isMobile ? Math.min(rawDpr, 1.5) : Math.min(rawDpr, 2.0);
    }

    let dpr = getOptimalDpr();

    /* ==========================================================================
       1. Responsive Canvas Sizing (Cover Dimensions & DPR handling)
       ========================================================================== */
    function resizeCanvas() {
      const width = window.innerWidth;
      const height = window.innerHeight;
      dpr = getOptimalDpr();

      canvas.width = Math.round(width * dpr);
      canvas.height = Math.round(height * dpr);
      canvas.style.width = width + 'px';
      canvas.style.height = height + 'px';

      // Redraw current frame immediately
      if (currentRenderedIndex >= 0 && images[currentRenderedIndex]) {
        drawFrame(currentRenderedIndex);
      }
    }

    function handleResizeAndOrientation() {
      resizeCanvas();
      // Refresh ScrollTrigger positions if available
      if (window.ScrollTrigger) {
        window.ScrollTrigger.refresh();
      }
    }

    window.addEventListener('resize', debounce(handleResizeAndOrientation, 100), { passive: true });
    window.addEventListener('orientationchange', () => {
      setTimeout(handleResizeAndOrientation, 150);
    }, { passive: true });

    resizeCanvas();

    /* ==========================================================================
       2. Draw Frame with Responsive Object-Fit: Cover & Mobile Focal Alignment
       ========================================================================== */
    function drawFrame(index) {
      const img = images[index];
      if (!img || !img.complete || img.naturalWidth === 0) {
        return;
      }

      const canvasW = canvas.width;
      const canvasH = canvas.height;
      const imgW = img.naturalWidth;
      const imgH = img.naturalHeight;

      const imgRatio = imgW / imgH;
      const canvasRatio = canvasW / canvasH;

      let drawW, drawH, offsetX, offsetY;

      if (canvasRatio > imgRatio) {
        // Wider than image (desktop widescreen)
        drawW = canvasW;
        drawH = canvasW / imgRatio;
        offsetX = 0;
        offsetY = (canvasH - drawH) * 0.5; // center vertically
      } else {
        // Taller than image (portrait mobile & tablet)
        drawW = canvasH * imgRatio;
        drawH = canvasH;
        // On portrait screens, center focal point horizontally so building is centered
        offsetX = (canvasW - drawW) * 0.5;
        offsetY = 0;
      }

      ctx.imageSmoothingEnabled = true;
      ctx.imageSmoothingQuality = dpr > 1 ? 'high' : 'medium';
      ctx.drawImage(img, Math.round(offsetX), Math.round(offsetY), Math.round(drawW), Math.round(drawH));

      currentRenderedIndex = index;
    }

    /* ==========================================================================
       3. Image Sequence Preloader
       ========================================================================== */
    function updateProgress(loaded, total) {
      const pct = Math.min(100, Math.round((loaded / total) * 100));
      if (loaderPercent) loaderPercent.textContent = pct + '%';
      if (loaderFill) loaderFill.style.width = pct + '%';

      if (loaded >= total) {
        completeLoading();
      }
    }

    function triggerHeroTextEntrance() {
      if (heroContent && !heroContent.classList.contains('hero-in')) {
        heroContent.classList.add('hero-in');
      }
    }

    function completeLoading() {
      if (loader && !loader.classList.contains('loaded')) {
        setTimeout(() => {
          loader.classList.add('loaded');
          // Trigger cinematic text reveal right as loader dismisses
          triggerHeroTextEntrance();
          // Re-trigger scroll spy or ScrollTrigger refresh
          if (window.ScrollTrigger) {
            window.ScrollTrigger.refresh();
          }
        }, 300);
      } else {
        triggerHeroTextEntrance();
      }
    }

    // Safety fallback: trigger text entrance after short delay regardless of network state
    setTimeout(triggerHeroTextEntrance, 600);

    // Safety timeout: dismiss loader after 7s even if a few frames lag on slow network
    setTimeout(() => {
      completeLoading();
    }, 7000);

    // Preload all 127 frames in natural order
    framesUrls.forEach((url, index) => {
      const img = new Image();
      img.src = url;

      img.onload = () => {
        images[index] = img;
        loadedCount++;

        // Draw initial frame as soon as frame 0 is ready
        if (index === 0 && !isInitialFrameDrawn) {
          isInitialFrameDrawn = true;
          drawFrame(0);
          // If frame 0 is drawn and loader is fast, prepare entrance
          setTimeout(triggerHeroTextEntrance, 200);
        }

        updateProgress(loadedCount, totalFrames);
      };

      img.onerror = () => {
        console.warn(`[BNB Hero] Failed to load frame ${index}: ${url}`);
        loadedCount++;
        updateProgress(loadedCount, totalFrames);
      };
    });

    /* ==========================================================================
       4. Scroll-Driven Engine (GSAP ScrollTrigger + Native Fallback)
       ========================================================================== */
    function handleProgress(progress) {
      animationProgress = Math.min(1, Math.max(0, progress));

      // Calculate target frame index (0 to totalFrames - 1)
      const targetIndex = Math.min(
        totalFrames - 1,
        Math.max(0, Math.floor(animationProgress * (totalFrames - 1)))
      );

      // Only redraw if frame changed
      if (targetIndex !== currentRenderedIndex) {
        requestAnimationFrame(() => {
          // Find closest loaded frame if target frame is not yet cached
          let renderIdx = targetIndex;
          if (!images[renderIdx] || !images[renderIdx].complete) {
            // search backwards
            while (renderIdx > 0 && (!images[renderIdx] || !images[renderIdx].complete)) {
              renderIdx--;
            }
          }
          if (images[renderIdx] && images[renderIdx].complete) {
            drawFrame(renderIdx);
          }
        });
      }

      // Hide scroll indicator on initial scroll
      if (scrollIndicator) {
        if (animationProgress > 0.02) {
          scrollIndicator.classList.add('hidden-indicator');
        } else {
          scrollIndicator.classList.remove('hidden-indicator');
        }
      }

      // Subtle editorial text content transformation
      if (heroContent) {
        // At the very end (frame 120-127), reveal final landmark completion emphasis
        if (animationProgress > 0.88) {
          const finalSub = heroContent.querySelector('.bnb-hero-final-sub');
          if (finalSub) finalSub.classList.remove('opacity-0', 'translate-y-2');
        } else {
          const finalSub = heroContent.querySelector('.bnb-hero-final-sub');
          if (finalSub) finalSub.classList.add('opacity-0', 'translate-y-2');
        }
      }
    }

    // Try GSAP ScrollTrigger if loaded
    if (window.gsap && window.ScrollTrigger) {
      window.gsap.registerPlugin(window.ScrollTrigger);

      window.ScrollTrigger.create({
        trigger: scrollTrack,
        start: 'top top',
        end: 'bottom bottom',
        scrub: 0.5,
        fastScrollEnd: true,
        preventOverlaps: true,
        invalidateOnRefresh: true,
        onUpdate: (self) => {
          handleProgress(self.progress);
        }
      });
    } else {
      // Native high-performance scroll listener fallback
      let ticking = false;

      function onScroll() {
        if (!ticking) {
          requestAnimationFrame(() => {
            const rect = scrollTrack.getBoundingClientRect();
            const totalScroll = rect.height - window.innerHeight;
            if (totalScroll > 0) {
              const currentScroll = -rect.top;
              const progress = Math.min(1, Math.max(0, currentScroll / totalScroll));
              handleProgress(progress);
            }
            ticking = false;
          });
          ticking = true;
        }
      }

      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    }
  }

  // Utility Debounce
  function debounce(fn, ms) {
    let timer;
    return function () {
      clearTimeout(timer);
      timer = setTimeout(() => fn.apply(this, arguments), ms);
    };
  }
})();

