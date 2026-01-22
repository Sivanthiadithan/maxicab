import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    // Slider Logic
    const slider = document.getElementById("hero-slider");
    if (slider) {
        const slides = slider.querySelectorAll(".slide");
        const dots = slider.querySelectorAll(".dot");
        let currentSlide = 0;
        const intervalTime = 5000;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.add("active", "slide-active");
                } else {
                    slide.classList.remove("active", "slide-active");
                }
            });

            if (dots.length > 0) {
                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.add("active");
                    } else {
                        dot.classList.remove("active");
                    }
                });
            }
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Initial state
        showSlide(0);

        // Auto play
        let slideInterval = setInterval(nextSlide, intervalTime);

        // Manual Navigation
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                 nextSlide();
                 resetInterval();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                 prevSlide();
                 resetInterval();
            });
        }

        // Dot Navigation removed (dots removed from UI)

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, intervalTime);
        }
    }

    // Mobile Menu Logic (Sidebar Drawer)
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileDrawer = document.getElementById('mobile-menu-drawer');
    const mobileBackdrop = document.getElementById('mobile-menu-backdrop');
    const mobileCloseBtn = document.getElementById('mobile-menu-close');

    if (mobileBtn && mobileDrawer && mobileBackdrop) {
        function openMenu() {
            mobileBackdrop.classList.remove('hidden');
            // Small delay to allow display:block to apply before opacity transition
            setTimeout(() => {
                mobileBackdrop.classList.remove('opacity-0');
                mobileDrawer.classList.remove('-translate-x-full');
            }, 10);
            document.body.classList.add('overflow-hidden');
        }

        function closeMenu() {
            mobileBackdrop.classList.add('opacity-0');
            mobileDrawer.classList.add('-translate-x-full');
            
            // Wait for transition to finish before hiding backdrop
            setTimeout(() => {
                mobileBackdrop.classList.add('hidden');
            }, 300);
            document.body.classList.remove('overflow-hidden');
        }

        mobileBtn.addEventListener('click', (e) => {
            e.preventDefault();
            openMenu();
        });

        if (mobileCloseBtn) {
            mobileCloseBtn.addEventListener('click', (e) => {
                e.preventDefault();
                closeMenu();
            });
        }

        // Close when clicking backdrop
        mobileBackdrop.addEventListener('click', () => {
            closeMenu();
        });
        
        // Mobile Services Accordion
        const mobileServicesBtn = document.getElementById('mobile-services-btn');
        const mobileServicesMenu = document.getElementById('mobile-services-menu');
        const mobileServicesIcon = document.getElementById('mobile-services-icon');

        if (mobileServicesBtn && mobileServicesMenu && mobileServicesIcon) {
            mobileServicesBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                const isClosed = mobileServicesMenu.classList.contains('max-h-0');
                if (isClosed) {
                    mobileServicesMenu.classList.remove('max-h-0');
                    mobileServicesMenu.classList.add('max-h-[500px]');
                    mobileServicesIcon.classList.add('rotate-180');
                } else {
                    mobileServicesMenu.classList.remove('max-h-[500px]');
                    mobileServicesMenu.classList.add('max-h-0');
                    mobileServicesIcon.classList.remove('rotate-180');
                }
            });
        }

        // Mobile Fleet Accordion
        const mobileFleetBtn = document.getElementById('mobile-fleet-btn');
        const mobileFleetMenu = document.getElementById('mobile-fleet-menu');
        const mobileFleetIcon = document.getElementById('mobile-fleet-icon');

        if (mobileFleetBtn && mobileFleetMenu && mobileFleetIcon) {
            mobileFleetBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                const isClosed = mobileFleetMenu.classList.contains('max-h-0');
                if (isClosed) {
                    mobileFleetMenu.classList.remove('max-h-0');
                    mobileFleetMenu.classList.add('max-h-[500px]');
                    mobileFleetIcon.classList.add('rotate-180');
                } else {
                    mobileFleetMenu.classList.remove('max-h-[500px]');
                    mobileFleetMenu.classList.add('max-h-0');
                    mobileFleetIcon.classList.remove('rotate-180');
                }
            });
        }
        
        // Close on link click (except toggles)
        mobileDrawer.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                closeMenu();
            });
        });
    }
});
