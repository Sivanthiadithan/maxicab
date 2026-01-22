@extends('layouts.app')

@section('content')

    <section class="bg-gray-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-50"
            style="background-image: url('https://images.unsplash.com/photo-1570125909232-eb263c188f7e?q=80&w=2071&auto=format&fit=crop');">
        </div>
        <div class="w-[80%] mx-auto relative z-20 text-center" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Services</h1>
            <p class="text-xl text-gray-300">Comprehensive transport solutions for every need</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="w-[80%] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                {{-- Service 1 --}}
                <div class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?q=80&w=2074&auto=format&fit=crop"
                            alt="Airport Transfer"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                    </div>
                    <div class="p-8 bg-white">
                        <h3 class="text-2xl font-bold mb-3">Airport Transfer</h3>
                        <p class="text-gray-600 mb-6">Seamless airport pickups and drop-offs. We track your flight to ensure
                            timely service.</p>
                        <a href="/services/airport-transfer"
                            class="text-yellow-600 font-bold hover:text-yellow-500 uppercase tracking-wide text-sm">Read
                            More -></a>
                    </div>
                </div>

                {{-- Service 2 --}}
                <div class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1565514020176-892ebda81c38?q=80&w=2073&auto=format&fit=crop"
                            alt="Hourly Booking"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                    </div>
                    <div class="p-8 bg-white">
                        <h3 class="text-2xl font-bold mb-3">Hourly Booking</h3>
                        <p class="text-gray-600 mb-6">Flexible hourly disposal for city tours, meetings, and events. Your
                            personal chauffeur.</p>
                        <a href="/services/hourly-booking"
                            class="text-yellow-600 font-bold hover:text-yellow-500 uppercase tracking-wide text-sm">Read
                            More -></a>
                    </div>
                </div>

                {{-- Service 3 --}}
                <div class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?q=80&w=2073&auto=format&fit=crop"
                            class="w-full h-full object-cover transition duration-300 hover:scale-105"
                            alt="Wheelchair Transfer">
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold mb-4">Wheelchair Transfer</h3>
                        <p class="text-gray-600 mb-6 flex-1">
                            Specialized vehicles equipped with hydraulic lifts or ramps for safe and comfortable wheelchair
                            transport.
                        </p>
                        <a href="/contact-us"
                            class="block text-center bg-gray-900 text-white py-3 rounded-lg font-bold transition mt-auto">Enquire
                            Now</a>
                    </div>
                </div>

                {{-- Service 4 --}}
                <div
                    class="flex flex-col h-full bg-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1974&auto=format&fit=crop"
                            class="w-full h-full object-cover transition duration-300 hover:scale-105" alt="Bulky Items">
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold mb-4">Bulky Items / Bicycles</h3>
                        <p class="text-gray-600 mb-6 flex-1">
                            Need to move large items or bicycles? Our spacious maxi cabs can accommodate your bulky
                            equipment with ease.
                        </p>
                        <a href="/contact-us"
                            class="block text-center bg-gray-900 text-white py-3 rounded-lg font-bold transition mt-auto">Enquire
                            Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection