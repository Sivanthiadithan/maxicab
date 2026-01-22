@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <div class="banner-slider relative min-h-[90vh] flex items-center overflow-hidden bg-gray-100">
        <!-- Hero Backgrounds (Managed by GSAP) -->
        <div id="hero-bg-container" class="absolute inset-0 z-0">
            <div class="hero-bg slide active absolute inset-0 opacity-100 scale-100" style="background: url('https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=2070&auto=format&fit=crop') center/cover no-repeat;"></div>
            <div class="hero-bg slide absolute inset-0 opacity-0 scale-110" style="background: url('https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=2069&auto=format&fit=crop') center/cover no-repeat;"></div>
            <div class="hero-bg slide absolute inset-0 opacity-0 scale-110" style="background: url('https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?q=80&w=2070&auto=format&fit=crop') center/cover no-repeat;"></div>
        </div>
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent z-10 theme-overlay"></div>

        <div class="w-[85%] mx-auto relative z-20">
            <div class="max-w-3xl">
                <div id="hero-content-container">
                    {{-- Slide 1 --}}
                    <div class="hero-content-slide slide-content active opacity-100 block">
                        <span class="banner-kicker">
                            Excellence in Motion
                        </span>
                        <h1 class="banner-title">
                            <span class="premium-gradient-text">Stress-Free</span><br>
                            Changi Arrival
                        </h1>
                        <p class="banner-description">
                            Personalized meet & greet service with our premium fleet. Your first-class experience starts at the terminal.
                        </p>
                    </div>

                    {{-- Slide 2 --}}
                    <div class="hero-content-slide slide-content hidden opacity-0">
                        <span class="banner-kicker">
                            Corporate Elite
                        </span>
                        <h1 class="banner-title">
                            <span class="premium-gradient-text">Professional</span><br>
                            Group Mobility
                        </h1>
                        <p class="banner-description">
                            Reliable transportation solutions for corporate events, VIP delegations, and business meetings in Singapore.
                        </p>
                    </div>

                    {{-- Slide 3 --}}
                    <div class="hero-content-slide slide-content hidden opacity-0">
                        <span class="banner-kicker">
                            City Discovery
                        </span>
                        <h1 class="banner-title">
                            <span class="premium-gradient-text">Singapore</span> At<br>
                            Your Own Pace
                        </h1>
                        <p class="banner-description">
                            Experience the Lion City with our flexible hourly booking service. Professional chauffeurs at your disposal.
                        </p>
                    </div>

                    <div class="banner-btns mt-10">
                        <a href="/online-booking" class="glow-button px-10 py-4 bg-premium-gold text-white font-bold rounded-lg hover:shadow-[0_0_20px_rgba(197,160,89,0.5)] transition-all duration-300">
                            Book Your Executive Ride
                        </a>
                        <a href="/fleet" class="px-10 py-4 bg-gray-200/50 backdrop-blur-md border border-gray-200 text-gray-900 font-bold rounded-lg hover:bg-gray-300/50 transition-all duration-300">
                            Explore the Fleet
                        </a>
                    </div>
                </div>

                <!-- Stats/Trust Badges -->
                <div class="mt-16 grid grid-cols-3 gap-8 border-t border-white/10 pt-10 max-w-2xl">
                    <div>
                        <div class="text-3xl font-bold text-premium-gold">24/7</div>
                        <div class="text-xs text-secondary-theme uppercase tracking-widest mt-1">Availability</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-premium-gold">15m</div>
                        <div class="text-xs text-secondary-theme uppercase tracking-widest mt-1">Response Time</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-premium-gold">Fixed</div>
                        <div class="text-xs text-secondary-theme uppercase tracking-widest mt-1">Rate Guarantee</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20">
            <div class="w-6 h-10 border-2 border-gray-300 rounded-full flex justify-center p-1">
                <div id="scroll-dot" class="w-1 h-2 bg-premium-gold rounded-full"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const bgs = document.querySelectorAll('.hero-bg');
            const contentSlides = document.querySelectorAll('.hero-content-slide');
            let current = 0;

            // Simple background and content slider
            setInterval(() => {
                const next = (current + 1) % bgs.length;
                
                // --- Background Transition ---
                // Fade out current bg
                gsap.to(bgs[current], {
                    opacity: 0,
                    scale: 1.1,
                    duration: 2,
                    ease: "power2.inOut"
                });

                // Fade in next bg
                gsap.to(bgs[next], {
                    opacity: 1,
                    scale: 1,
                    duration: 2,
                    ease: "power2.inOut"
                });

                // --- Content Transition ---
                // Fade out current content
                gsap.to(contentSlides[current], {
                    opacity: 0,
                    y: -20,
                    duration: 1,
                    ease: "power2.inOut",
                    onComplete: () => {
                        contentSlides[current].classList.add('hidden');
                    }
                });

                // Fade in next content
                contentSlides[next].classList.remove('hidden');
                gsap.fromTo(contentSlides[next], 
                    { opacity: 0, y: 30 },
                    { 
                        opacity: 1, 
                        y: 0, 
                        duration: 1, 
                        delay: 0.5,
                        ease: "power3.out" 
                    }
                );

                current = next;
            }, 6000);

            // Initial hero animation
            const tl = gsap.timeline();
            tl.from(".hero-content-slide.active > *", {
                y: 50,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                ease: "power3.out"
            });

            // Scroll dot animation
            gsap.to("#scroll-dot", {
                y: 15,
                repeat: -1,
                duration: 1.5,
                ease: "power1.inOut",
                yoyo: true
            });
        });
    </script>


    {{-- Introduction Section --}}
    <section class="py-20 bg-white intro-section text-gray-900">
        <div class="w-[85%] md:w-[80%] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                {{-- Left: Image with Badge --}}
                <div class="relative" data-aos="fade-right">
                    <div class="intro-image-container">
                        <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=2070&auto=format&fit=crop" 
                             alt="Toyota Alphard Maxi Cab Singapore" 
                             class="w-full rounded-2xl shadow-xl">
                        
                        <div class="satisfied-clients-badge">
                            <span class="satisfied-clients-icon"><i class="fas fa-users"></i></span>
                            <span class="satisfied-clients-over">Over</span>
                            <span class="satisfied-clients-count">5000</span>
                            <span class="satisfied-clients-label">Satisfied Clients</span>
                        </div>
                    </div>
                </div>

                {{-- Right: Content --}}
                <div class="intro-text-content" data-aos="fade-left">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-8 leading-tight text-gray-900">
                        Easy Maxi Cab <br>Booking in Singapore
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Looking for a reliable and comfortable transportation solution in Singapore? Look no further than 
                        <strong>Maxicabs Singapore</strong>. With over 10 years of experience, we have established ourselves 
                        as the leading maxi cab and minibus rental service provider in Singapore.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Maxicabs Singapore is your go-to choice for all your transportation needs. Whether you're travelling 
                        solo or in a large group, we have the perfect vehicle to accommodate your requirements. Our fleet 
                        includes spacious and well-maintained maxi cabs and minibusses, ensuring a comfortable journey 
                        for every passenger.
                    </p>
                </div>
            </div>

            {{-- Full Width Content Below --}}
            <div class="mt-12 intro-text-content" data-aos="fade-up">
                <p class="text-gray-600 leading-relaxed mb-6">
                    A maxi cab booking has never been easier. With our convenient online booking system, you can secure 
                    your ride with just a few clicks. Visit our website and choose your desired vehicle type, select 
                    your pick-up and drop-off locations, and book your maxi cab instantly. Our user-friendly interface 
                    allows you to customize your trip details, making it a breeze to book the perfect ride for your needs.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    We specialize in providing reliable maxi cab Singapore services for various occasions. Whether 
                    you need airport transfers, hotel transfers, corporate events, or simply a night out in the city, 
                    our experienced drivers are here to make your journey smooth and hassle-free. Sit back, relax, 
                    and enjoy the ride while our skilled drivers navigate the city's roads with precision and expertise.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    We take pride in our commitment to customer satisfaction. Our dedicated customer support team is 
                    available 24/7 to assist you with any inquiries or special requests you may have. We believe in 
                    transparent pricing, ensuring there are no hidden costs or surprises. With Maxicabs Singapore, 
                    you'll always know what you're paying for, allowing you to plan your transportation budget with ease.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    As a leading transportation service provider, we understand the importance of safety. Your 
                    well-being is our top priority, so we have implemented stringent hygiene protocols and sanitization 
                    measures in response to the COVID-19 pandemic. Our vehicles undergo regular cleaning and 
                    disinfection, and our drivers adhere to all necessary safety guidelines to provide you with a 
                    clean and safe environment throughout your journey.
                </p>
                <p class="font-bold text-gray-900 text-xl">
                    Experience the convenience and reliability of Maxicabs Singapore today. Whether you need to book 
                    maxi cab, maxi taxi, big cab, minibus, or big taxi in Singapore, we've got you covered.
                </p>
            </div>
        </div>
    </section>


    {{-- Features Section --}}
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-white"></div>
        <div class="w-[85%] mx-auto relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-premium-gold font-bold tracking-[0.2em] text-xs uppercase mb-4 block">Our Excellence</span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900 font-premium">Why Choose Our <span class="premium-gradient-text">Elite</span> Service?</h2>
                <p class="text-gray-600 text-lg">We redefine transportation in Singapore with a focus on luxury, punctuality, and bespoke experiences.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div class="glass-card p-10 rounded-3xl group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-premium-gold/10 text-premium-gold rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-premium-gold group-hover:text-white transition-all duration-500">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 font-premium">24/7 Dedicated Support</h3>
                    <p class="text-gray-600 leading-relaxed">Our concierge team is available around the clock to ensure your journey is seamless from booking to destination.</p>
                </div>
                <!-- Feature 2 -->
                <div class="glass-card p-10 rounded-3xl group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-premium-gold/10 text-premium-gold rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-premium-gold group-hover:text-white transition-all duration-500">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 font-premium">Transparent Fixed Rates</h3>
                    <p class="text-gray-600 leading-relaxed">Experience peace of mind with our all-inclusive pricing. No hidden surcharges, just pure premium service.</p>
                </div>
                <!-- Feature 3 -->
                <div class="glass-card p-10 rounded-3xl group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-premium-gold/10 text-premium-gold rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-premium-gold group-hover:text-white transition-all duration-500">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 font-premium">Sanitized & Secure</h3>
                    <p class="text-gray-600 leading-relaxed">Our fleet undergoes rigorous daily sanitization and maintenance to meet the highest safety standards.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Fleet / Pricing Section --}}
    <section class="py-24 bg-white border-t border-black/5">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-20" data-aos="fade-up">
                <span class="text-premium-gold font-bold tracking-[0.2em] text-xs uppercase mb-4 block">The Fleet</span>
                <h2 class="text-4xl md:text-6xl font-bold mb-6 text-gray-900 font-premium">Managed for <span class="premium-gradient-text">Success</span></h2>
                <p class="text-gray-600 text-lg">Discover the perfect chariot for your group requirements.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- 6 Seater --}}
                <div class="glass-card rounded-3xl overflow-hidden group" data-aos="zoom-in" data-aos-delay="100">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1609530939521-08f33f6df278?q=80&w=2070&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="6 Seater">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 font-premium">6 Seater Maxi Cab</h3>
                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Transfer</span> <span class="font-bold text-premium-gold">$55</span></li>
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Arrival</span> <span class="font-bold text-premium-gold">$60</span></li>
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Hourly (3h)</span> <span class="font-bold text-premium-gold">$165</span></li>
                        </ul>
                        <a href="/online-booking"
                            class="block text-center bg-white/10 hover:bg-premium-gold text-white py-4 rounded-xl font-bold transition-all duration-300">Book Now</a>
                    </div>
                </div>

                {{-- 7 Seater --}}
                <div class="glass-card rounded-3xl overflow-hidden group" data-aos="zoom-in" data-aos-delay="200">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=2070&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="7 Seater">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 font-premium">7 Seater Executive</h3>
                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Transfer</span> <span class="font-bold text-premium-gold">$70</span></li>
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Arrival</span> <span class="font-bold text-premium-gold">$75</span></li>
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Hourly (3h)</span> <span class="font-bold text-premium-gold">$210</span></li>
                        </ul>
                        <a href="/online-booking"
                            class="block text-center bg-white/10 hover:bg-premium-gold text-white py-4 rounded-xl font-bold transition-all duration-300">Book Now</a>
                    </div>
                </div>

                {{-- 9/13 Seater --}}
                <div class="glass-card rounded-3xl overflow-hidden group" data-aos="zoom-in" data-aos-delay="300">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/premium/hero-2.png') }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="13 Seater">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 font-premium">9/13 Seater Minibus</h3>
                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Transfer</span> <span class="font-bold text-premium-gold">$75</span></li>
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Arrival</span> <span class="font-bold text-premium-gold">$80</span></li>
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Hourly (3h)</span> <span class="font-bold text-premium-gold">$225</span></li>
                        </ul>
                        <a href="/online-booking"
                            class="block text-center bg-white/10 hover:bg-premium-gold text-white py-4 rounded-xl font-bold transition-all duration-300">Book Now</a>
                    </div>
                </div>

                {{-- 23 Seater --}}
                <div class="glass-card rounded-3xl overflow-hidden group" data-aos="zoom-in" data-aos-delay="400">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=2069&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="23 Seater">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 font-premium">23 Seater Luxury Bus</h3>
                        <p class="text-sm text-gray-500 mb-6">Perfect for large corporate groups and gala events.</p>
                        <ul class="space-y-4 text-gray-600 mb-8">
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Transfer</span> <span class="font-bold text-premium-gold">Enquire</span></li>
                            <li class="flex justify-between items-center bg-white/5 p-3 rounded-xl"><span>Arrival</span> <span class="font-bold text-premium-gold">Enquire</span></li>
                        </ul>
                        <a href="/contact-us"
                            class="block text-center bg-premium-gold text-white py-4 rounded-xl font-bold hover:shadow-[0_0_20px_rgba(197,160,89,0.3)] transition-all duration-300">Contact Us</a>
                    </div>
            </div>
        </div>
    </section>

    {{-- Elite Standards Section (Formerly Why Choose Us Red) --}}
    <section class="py-24 bg-white text-gray-900">
        <div class="w-[85%] mx-auto">
            <div class="text-center mb-20" data-aos="fade-down">
                <h4 class="text-xs font-bold tracking-[0.4em] uppercase mb-4 text-premium-gold opacity-80">Elite Standards</h4>
                <h2 class="text-4xl md:text-5xl font-extrabold font-premium text-gray-900">The <span class="premium-gradient-text">Premium</span> Difference</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                {{-- Card 1 --}}
                <div class="glass-card p-12 text-center rounded-[2rem] hover:bg-white/5 transition-all duration-500" data-aos="flip-up" data-aos-delay="100">
                    <div class="mb-8 flex justify-center text-premium-gold">
                        <div class="w-20 h-20 bg-premium-gold/10 rounded-full flex items-center justify-center border border-premium-gold/20">
                            <i class="fas fa-gem text-3xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-6 uppercase tracking-widest font-premium text-white">Concierge Support</h3>
                    <p class="text-sm text-gray-600 leading-relaxed opacity-80">
                        Our dedicated concierge team is available around the clock to assist you with every detail of your journey.
                    </p>
                </div>

                {{-- Card 2 --}}
                <div class="glass-card p-12 text-center rounded-[2rem] hover:bg-white/5 transition-all duration-500" data-aos="flip-up" data-aos-delay="200">
                    <div class="mb-8 flex justify-center text-premium-gold">
                        <div class="w-20 h-20 bg-premium-gold/10 rounded-full flex items-center justify-center border border-premium-gold/20">
                            <i class="fas fa-crown text-3xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-6 uppercase tracking-widest font-premium text-white">Bespoke Pricing</h3>
                    <p class="text-sm text-gray-600 leading-relaxed opacity-80">
                        We offer fixed, transparent rates that reflect our commitment to premium service without compromise.
                    </p>
                </div>

                {{-- Card 3 --}}
                <div class="glass-card p-12 text-center rounded-[2rem] hover:bg-white/5 transition-all duration-500" data-aos="flip-up" data-aos-delay="300">
                    <div class="mb-8 flex justify-center text-premium-gold">
                        <div class="w-20 h-20 bg-premium-gold/10 rounded-full flex items-center justify-center border border-premium-gold/20">
                            <i class="fas fa-star text-3xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-6 uppercase tracking-widest font-premium text-white">Supreme Satisfaction</h3>
                    <p class="text-sm text-gray-600 leading-relaxed opacity-80">
                        Your comfort and convenience are our absolute priority. Experience the gold standard in transportation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="py-32 bg-gray-50 relative overflow-hidden border-t border-gray-100">
        {{-- Background Decoration --}}
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-premium-gold/5 rounded-full blur-[100px] opacity-20 -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-premium-accent/5 rounded-full blur-[100px] opacity-10 translate-y-1/2 -translate-x-1/2"></div>
        
        <div class="w-[85%] mx-auto relative z-10">
            <div class="text-center mb-24" data-aos="fade-up">
                <div class="inline-block mb-6">
                    <span class="text-xs font-bold tracking-[0.4em] uppercase px-6 py-2 bg-white/5 text-premium-gold rounded-full border border-white/10">Testimonials</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-bold text-gray-900 mb-8 font-premium">
                    Voiced by Our <span class="premium-gradient-text">Elite</span> Clientele
                </h2>
                <p class="text-gray-600 text-xl max-w-2xl mx-auto leading-relaxed opacity-80">
                    Extraordinary journeys shared by those who settle for nothing but the best.
                </p>
            </div>

            {{-- Testimonial Slider --}}
            <div class="relative max-w-6xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-slider overflow-hidden cursor-grab active:cursor-grabbing">
                    <div class="testimonial-track flex transition-transform duration-1000 ease-[cubic-bezier(0.23,1,0.32,1)]">
                        {{-- Testimonial 1 --}}
                        <div class="testimonial-slide w-full flex-shrink-0 px-6">
                            <div class="relative glass-card p-12 md:p-20 rounded-[3rem] border border-white/10 hover:border-premium-gold/30 transition-all duration-700">
                                {{-- Quote Icon --}}
                                <div class="absolute top-12 left-12 text-premium-gold opacity-10">
                                    <i class="fas fa-quote-left text-9xl"></i>
                                </div>
                                
                                {{-- Rating Stars --}}
                                <div class="flex gap-2 mb-10 relative z-10">
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                </div>

                                {{-- Testimonial Text --}}
                                <p class="text-gray-900 text-2xl md:text-4xl leading-snug mb-12 relative z-10 font-light italic">
                                    "Exceptional elegance and punctuality. The Mercedes V-Class exceeded our expectations for the diplomatic visit. Truly the pinnacle of Singapore's luxury transport."
                                </p>

                                {{-- Customer Info --}}
                                <div class="flex items-center gap-6 relative z-10 pt-10 border-t border-black/5">
                                    <div class="relative">
                                        <div class="w-20 h-20 bg-gradient-to-br from-premium-gold to-yellow-600 rounded-2xl flex items-center justify-center text-white font-bold text-3xl shadow-2xl rotate-3">
                                            JL
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-2xl font-premium">Jennifer Lim</h4>
                                        <p class="text-premium-gold/70 text-sm uppercase tracking-widest font-bold">Executive Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Testimonial 2 --}}
                        <div class="testimonial-slide w-full flex-shrink-0 px-6">
                            <div class="relative glass-card p-12 md:p-20 rounded-[3rem] border border-white/10 hover:border-premium-gold/30 transition-all duration-700">
                                {{-- Quote Icon --}}
                                <div class="absolute top-12 left-12 text-premium-accent opacity-10">
                                    <i class="fas fa-quote-left text-9xl"></i>
                                </div>
                                
                                {{-- Rating Stars --}}
                                <div class="flex gap-2 mb-10 relative z-10">
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                </div>

                                {{-- Testimonial Text --}}
                                <p class="text-gray-900 text-2xl md:text-4xl leading-snug mb-12 relative z-10 font-light italic">
                                    "Redefining corporate mobility. The transparency in billing and the sheer quality of the minibus interior makes them our only choice for regional leadership meetings."
                                </p>

                                {{-- Customer Info --}}
                                <div class="flex items-center gap-6 relative z-10 pt-10 border-t border-black/5">
                                    <div class="relative">
                                        <div class="w-20 h-20 bg-gradient-to-br from-premium-accent to-blue-600 rounded-2xl flex items-center justify-center text-white font-bold text-3xl shadow-2xl -rotate-3">
                                            MT
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-2xl font-premium">Michael Tan</h4>
                                        <p class="text-premium-accent/70 text-sm uppercase tracking-widest font-bold">Logistics Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Testimonial 3 --}}
                        <div class="testimonial-slide w-full flex-shrink-0 px-6">
                            <div class="relative glass-card p-12 md:p-20 rounded-[3rem] border border-white/10 hover:border-premium-gold/30 transition-all duration-700">
                                {{-- Quote Icon --}}
                                <div class="absolute top-12 left-12 text-purple-500 opacity-10">
                                    <i class="fas fa-quote-left text-9xl"></i>
                                </div>
                                
                                {{-- Rating Stars --}}
                                <div class="flex gap-2 mb-10 relative z-10">
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                    <i class="fas fa-star text-premium-gold text-2xl"></i>
                                </div>

                                {{-- Testimonial Text --}}
                                <p class="text-gray-900 text-2xl md:text-4xl leading-snug mb-12 relative z-10 font-light italic">
                                    "Flawless and fashionable. The 13-seater was the perfect size for our wedding party. Punctuality and professional drivers made our special day stress-free."
                                </p>

                                {{-- Customer Info --}}
                                <div class="flex items-center gap-6 relative z-10 pt-10 border-t border-black/5">
                                    <div class="relative">
                                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center text-white font-bold text-3xl shadow-2xl rotate-6">
                                            SK
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-2xl font-premium">Sarah Koh</h4>
                                        <p class="text-purple-400/70 text-sm uppercase tracking-widest font-bold">Event Optimizer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Navigation Arrows --}}
                <button class="testimonial-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-10 md:-translate-x-24 w-20 h-20 glass-morphism rounded-full shadow-2xl flex items-center justify-center text-white hover:bg-premium-gold/20 hover:text-premium-gold transition-all duration-500 z-10 border border-white/10 hover:scale-110">
                    <i class="fas fa-arrow-left text-xl"></i>
                </button>
                <button class="testimonial-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-10 md:translate-x-24 w-20 h-20 glass-morphism rounded-full shadow-2xl flex items-center justify-center text-white hover:bg-premium-gold/20 hover:text-premium-gold transition-all duration-500 z-10 border border-white/10 hover:scale-110">
                    <i class="fas fa-arrow-right text-xl"></i>
                </button>

                {{-- Dots Indicator --}}
                <div class="flex justify-center gap-4 mt-20">
                    <button class="testimonial-dot w-16 h-1 rounded-full bg-premium-gold transition-all duration-700" data-index="0"></button>
                    <button class="testimonial-dot w-16 h-1 rounded-full bg-white/10 hover:bg-white/20 transition-all duration-700" data-index="1"></button>
                    <button class="testimonial-dot w-16 h-1 rounded-full bg-white/10 hover:bg-white/20 transition-all duration-700" data-index="2"></button>
                </div>
        </div>

        {{-- Slider JavaScript --}}
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const track = document.querySelector('.testimonial-track');
                const slides = document.querySelectorAll('.testimonial-slide');
                const prevBtn = document.querySelector('.testimonial-prev');
                const nextBtn = document.querySelector('.testimonial-next');
                const dots = document.querySelectorAll('.testimonial-dot');
                let currentIndex = 0;

                const updateSlider = () => {
                    if (!track || slides.length === 0) return;
                    
                    track.style.transform = `translateX(-${currentIndex * 100}%)`;
                    
                    dots.forEach((dot, index) => {
                        if (index === currentIndex) {
                            dot.classList.remove('bg-white/10', 'hover:bg-white/20');
                            dot.classList.add('bg-premium-gold', 'w-24');
                        } else {
                            dot.classList.remove('bg-premium-gold', 'w-24');
                            dot.classList.add('bg-white/10', 'hover:bg-white/20', 'w-16');
                        }
                    });

                    if (slides[currentIndex]) {
                        gsap.from(slides[currentIndex].querySelector('p'), {
                            opacity: 0,
                            y: 20,
                            duration: 0.8,
                            ease: "power2.out"
                        });
                    }
                };

                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        currentIndex = currentIndex === 0 ? slides.length - 1 : currentIndex - 1;
                        updateSlider();
                    });
                }

                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        currentIndex = currentIndex === slides.length - 1 ? 0 : currentIndex + 1;
                        updateSlider();
                    });
                }

                dots.forEach(dot => {
                    dot.addEventListener('click', () => {
                        currentIndex = parseInt(dot.dataset.index);
                        updateSlider();
                    });
                });

                let interval = setInterval(() => {
                    currentIndex = currentIndex === slides.length - 1 ? 0 : currentIndex + 1;
                    updateSlider();
                }, 8000);

                if (track) {
                    track.addEventListener('mouseenter', () => clearInterval(interval));
                    track.addEventListener('mouseleave', () => {
                        interval = setInterval(() => {
                            currentIndex = currentIndex === slides.length - 1 ? 0 : currentIndex + 1;
                            updateSlider();
                        }, 8000);
                    });
                }
            });
        </script>
    </section>

    {{-- FAQ Section --}}
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="w-[85%] mx-auto max-w-4xl relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <span class="text-premium-gold font-bold tracking-[0.4em] text-xs uppercase mb-4 block">Knowledge Base</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-premium">Frequently Asked <span class="premium-gradient-text">Questions</span></h2>
            </div>

            <div class="space-y-6">
                <details class="group glass-card p-8 rounded-3xl cursor-pointer border border-black/5 hover:border-premium-gold/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <summary class="flex justify-between items-center font-bold text-xl list-none text-gray-900 font-premium">
                        <span>How do I book an elite maxi cab?</span>
                        <span class="transition-transform duration-500 group-open:rotate-180 text-premium-gold">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </summary>
                    <div class="text-gray-400 mt-6 leading-relaxed text-lg opacity-80 border-t border-white/5 pt-6">
                        You can reserve your journey via our digital concierge or call our exclusive 24/7 hotline at <a href="tel:+6582826006" class="text-premium-gold hover:underline">+65 8282 6006</a>. We also accommodate requests via WhatsApp and Email for your convenience.
                    </div>
                </details>

                <details class="group glass-card p-8 rounded-3xl cursor-pointer border border-white/5 hover:border-premium-gold/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <summary class="flex justify-between items-center font-bold text-xl list-none text-gray-900 font-premium">
                        <span>What elite payment methods are accepted?</span>
                        <span class="transition-transform duration-500 group-open:rotate-180 text-premium-gold">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </summary>
                    <div class="text-gray-400 mt-6 leading-relaxed text-lg opacity-80 border-t border-white/5 pt-6">
                        We accept a variety of secure payment methods including Cash, PayNow, and all major Credit Cards. For corporate clients, monthly invoicing options are also available upon request.
                    </div>
                </details>

                <details class="group glass-card p-8 rounded-3xl cursor-pointer border border-white/5 hover:border-premium-gold/30 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <summary class="flex justify-between items-center font-bold text-xl list-none text-gray-900 font-premium">
                        <span>Are there any hidden premium surcharges?</span>
                        <span class="transition-transform duration-500 group-open:rotate-180 text-premium-gold">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </summary>
                    <div class="text-gray-400 mt-6 leading-relaxed text-lg opacity-80 border-t border-white/5 pt-6">
                        Our commitment is to absolute transparency. The rate quoted is final and inclusive of all standard ERP, parking, and peak surcharges. We believe luxury should be stress-free.
                    </div>
                </details>
            </div>

            <!-- Call to Action -->
            <div class="mt-24 text-center glass-card p-12 rounded-[3rem] border border-premium-gold/20" data-aos="zoom-in">
                <h3 class="text-3xl font-bold text-gray-900 mb-6 font-premium">Ready for a <span class="premium-gradient-text">Flawless</span> Journey?</h3>
                <p class="text-gray-600 mb-10 text-lg">Join the thousands of satisfied elite travelers who choose us daily.</p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="/online-booking" class="glow-button px-12 py-5 bg-premium-gold text-white font-bold rounded-2xl hover:scale-105 transition-transform duration-300">
                        Book Now
                    </a>
                    <a href="https://wa.me/6582826006" class="px-12 py-5 bg-white/5 backdrop-blur-md border border-white/10 text-white font-bold rounded-2xl hover:bg-white/10 transition-all duration-300 flex items-center gap-3">
                        <i class="fab fa-whatsapp text-2xl"></i> Chat Concierge
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection