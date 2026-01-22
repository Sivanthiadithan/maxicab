@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-gray-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-50"
            style="background-image: url('https://images.unsplash.com/photo-1499750310159-5b5f8a032906?q=80&w=2070&auto=format&fit=crop');">
        </div>
        <div class="w-[80%] mx-auto relative z-20 text-center" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Blog</h1>
            <p class="text-xl text-gray-300">Latest news and travel tips from Maxi Cabs Singapore</p>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="w-[80%] mx-auto text-center">
            <p class="text-gray-600 text-lg">Coming soon...</p>
        </div>
    </section>
@endsection