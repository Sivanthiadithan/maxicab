<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maxi Cabs Singapore - Premium Booking</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/premium-ui.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3, h4, .font-premium {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="bg-premium text-primary antialiased flex flex-col min-h-screen overflow-x-hidden">

    {{-- Top Bar --}}
    <div class="bg-white border-b border-gray-100 text-gray-500 py-2 text-xs z-50 relative backdrop-blur-md">
        <div class="w-[85%] mx-auto flex flex-col md:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-6">
                <a href="tel:+6582826006" class="hover:text-gray-200 transition flex items-center gap-2">
                    <i class="fas fa-phone-alt"></i> +65 8282 6006
                </a>
                <a href="mailto:booking@maxicabssingapore.com.sg"
                    class="hidden md:flex hover:text-gray-200 transition items-center gap-2">
                    <i class="fas fa-envelope"></i> booking@maxicabssingapore.com.sg
                </a>
            </div>
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    {{-- Header --}}
    <header class="glass-morphism sticky top-0 z-50 shadow-sm border-b border-gray-100">
        <div class="w-[90%] xl:w-[85%] mx-auto py-4 flex justify-between items-center relative">

            {{-- Logo --}}
            <a href="/" class="flex flex-col z-50 relative group">
                <span
                    class="text-2xl font-bold tracking-tighter text-white uppercase group-hover:text-yellow-600 transition">Maxicabs
                    Singapore</span>
                <span
                    class="text-[10px] tracking-[0.2em] text-gray-400 uppercase group-hover:text-white transition">Unmatched
                    Travel Experience</span>
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden lg:flex font-bold text-[13px] tracking-wide items-center gap-1 uppercase">
                <a href="/" class="hover:text-yellow-500 transition px-3 py-2">Home</a>
                <a href="/about-us" class="hover:text-yellow-500 transition px-3 py-2">About Us</a>

                {{-- Fleet Dropdown --}}
                <div class="relative group">
                    <a href="#" class="hover:text-yellow-500 transition flex items-center gap-1 px-3 py-4">
                        Fleet of Vehicles
                        <i class="fas fa-caret-down text-xs transition-transform group-hover:rotate-180"></i>
                    </a>
                    <div
                        class="absolute left-0 top-full w-64 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50">
                        <div class="bg-white text-gray-900 shadow-xl border-t-4 border-yellow-500">
                            <a href="/fleet#6-seater"
                                class="block px-5 py-3 hover:bg-gray-100 transition border-b border-gray-100 text-sm font-semibold">6
                                Seater Maxicab</a>
                            <a href="/fleet#7-seater"
                                class="block px-5 py-3 hover:bg-gray-100 transition border-b border-gray-100 text-sm font-semibold">7
                                Seater Maxicab</a>
                            <a href="/fleet#9-13-seater"
                                class="block px-5 py-3 hover:bg-gray-100 transition border-b border-gray-100 text-sm font-semibold">9/13
                                Seater Minibus</a>
                            <a href="/fleet#23-seater"
                                class="block px-5 py-3 hover:bg-gray-100 transition border-b border-gray-100 text-sm font-semibold">23
                                Seater Bus</a>
                        </div>
                    </div>
                </div>

                {{-- Services Dropdown --}}
                <div class="relative group">
                    <a href="#" class="hover:text-yellow-500 transition flex items-center gap-1 px-3 py-4">
                        Our Services
                        <i class="fas fa-caret-down text-xs transition-transform group-hover:rotate-180"></i>
                    </a>
                    <div
                        class="absolute left-0 top-full w-72 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50">
                        <div class="bg-white text-gray-900 shadow-xl border-t-4 border-yellow-500">
                            <a href="/services/airport-transfer"
                                class="block px-5 py-3 hover:bg-gray-100 transition border-b border-gray-100 text-sm font-semibold">Airport
                                Transfer</a>
                            <a href="/services/hourly-booking"
                                class="block px-5 py-3 hover:bg-gray-100 transition border-b border-gray-100 text-sm font-semibold">Hourly
                                Booking</a>
                            <a href="/services/wheelchair-transfer"
                                class="block px-5 py-3 hover:bg-gray-100 transition border-b border-gray-100 text-sm font-semibold">Wheelchair
                                Transfer</a>
                            <a href="/services/bulky-items"
                                class="block px-5 py-3 hover:bg-gray-100 transition border-b border-gray-100 text-sm font-semibold">Bulky
                                Items / Bicycle</a>
                        </div>
                    </div>
                </div>

                <a href="/online-booking" class="hover:text-yellow-500 transition px-3 py-2">Online Booking</a>
                <a href="/blog" class="hover:text-yellow-500 transition px-3 py-2">Blog</a>
                <a href="/contact-us" class="hover:text-yellow-500 transition px-3 py-2">Contact Us</a>
            </nav>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn"
                class="lg:hidden text-gray-900 focus:outline-none z-50 relative cursor-pointer text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        {{-- Mobile Menu Backdrop --}}
        <div id="mobile-menu-backdrop"
            class="fixed inset-0 bg-black/80 z-40 hidden transition-opacity duration-300 opacity-0"></div>

        {{-- Mobile Menu Sidebar --}}
        <div id="mobile-menu-drawer"
            class="fixed inset-y-0 left-0 h-screen w-[85%] max-w-[320px] bg-[#1a1a1a] z-50 transform -translate-x-full transition-transform duration-300 shadow-2xl flex flex-col font-sans">

            {{-- Drawer Header --}}
            <div class="p-6 border-b border-gray-800 flex justify-between items-center bg-[#111] shrink-0">
                <span class="text-lg font-bold text-white uppercase tracking-tighter">Maxicabs Singapore</span>
                <button id="mobile-menu-close"
                    class="text-gray-400 hover:text-white transition focus:outline-none text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Drawer Links --}}
            <div class="flex-1 overflow-y-auto py-2 min-h-0">
                <nav class="flex flex-col text-gray-300 text-sm font-medium uppercase tracking-wide">
                    <a href="/"
                        class="px-6 py-4 border-b border-gray-800 hover:bg-gray-800 hover:text-yellow-500 transition-all">Home</a>
                    <a href="/about-us"
                        class="px-6 py-4 border-b border-gray-800 hover:bg-gray-800 hover:text-yellow-500 transition-all">About
                        Us</a>

                    {{-- Fleet Accordion --}}
                    <div class="border-b border-gray-800">
                        <button id="mobile-fleet-btn"
                            class="w-full text-left px-6 py-4 hover:bg-gray-800 hover:text-yellow-500 transition-all flex items-center justify-between group focus:outline-none uppercase">
                            Fleet of Vehicles
                            <i id="mobile-fleet-icon"
                                class="fas fa-chevron-down text-xs transition-transform duration-300 text-gray-500 group-hover:text-yellow-500"></i>
                        </button>
                        <div id="mobile-fleet-menu"
                            class="max-h-0 overflow-hidden bg-[#0a0a0a] transition-all duration-300 text-xs normal-case font-normal">
                            <a href="/fleet#6-seater"
                                class="block pl-10 pr-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800 transition">6
                                Seater Maxicab</a>
                            <a href="/fleet#7-seater"
                                class="block pl-10 pr-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800 transition">7
                                Seater Mercedes</a>
                            <a href="/fleet#9-13-seater"
                                class="block pl-10 pr-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800 transition">9/13
                                Seater Minibus</a>
                            <a href="/fleet#23-seater"
                                class="block pl-10 pr-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800 transition">23
                                Seater Bus</a>
                        </div>
                    </div>

                    {{-- Services Accordion --}}
                    <div class="border-b border-gray-800">
                        <button id="mobile-services-btn"
                            class="w-full text-left px-6 py-4 hover:bg-gray-800 hover:text-yellow-500 transition-all flex items-center justify-between group focus:outline-none uppercase">
                            Our Services
                            <i id="mobile-services-icon"
                                class="fas fa-chevron-down text-xs transition-transform duration-300 text-gray-500 group-hover:text-yellow-500"></i>
                        </button>
                        <div id="mobile-services-menu"
                            class="max-h-0 overflow-hidden bg-[#0a0a0a] transition-all duration-300 text-xs normal-case font-normal">
                            <a href="/services/airport-transfer"
                                class="block pl-10 pr-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800 transition">Airport
                                Transfer</a>
                            <a href="/services/hourly-booking"
                                class="block pl-10 pr-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800 transition">Hourly
                                Booking</a>
                            <a href="/services/wheelchair-transfer"
                                class="block pl-10 pr-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800 transition">Wheelchair
                                Transfer</a>
                            <a href="/services/bulky-items"
                                class="block pl-10 pr-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800 transition">Bulky
                                Items</a>
                        </div>
                    </div>

                    <a href="/online-booking"
                        class="px-6 py-4 border-b border-gray-800 hover:bg-gray-800 hover:text-yellow-500 transition-all">Online
                        Booking</a>
                    <a href="/blog"
                        class="px-6 py-4 border-b border-gray-800 hover:bg-gray-800 hover:text-yellow-500 transition-all">Blog</a>
                    <a href="/contact-us"
                        class="px-6 py-4 border-b border-gray-800 hover:bg-gray-800 hover:text-yellow-500 transition-all">Contact
                        Us</a>
                </nav>
            </div>

            {{-- Drawer Footer --}}
            <div class="p-6 bg-[#111] border-t border-gray-800">
                <a href="tel:+6582826006"
                    class="flex items-center justify-center gap-3 bg-yellow-600 text-white py-3 rounded-lg font-bold hover:bg-yellow-500 transition shadow-lg">
                    <i class="fas fa-phone-alt"></i> +65 8282 6006
                </a>
            </div>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white text-gray-600 py-16 border-t border-gray-100">
        <div class="w-[85%] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                {{-- Logo and Tagline --}}
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-[#8B0000] rounded-lg flex items-center justify-center">
                            <i class="fas fa-taxi text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-[#8B0000] font-bold text-xl uppercase tracking-tight">Maxicabs Singapore</h3>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Unmatched Travel Experience</p>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Maxicabs Singapore save your time and give you comfort.
                    </p>
                </div>

                {{-- Fleet of Vehicles --}}
                <div>
                    <h4 class="text-[#8B0000] font-bold text-lg mb-6">Fleet of Vehicles</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/fleet#6-seater" class="text-gray-600 hover:text-[#8B0000] transition-colors">6 Seater Maxicab Singapore</a></li>
                        <li><a href="/fleet#7-seater" class="text-gray-600 hover:text-[#8B0000] transition-colors">7 Seater Maxicab Singapore</a></li>
                        <li><a href="/fleet#9-13-seater" class="text-gray-600 hover:text-[#8B0000] transition-colors">9 / 13 Seater Minibus Singapore</a></li>
                        <li><a href="/fleet#23-seater" class="text-gray-600 hover:text-[#8B0000] transition-colors">23 Seater Bus Singapore</a></li>
                    </ul>
                </div>

                {{-- Useful Links --}}
                <div>
                    <h4 class="text-[#8B0000] font-bold text-lg mb-6">Useful Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/" class="text-gray-600 hover:text-[#8B0000] transition-colors">Privacy Policy</a></li>
                        <li><a href="/terms-of-use" class="text-gray-600 hover:text-[#8B0000] transition-colors">Terms & Condition</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="text-[#8B0000] font-bold text-lg mb-6">Contact</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                            <div class="w-5 h-5 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fas fa-map-marker-alt text-[#8B0000]"></i>
                            </div>
                            <span class="text-gray-600">Blk 444 Ang Mo Kio Ave 10, #03-1603, Singapore 560444</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-[#8B0000]"></i>
                            </div>
                            <a href="mailto:booking@maxicabssingapore.com.sg" class="text-gray-600 hover:text-[#8B0000] transition-colors">booking@maxicabssingapore.com.sg</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-[#8B0000]"></i>
                            </div>
                            <a href="tel:+6582826006" class="text-gray-600 hover:text-[#8B0000] transition-colors">+65 8282 6006</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-5 h-5 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fas fa-clock text-[#8B0000]"></i>
                            </div>
                            <span class="text-gray-600">Monday - Sunday 0000hrs-2359hrs</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="border-t border-gray-300 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-600 text-sm">Copyright Maxicabs Singapore © {{ date('Y') }}. All Rights Reserved</p>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 bg-[#8B0000] rounded-full flex items-center justify-center text-white hover:bg-[#6B0000] transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-[#8B0000] rounded-full flex items-center justify-center text-white hover:bg-[#6B0000] transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-[#8B0000] rounded-full flex items-center justify-center text-white hover:bg-[#6B0000] transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Floating Action Buttons --}}
    {{-- WhatsApp Button --}}
    <a href="https://wa.me/6582826006" target="_blank" id="whatsapp-btn"
        class="fixed right-6 bottom-24 w-14 h-14 bg-[#25D366] text-white rounded-full shadow-lg flex items-center justify-center text-2xl hover:bg-[#20BA5A] transition-all duration-300 z-40 opacity-0 invisible transform translate-y-4">
        <i class="fab fa-whatsapp"></i>
    </a>

    {{-- Share Button --}}
    <button id="share-btn"
        class="fixed right-6 bottom-[152px] w-14 h-14 bg-premium-gold text-white rounded-full shadow-lg flex items-center justify-center text-xl hover:scale-110 transition-all duration-300 z-40 opacity-0 invisible transform translate-y-4">
        <i class="fas fa-share-alt"></i>
    </button>

    {{-- Go to Top Button --}}
    <button id="scroll-to-top"
        class="fixed right-6 bottom-6 w-14 h-14 bg-gray-900 text-white rounded-full shadow-lg flex items-center justify-center text-xl hover:bg-yellow-600 transition-all duration-300 z-40 opacity-0 invisible transform translate-y-4">
        <i class="fas fa-arrow-up"></i>
    </button>

    {{-- Share Toast --}}
    <div id="share-toast" class="fixed top-10 left-1/2 -translate-x-1/2 z-[60] opacity-0 invisible transform translate-y-4 transition-all duration-500">
        <div class="bg-gray-900/90 backdrop-blur-md text-white px-6 py-3 rounded-2xl shadow-2xl flex items-center gap-3 border border-white/10">
            <i class="fas fa-check-circle text-premium-gold"></i>
            <span class="text-sm font-semibold tracking-wide">Link Copied to Clipboard</span>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Floating Buttons - Show/Hide on Scroll
        const whatsappBtn = document.getElementById('whatsapp-btn');
        const scrollToTopBtn = document.getElementById('scroll-to-top');
        const shareBtn = document.getElementById('share-btn');

        window.addEventListener('scroll', function() {
            // Show buttons after scrolling 600px (approximately after 2nd section)
            if (window.scrollY > 600) {
                whatsappBtn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
                whatsappBtn.classList.add('opacity-100', 'visible', 'translate-y-0');
                scrollToTopBtn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
                scrollToTopBtn.classList.add('opacity-100', 'visible', 'translate-y-0');
                shareBtn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
                shareBtn.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                whatsappBtn.classList.add('opacity-0', 'invisible', 'translate-y-4');
                whatsappBtn.classList.remove('opacity-100', 'visible', 'translate-y-0');
                scrollToTopBtn.classList.add('opacity-0', 'invisible', 'translate-y-4');
                scrollToTopBtn.classList.remove('opacity-100', 'visible', 'translate-y-0');
                shareBtn.classList.add('opacity-0', 'invisible', 'translate-y-4');
                shareBtn.classList.remove('opacity-100', 'visible', 'translate-y-0');
            }
        });

        // Share functionality
        shareBtn.addEventListener('click', async () => {
            const shareData = {
                title: 'Maxi Cabs Singapore',
                text: 'Premium Maxi Cab & Minibus Booking Service in Singapore',
                url: window.location.href
            };

            if (navigator.share) {
                try {
                    await navigator.share(shareData);
                } catch (err) {
                    console.log('User cancelled or error sharing:', err);
                }
            } else {
                // Fallback: Copy to clipboard
                try {
                    await navigator.clipboard.writeText(window.location.href);
                    showShareToast();
                } catch (err) {
                    console.error('Failed to copy: ', err);
                }
            }
        });

        function showShareToast() {
            const toast = document.getElementById('share-toast');
            toast.classList.remove('opacity-0', 'invisible', 'translate-y-4');
            toast.classList.add('opacity-100', 'visible', 'translate-y-0');
            setTimeout(() => {
                toast.classList.add('opacity-0', 'invisible', 'translate-y-4');
                toast.classList.remove('opacity-100', 'visible', 'translate-y-0');
            }, 3000);
        }

        // Scroll to top functionality
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>