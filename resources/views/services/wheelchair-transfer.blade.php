@extends('layouts.app')

@section('content')

    <section class="bg-gray-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/60 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3?q=80&w=2073&auto=format&fit=crop');">
        </div>
        <div class="w-[80%] mx-auto relative z-20 text-center" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Wheelchair Transfer</h1>
            <p class="text-xl text-gray-300">Safe and comfortable transport for all</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="w-[80%] mx-auto">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?q=80&w=2073&auto=format&fit=crop"
                        alt="Wheelchair Transfer" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <h2 class="text-3xl font-bold mb-6 text-gray-900">Accessible Transportation</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        We provide specialized transport services for passengers with mobility challenges. Our vehicles are
                        equipped with hydraulic lifts and safety restraints to ensure a secure journey.
                    </p>
                    <ul class="space-y-4 mt-6">
                        <li class="flex items-center gap-3">
                            <span class="bg-yellow-100 text-yellow-600 p-2 rounded-full">♿</span>
                            <span class="font-medium">Hydraulic Lift Equipped</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="bg-yellow-100 text-yellow-600 p-2 rounded-full">🛡️</span>
                            <span class="font-medium">Safety Restraint Systems</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="bg-yellow-100 text-yellow-600 p-2 rounded-full">🏥</span>
                            <span class="font-medium">Hospital & Medical Appointments</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="/online-booking"
                            class="bg-yellow-500 hover:bg-yellow-400 text-black px-8 py-3 rounded-lg font-bold transition">Book
                            Transport Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection