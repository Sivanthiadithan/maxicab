@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="bg-gray-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-50"
            style="background-image: url('https://images.unsplash.com/photo-1549420658-94dfd412720d?q=80&w=1974&auto=format&fit=crop');">
        </div>
        <div class="w-[80%] mx-auto relative z-20 text-center" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Fleet</h1>
            <p class="text-xl text-gray-300">Choose the perfect vehicle for your journey</p>
        </div>
    </section>

    {{-- Fleet Grid --}}
    <section class="py-20 bg-white">
        <div class="w-[80%] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                {{-- 6 Seater --}}
                <div id="6-seater"
                    class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1609530939521-08f33f6df278?q=80&w=2070&auto=format&fit=crop"
                            alt="6 Seater Maxi Cab"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-8 bg-white">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-2xl font-bold">6 Seater Maxi Cab</h3>
                            <span class="bg-gray-100 text-gray-800 text-xs font-bold px-3 py-1 rounded-full">Popular</span>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Ideal for small groups and families with luggage. Spacious and comfortable ride for airport
                            transfers and city tours.
                        </p>
                        <ul class="text-sm space-y-3 text-gray-600 mb-8 font-medium">
                            <li class="flex items-center gap-2"><span>👤</span> 6 Passengers</li>
                            <li class="flex items-center gap-2"><span>🧳</span> 4 Large Luggage</li>
                            <li class="flex items-center gap-2"><span>❄️</span> Air Conditioning</li>
                        </ul>
                        <div class="bg-gray-50 p-4 rounded-lg mb-6">
                            <div class="flex justify-between text-sm mb-2"><span>Transfer</span> <span
                                    class="font-bold">$55</span></div>
                            <div class="flex justify-between text-sm mb-2"><span>Arrival</span> <span
                                    class="font-bold">$60</span></div>
                            <div class="flex justify-between text-sm"><span>Hourly (3h)</span> <span
                                    class="font-bold">$165</span></div>
                        </div>
                        <a href="/online-booking"
                            class="block w-full text-center bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-3 rounded-lg transition uppercase tracking-wide text-sm">Book
                            6 Seater</a>
                    </div>
                </div>

                {{-- 7 Seater --}}
                <div id="7-seater"
                    class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=2070&auto=format&fit=crop"
                            alt="7 Seater Mercedes"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-8 bg-white">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-2xl font-bold">7 Seater Mercedes</h3>
                            <span class="bg-black text-yellow-500 text-xs font-bold px-3 py-1 rounded-full">Premium</span>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Travel in style and luxury with our Mercedes V-Class vehicles. Perfect for corporate guests and
                            VIP transfers.
                        </p>
                        <ul class="text-sm space-y-3 text-gray-600 mb-8 font-medium">
                            <li class="flex items-center gap-2"><span>👤</span> 7 Passengers</li>
                            <li class="flex items-center gap-2"><span>🧳</span> 5 Large Luggage</li>
                            <li class="flex items-center gap-2"><span>✨</span> Premium Leather Interior</li>
                        </ul>
                        <div class="bg-gray-50 p-4 rounded-lg mb-6">
                            <div class="flex justify-between text-sm mb-2"><span>Transfer</span> <span
                                    class="font-bold">$70</span></div>
                            <div class="flex justify-between text-sm mb-2"><span>Arrival</span> <span
                                    class="font-bold">$75</span></div>
                            <div class="flex justify-between text-sm"><span>Hourly (3h)</span> <span
                                    class="font-bold">$210</span></div>
                        </div>
                        <a href="/online-booking"
                            class="block w-full text-center bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-3 rounded-lg transition uppercase tracking-wide text-sm">Book
                            Mercedes</a>
                    </div>
                </div>

                {{-- 9/13 Seater --}}
                <div id="9-13-seater"
                    class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1549420658-94dfd412720d?q=80&w=1974&auto=format&fit=crop"
                            alt="13 Seater Minibus"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-8 bg-white">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-2xl font-bold">9/13 Seater Minibus</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Great for large families, events, and excursions. High roof for standing height and ample
                            legroom.
                        </p>
                        <ul class="text-sm space-y-3 text-gray-600 mb-8 font-medium">
                            <li class="flex items-center gap-2"><span>👤</span> 9-13 Passengers</li>
                            <li class="flex items-center gap-2"><span>🧳</span> 9-13 Large Luggage</li>
                            <li class="flex items-center gap-2"><span>🚌</span> High Roof</li>
                        </ul>
                        <div class="bg-gray-50 p-4 rounded-lg mb-6">
                            <div class="flex justify-between text-sm mb-2"><span>Transfer</span> <span
                                    class="font-bold">$75</span></div>
                            <div class="flex justify-between text-sm mb-2"><span>Arrival</span> <span
                                    class="font-bold">$80</span></div>
                            <div class="flex justify-between text-sm"><span>Hourly (3h)</span> <span
                                    class="font-bold">$225</span></div>
                        </div>
                        <a href="/online-booking"
                            class="block w-full text-center bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-3 rounded-lg transition uppercase tracking-wide text-sm">Book
                            Minibus</a>
                    </div>
                </div>

                {{-- 23 Seater --}}
                <div id="23-seater"
                    class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=2069&auto=format&fit=crop"
                            alt="23 Seater Bus"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-8 bg-white">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-2xl font-bold">23 Seater Bus</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            The ultimate solution for large corporate groups, weddings, and tours. Comfortable coach
                            seating.
                        </p>
                        <ul class="text-sm space-y-3 text-gray-600 mb-8 font-medium">
                            <li class="flex items-center gap-2"><span>👤</span> 23 Passengers</li>
                            <li class="flex items-center gap-2"><span>🧳</span> 20+ Luggage</li>
                            <li class="flex items-center gap-2"><span>🎤</span> PA System</li>
                        </ul>
                        <div class="bg-gray-50 p-4 rounded-lg mb-6">
                            <div class="flex justify-between text-sm mb-2"><span>Transfer</span> <span
                                    class="font-bold">Contact Us</span></div>
                            <div class="flex justify-between text-sm mb-2"><span>Arrival</span> <span
                                    class="font-bold">Contact Us</span></div>
                            <div class="flex justify-between text-sm"><span>Hourly</span> <span class="font-bold">Contact
                                    Us</span></div>
                        </div>
                        <a href="/contact-us"
                            class="block w-full text-center bg-gray-900 text-white hover:bg-gray-800 font-bold py-3 rounded-lg transition uppercase tracking-wide text-sm">Enquire
                            Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection