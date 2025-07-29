<!-- Tambahkan ini jika Alpine belum tersedia -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<x-frontlayout>
    <section class="bg-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-sky-800 mb-8">What Our Guests Say</h2>

            @if($reviews->count())
            <div
                x-data="{
                    activeSlide: 0,
                    reviews: {{ $reviews->toJson() }},
                    totalSlides: {{ $reviews->count() }}
                }"
                class="relative">

                {{-- Carousel Content --}}
                <div class="overflow-hidden">
                    <template x-for="(review, index) in reviews" :key="index">
                        <div x-show="activeSlide === index" x-transition
                            class="text-center px-6">
                            <div class="flex justify-center mb-3">
                                <template x-for="i in 5">
                                    <svg :class="{ 'text-yellow-400': i <= review.rating, 'text-gray-300': i > review.rating }"
                                        class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.287 3.975a1 1 0 00.95.69h4.184c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.974c.3.922-.755 1.688-1.54 1.118l-3.388-2.46a1 1 0 00-1.176 0l-3.388 2.46c-.784.57-1.838-.196-1.539-1.118l1.287-3.974a1 1 0 00-.364-1.118l-3.388-2.46c-.783-.57-.38-1.81.588-1.81h4.183a1 1 0 00.951-.69l1.287-3.975z" />
                                    </svg>
                                </template>
                            </div>
                            <blockquote class="text-lg italic text-gray-700 leading-relaxed">
                                <span x-text="review.message"></span>
                            </blockquote>
                            <p class="mt-4 text-sky-800 font-bold" x-text="review.name"></p>
                        </div>
                    </template>
                </div>

                {{-- Dots --}}
                <div class="mt-6 flex justify-center space-x-2">
                    <template x-for="(review, index) in reviews" :key="index">
                        <button @click="activeSlide = index"
                            :class="{ 'bg-yellow-400': activeSlide === index, 'bg-gray-300': activeSlide !== index }"
                            class="w-3 h-3 rounded-full transition-colors duration-300">
                        </button>
                    </template>
                </div>
            </div>
            @else
            <p class="text-gray-500">No reviews yet.</p>
            @endif
        </div>
    </section>
</x-frontlayout>