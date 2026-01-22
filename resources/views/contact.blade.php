@extends('layouts.app')

@section('content')

    <section class="bg-gray-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-50"
            style="background-image: url('https://images.unsplash.com/photo-1496442226666-8d4a0e62e6e9?q=80&w=2070&auto=format&fit=crop');">
        </div>
        <div class="w-[80%] mx-auto relative z-20 text-center" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-gray-300">Get in touch for bookings and inquiries</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="w-[80%] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">

                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-8 text-gray-900">Contact Information</h2>

                    <div class="space-y-8">
                        <div class="flex items-start gap-6">
                            <div
                                class="w-12 h-12 bg-yellow-100 text-yellow-600 rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                                📍
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Address</h3>
                                <p class="text-gray-600 text-lg">Blk 444 Ang Mo Kio Ave 10<br>#03-1603<br>Singapore 560444
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6">
                            <div
                                class="w-12 h-12 bg-yellow-100 text-yellow-600 rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                                📞
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Phone</h3>
                                <p class="text-gray-600 text-lg">+65 8282 6006<br><span
                                        class="text-sm text-gray-500">(Available 24/7)</span></p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6">
                            <div
                                class="w-12 h-12 bg-yellow-100 text-yellow-600 rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                                📧
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Email</h3>
                                <p class="text-gray-600 text-lg">booking@maxicabssingapore.com.sg</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-10 rounded-2xl shadow-sm" data-aos="fade-left">
                    <h3 class="text-2xl font-bold mb-6">Send us a Message</h3>
                    <form>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-bold mb-2">Name</label>
                            <input type="text"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 transition">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-bold mb-2">Phone</label>
                            <input type="tel"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 transition">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-bold mb-2">Message</label>
                            <textarea rows="4"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 transition"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-4 rounded-lg transition uppercase tracking-wide">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection