@extends('layouts.app')

@section('content')

    <section class="bg-gray-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/60 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1974&auto=format&fit=crop');">
        </div>
        <div class="w-[80%] mx-auto relative z-20 text-center" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Bulky Items / Bicycles</h1>
            <p class="text-xl text-gray-300">Spacious vehicles for your extra luggage</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="w-[80%] mx-auto">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1974&auto=format&fit=crop"
                        alt="Bulky Items" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <h2 class="text-3xl font-bold mb-6 text-gray-900">Transport with Ease</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Traveling with bicycles, surfboards, or excessive luggage? Our maxi cabs offers ample space to
                        accommodate your bulky items without compromising on passenger comfort.
                    </p>
                    <ul class="space-y-4 mt-6">
                        <li class="flex items-center gap-3">
                            <span class="bg-yellow-100 text-yellow-600 p-2 rounded-full">🚲</span>
                            <span class="font-medium">Bicycle Transfer (Up to 2-3 bikes)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="bg-yellow-100 text-yellow-600 p-2 rounded-full">📦</span>
                            <span class="font-medium">Bulky Commercial Goods</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="bg-yellow-100 text-yellow-600 p-2 rounded-full">🧳</span>
                            <span class="font-medium">Excess Luggage Transfer</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="/online-booking"
                            class="bg-yellow-500 hover:bg-yellow-400 text-black px-8 py-3 rounded-lg font-bold transition">Book
                            Large Vehicle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection