/**
 * BIG NEST BUILDERS - Interactive Engine
 * Inspired by https://kpconstructions.group/
 */

document.addEventListener('DOMContentLoaded', () => {
    // 2026 Master Icon Rendering Engine (Precision Architectural Line Weights)
    window.refreshIcons = function() {
        if (window.lucide) {
            window.lucide.createIcons({
                attrs: {
                    'stroke-width': 1.65,
                    'stroke-linecap': 'round',
                    'stroke-linejoin': 'round'
                }
            });
        }
    };
    window.refreshIcons();

    /* ==========================================================================
       1. Header Scroll Transformation
       ========================================================================== */
    const header = document.querySelector('header.site-header');
    const headerLogo = document.getElementById('header-logo');
    
    function updateHeader() {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();

    /* ==========================================================================
       2. Mobile Navigation Toggle
       ========================================================================== */
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const closeMobileMenuBtn = document.getElementById('close-mobile-menu-btn');
    const mobileDrawer = document.getElementById('mobile-nav-drawer');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    function openMobileMenu() {
        mobileDrawer.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        mobileDrawer.classList.remove('open');
        document.body.style.overflow = '';
    }

    if (mobileMenuBtn && mobileDrawer) {
        mobileMenuBtn.addEventListener('click', openMobileMenu);
    }

    if (closeMobileMenuBtn && mobileDrawer) {
        closeMobileMenuBtn.addEventListener('click', closeMobileMenu);
    }

    mobileNavLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileDrawer && mobileDrawer.classList.contains('open')) {
            closeMobileMenu();
        }
    });

    /* ==========================================================================
       3. Smooth Scrolling & Active Nav Spy
       ========================================================================== */
    const navLinks = document.querySelectorAll('header.site-header .nav-link');
    const sections = document.querySelectorAll('section[id], div[id="hero"]');

    function spyNavigation() {
        const scrollPos = window.scrollY + 120;
        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollPos >= top && scrollPos < top + height) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', spyNavigation, { passive: true });

    /* ==========================================================================
       4. Services Showcase Interactive Switcher & Category Filter
       ========================================================================== */
    const serviceFilterBtns = document.querySelectorAll('#services-category-filters .service-cat-filter-btn');
    const serviceCards = document.querySelectorAll('.service-discipline-card');

    if (serviceFilterBtns.length > 0 && serviceCards.length > 0) {
        serviceFilterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.dataset.filter;

                serviceFilterBtns.forEach(b => {
                    b.classList.remove('active', 'border-[#078FEA]', 'bg-[#078FEA]/20', 'text-white', 'shadow-md');
                    b.classList.add('border-white/10', 'text-white/70');
                });

                btn.classList.add('active', 'border-[#078FEA]', 'bg-[#078FEA]/20', 'text-white', 'shadow-md');
                btn.classList.remove('border-white/10', 'text-white/70');

                serviceCards.forEach(card => {
                    const cardCat = card.dataset.serviceCategory;
                    if (filter === 'all' || cardCat === filter) {
                        card.style.display = '';
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(16px) scale(0.98)';
                        setTimeout(() => {
                            card.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0) scale(1)';
                        }, 20);
                    } else {
                        card.style.transition = 'all 0.3s ease';
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.96)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 280);
                    }
                });

                if (window.refreshIcons) window.refreshIcons();
            });
        });
    }

    // Retain compatibility if legacy service tabs are present
    const serviceTabs = document.querySelectorAll('.service-tab-btn');
    const servicePanels = document.querySelectorAll('.service-panel-card');

    if (serviceTabs.length > 0 && servicePanels.length > 0) {
        serviceTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetId = tab.dataset.serviceTarget;
                
                serviceTabs.forEach(t => t.classList.remove('active', 'border-blue', 'bg-blue/10', 'text-white'));
                serviceTabs.forEach(t => t.classList.add('border-white/10', 'text-white/70'));
                
                tab.classList.add('active', 'border-blue', 'bg-blue/10', 'text-white');
                tab.classList.remove('border-white/10', 'text-white/70');

                servicePanels.forEach(panel => {
                    if (panel.id === `service-panel-${targetId}`) {
                        panel.classList.remove('hidden');
                        panel.classList.add('flex');
                    } else {
                        panel.classList.add('hidden');
                        panel.classList.remove('flex');
                    }
                });

                if (window.refreshIcons) window.refreshIcons();
            });
        });
    }

    /* ==========================================================================
       5. Project Portfolio Filtering & Lightbox
       ========================================================================== */
    const filterPills = document.querySelectorAll('.filter-pill');
    const projectCards = document.querySelectorAll('.project-grid-item');
    const lightbox = document.getElementById('project-lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxCategory = document.getElementById('lightbox-category');
    const lightboxLocation = document.getElementById('lightbox-location');
    const closeLightboxBtn = document.getElementById('close-lightbox-btn');
    const prevLightboxBtn = document.getElementById('prev-lightbox-btn');
    const nextLightboxBtn = document.getElementById('next-lightbox-btn');

    let currentProjectIndex = 0;
    const projectList = [];

    // Collect all projects for lightbox
    projectCards.forEach((card, index) => {
        projectList.push({
            img: card.dataset.image,
            title: card.dataset.title,
            category: card.dataset.categoryName,
            location: card.dataset.location
        });

        const previewTrigger = card.querySelector('.lightbox-trigger');
        if (previewTrigger) {
            previewTrigger.addEventListener('click', (e) => {
                e.preventDefault();
                openLightbox(index);
            });
        }
    });

    // Filtering logic
    filterPills.forEach(pill => {
        pill.addEventListener('click', () => {
            filterPills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');

            const filterValue = pill.dataset.filter;

            projectCards.forEach(card => {
                const cardCat = card.dataset.category;
                if (filterValue === 'all' || cardCat === filterValue) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.96)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    function openLightbox(index) {
        if (!lightbox || !projectList[index]) return;
        currentProjectIndex = index;
        const p = projectList[index];
        lightboxImg.src = p.img;
        lightboxTitle.textContent = p.title;
        lightboxCategory.textContent = p.category;
        lightboxLocation.textContent = p.location;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        if (!lightbox) return;
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (closeLightboxBtn) closeLightboxBtn.addEventListener('click', closeLightbox);
    if (lightbox) {
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });
    }

    if (prevLightboxBtn) {
        prevLightboxBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            currentProjectIndex = (currentProjectIndex - 1 + projectList.length) % projectList.length;
            openLightbox(currentProjectIndex);
        });
    }

    if (nextLightboxBtn) {
        nextLightboxBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            currentProjectIndex = (currentProjectIndex + 1) % projectList.length;
            openLightbox(currentProjectIndex);
        });
    }

    document.addEventListener('keydown', (e) => {
        if (lightbox && lightbox.classList.contains('active')) {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft' && prevLightboxBtn) prevLightboxBtn.click();
            if (e.key === 'ArrowRight' && nextLightboxBtn) nextLightboxBtn.click();
        }
    });

    /* ==========================================================================
       6. FAQ Accordion (Smooth Expand & Rotate Plus Icon)
       ========================================================================== */
    const faqButtons = document.querySelectorAll('.faq-button');
    
    faqButtons.forEach(button => {
        button.addEventListener('click', () => {
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            const answer = button.nextElementSibling;

            // Close other items for refined accordions
            faqButtons.forEach(otherBtn => {
                if (otherBtn !== button) {
                    otherBtn.setAttribute('aria-expanded', 'false');
                    if (otherBtn.nextElementSibling) {
                        otherBtn.nextElementSibling.classList.remove('open');
                    }
                }
            });

            if (isExpanded) {
                button.setAttribute('aria-expanded', 'false');
                answer.classList.remove('open');
            } else {
                button.setAttribute('aria-expanded', 'true');
                answer.classList.add('open');
            }
        });
    });

    /* ==========================================================================
       7. Testimonial Carousel
       ========================================================================== */
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const prevTestimonialBtn = document.getElementById('prev-testimonial-btn');
    const nextTestimonialBtn = document.getElementById('next-testimonial-btn');
    let currentTestimonial = 0;

    function showTestimonial(index) {
        if (!testimonialSlides.length) return;
        testimonialSlides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('hidden');
                slide.classList.add('block');
            } else {
                slide.classList.add('hidden');
                slide.classList.remove('block');
            }
        });
    }

    if (prevTestimonialBtn && nextTestimonialBtn && testimonialSlides.length > 0) {
        prevTestimonialBtn.addEventListener('click', () => {
            currentTestimonial = (currentTestimonial - 1 + testimonialSlides.length) % testimonialSlides.length;
            showTestimonial(currentTestimonial);
        });

        nextTestimonialBtn.addEventListener('click', () => {
            currentTestimonial = (currentTestimonial + 1) % testimonialSlides.length;
            showTestimonial(currentTestimonial);
        });

        // Show initial
        showTestimonial(0);
    }

    /* ==========================================================================
       8. Contact Form AJAX Submission with Full Validation
       ========================================================================== */
    const contactForm = document.getElementById('project-enquiry-form');
    const formSuccessAlert = document.getElementById('form-success-alert');
    const formErrorAlert = document.getElementById('form-error-alert');
    const submitBtn = document.getElementById('submit-enquiry-btn');
    const submitBtnText = document.getElementById('submit-btn-text');
    const submitBtnSpinner = document.getElementById('submit-btn-spinner');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Clear previous error messages
            document.querySelectorAll('.field-error-msg').forEach(el => el.textContent = '');
            if (formSuccessAlert) formSuccessAlert.classList.add('hidden');
            if (formErrorAlert) formErrorAlert.classList.add('hidden');

            // Quick Client Validation
            const name = contactForm.querySelector('[name="full_name"]').value.trim();
            const phone = contactForm.querySelector('[name="phone"]').value.trim();
            const email = contactForm.querySelector('[name="email"]').value.trim();
            const service = contactForm.querySelector('[name="service"]').value;
            const location = contactForm.querySelector('[name="location"]').value.trim();
            const budget = contactForm.querySelector('[name="budget"]').value;
            const desc = contactForm.querySelector('[name="description"]').value.trim();

            let hasClientError = false;

            if (name.length < 2) {
                showFieldError('full_name', 'Please enter your full name.');
                hasClientError = true;
            }

            // Indian phone number regex
            const cleanPhone = phone.replace(/[\s\-\(\)\+]/g, '').replace(/^91/, '');
            if (!/^[6-9]\d{9}$/.test(cleanPhone)) {
                showFieldError('phone', 'Please enter a valid 10-digit Indian mobile number.');
                hasClientError = true;
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                showFieldError('email', 'Please enter a valid email address.');
                hasClientError = true;
            }

            if (!service) {
                showFieldError('service', 'Please select a service.');
                hasClientError = true;
            }

            if (!location) {
                showFieldError('location', 'Please specify property location.');
                hasClientError = true;
            }

            if (!budget) {
                showFieldError('budget', 'Please select an estimated budget.');
                hasClientError = true;
            }

            if (desc.length < 5) {
                showFieldError('description', 'Please provide a brief project description.');
                hasClientError = true;
            }

            if (hasClientError) {
                return;
            }

            // Show loading state
            if (submitBtn) submitBtn.disabled = true;
            if (submitBtnText) submitBtnText.textContent = 'Submitting Enquiry...';
            if (submitBtnSpinner) submitBtnSpinner.classList.remove('hidden');

            const formData = new FormData(contactForm);

            try {
                const response = await fetch('api/contact.php', {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    if (formSuccessAlert) {
                        formSuccessAlert.classList.remove('hidden');
                        const msgEl = formSuccessAlert.querySelector('.success-message');
                        if (msgEl) msgEl.textContent = data.message;
                        formSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    contactForm.reset();
                    // Update CSRF token if returned
                    if (data.csrf_token) {
                        const csrfInput = contactForm.querySelector('[name="csrf_token"]');
                        if (csrfInput) csrfInput.value = data.csrf_token;
                    }
                } else {
                    if (data.errors) {
                        for (const [field, errorMsg] of Object.entries(data.errors)) {
                            showFieldError(field, errorMsg);
                        }
                    }
                    if (formErrorAlert) {
                        formErrorAlert.classList.remove('hidden');
                        const msgEl = formErrorAlert.querySelector('.error-message');
                        if (msgEl) msgEl.textContent = data.message || 'Please correct the highlighted fields.';
                    }
                }
            } catch (err) {
                if (formErrorAlert) {
                    formErrorAlert.classList.remove('hidden');
                    const msgEl = formErrorAlert.querySelector('.error-message');
                    if (msgEl) msgEl.textContent = 'Network or server error. Please call +91 96203 64786 or connect via WhatsApp.';
                }
            } finally {
                if (submitBtn) submitBtn.disabled = false;
                if (submitBtnText) submitBtnText.textContent = 'Submit Project Enquiry';
                if (submitBtnSpinner) submitBtnSpinner.classList.add('hidden');
                if (window.refreshIcons) window.refreshIcons();
            }
        });
    }

    function showFieldError(fieldName, msg) {
        const errorEl = document.querySelector(`.field-error-msg[data-for="${fieldName}"]`);
        if (errorEl) {
            errorEl.textContent = msg;
        }
    }

    /* ==========================================================================
       9. Quick Pre-fill Service from Service Cards to Contact Form
       ========================================================================== */
    const serviceEnquireBtns = document.querySelectorAll('.service-enquire-trigger');
    serviceEnquireBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const serviceVal = btn.dataset.serviceName;
            const selectEl = document.querySelector('#project-enquiry-form [name="service"]');
            if (selectEl && serviceVal) {
                for (let i = 0; i < selectEl.options.length; i++) {
                    if (selectEl.options[i].text.toLowerCase().includes(serviceVal.toLowerCase()) || 
                        selectEl.options[i].value.toLowerCase().includes(serviceVal.toLowerCase())) {
                        selectEl.selectedIndex = i;
                        break;
                    }
                }
            }
        });
    });

    /* ==========================================================================
       10. Master Scroll Reveal Animation Engine
       ========================================================================== */
    const revealTargets = document.querySelectorAll('.reveal-up, .reveal-fade, .reveal-scale, .reveal-left, .reveal-right');
    
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        revealTargets.forEach(el => revealObserver.observe(el));
    } else {
        revealTargets.forEach(el => el.classList.add('is-revealed'));
    }
});

