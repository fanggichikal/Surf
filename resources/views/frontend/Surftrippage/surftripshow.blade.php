<x-frontlayout>
    <div class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
            <h2 class="text-2xl text-center sm:text-3xl font-bold text-sky-800 mt-4">
                Place Destination
            </h2>
            <h1 class="text-xl text-center sm:text-3xl font-extrabold drop-shadow-lg leading-tight mb-4">
                @if ($trip->categoryIsland) {{-- PENTING: Tambahkan pengecekan ini --}}
                <a href="{{ route('surftrips.byCategory', $trip->categoryIsland->slug) }}"
                    class="text-sky-300 hover:text-sky-800 transition duration-200 underline-offset-4">
                    {{ $trip->categoryIsland->name }} {{-- PENTING: Gunakan categoryIsland --}}
                </a>
                @else
                <span class="text-gray-500">Uncategorized</span>
                @endif
            </h1>

            <!-- Header Section with Image and Title -->
            <div class="relative">
                @if ($trip->image)
                <img src="{{ asset('storage/' . $trip->image) }}"
                    alt="{{ $trip->title }}"
                    class="w-full h-96 object-cover object-center rounded-t-xl">
                <!-- Overlay untuk efek visual -->
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                @else
                <!-- Placeholder jika tidak ada gambar -->
                <div class="w-full h-96 bg-gray-300 flex items-center justify-center rounded-t-xl">
                    <span class="text-gray-500 text-xl">No Image Available</span>
                </div>
                @endif

                <div class="absolute bottom-0 left-0 p-8">
                    <h1 class="text-4xl sm:text-5xl font-extrabold text-sky-300 drop-shadow-lg leading-tight">
                        {{ $trip->title }}
                    </h1>
                </div>
            </div>

            <!-- Body Content Section -->
            <div class="p-8 lg:p-10">
                <div class="prose prose-lg max-w-none text-sky-800 leading-relaxed text-lg text-justify">
                    {!! nl2br(e($trip->bodycontent)) !!}
                </div>
            </div>

            <!-- Call to Action Section -->
            <div class="bg-sky-100 p-8 lg:p-10 border-t border-gray-200 text-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-sky-800 mb-6">
                    Ready for an Exciting Adventure with Us?
                </h2>
                <p class="text-sky-700 text-lg mb-8">
                    Don't miss the chance to experience the best waves and unforgettable experiences. Book your trip now!
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col items-center gap-6">
                    <div class="flex flex-col sm:flex-row gap-6 justify-center w-full">
                        {{-- Book A Trip --}}
                        <a href="https://wa.me/6282146768463?text=Hello%20Team%20Pal%20Travel,%20I%27d%20like%20to%20book%20a%20surf%20trip%20to%20{{ urlencode($trip->title) }}."
                            target="_blank"
                            class="flex-1 sm:flex-none bg-sky-800 hover:bg-amber-50 text-amber-50 hover:text-sky-800 font-extrabold py-2 px-4 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105
                            flex items-center justify-center text-lg uppercase tracking-wide">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            BOOK A TRIP
                        </a>

                        {{-- Have Questions --}}
                        <a href="https://wa.me/6282146768463?text=Hello%20Team%20Pal%20Travel,%20I%20have%20a%20question%20about%20the%20{{ urlencode($trip->title) }}%20surf%20trip."
                            target="_blank"
                            class="flex-1 sm:flex-none bg-sky-800 hover:bg-amber-50 text-amber-50 hover:text-sky-800 font-extrabold py-2 px-4 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 
                            flex items-center justify-center text-lg uppercase tracking-wide space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.041 0 01-4.757-1.22L3 17l1.268-3.153A9.096 9.096 0 012 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM9 9a1 1 0 000 2h2a1 1 0 100-2H9z" clip-rule="evenodd" />
                            </svg>
                            Have Questions
                        </a>
                    </div>

                    <!-- {{-- Review The Trips --}}
                    <div class="mt-2 flex justify-center w-full">
                        <a href="{{ route('frontend.reviewpage.create') }}"
                            class="bg-sky-800 hover:bg-amber-50 text-amber-50 hover:text-sky-800 font-extrabold py-2 px-6 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105
                            flex items-center justify-center text-lg uppercase tracking-wide">
                            Review The Trips
                        </a>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
</x-frontlayout>