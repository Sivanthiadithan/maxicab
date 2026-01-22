@extends('layouts.app')

@section('content')

    {{-- Page Header --}}
    <section class="bg-gray-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-50"
            style="background-image: url('https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?q=80&w=2070&auto=format&fit=crop');">
        </div>
        <div class="w-[80%] mx-auto relative z-20 text-center" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
            <p class="text-xl text-gray-300">Your trusted transportation partner in Singapore</p>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="py-20 bg-white">
        <div class="w-[80%] mx-auto">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?q=80&w=2070&auto=format&fit=crop"
                        alt="About Maxi Cabs" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <h2 class="text-3xl font-bold mb-6 text-gray-900">Who We Are</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Maxi Cabs Singapore is a premier limousine and large taxi booking service established to provide
                        reliable and comfortable transportation for groups, families, and corporate clients.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        With a fleet of well-maintained 6, 7, 9, 13, and 23 seater vehicles, we ensure that your journey
                        is smooth, safe, and enjoyable. Our professional drivers are experienced and knowledgeable about
                        Singapore's routes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Mission/Values --}}
    <section class="py-20 bg-gray-50">
        <div class="w-[80%] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold mb-2">Reliability</h3>
                    <p class="text-gray-600">We take pride in our punctuality and commitment to your schedule.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm text-center" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-4xl mb-4">💎</div>
                    <h3 class="text-xl font-bold mb-2">Quality</h3>
                    <p class="text-gray-600">Premium vehicles and professional service at every touchpoint.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm text-center" data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-4xl mb-4">😊</div>
                    <h3 class="text-xl font-bold mb-2">Customer First</h3>
                    <p class="text-gray-600">Your satisfaction and comfort are our top priorities.</p>
                </div>
            </div>
        </div>
    </section>

@endsection