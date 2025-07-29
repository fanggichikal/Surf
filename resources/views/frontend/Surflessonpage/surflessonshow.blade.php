<x-frontlayout>
    <div class="flex flex-col lg:flex-row bg-white p-4 lg:p-8 max-w-7xl mx-auto items-center lg:items-start mt-32">
        {{-- Image --}}
        <div class="w-full lg:w-1/2 flex justify-center mb-8 lg:mb-0 lg:pr-8">
            @if($surfLesson->image_path)
            <img src="{{ asset('storage/' . $surfLesson->image_path) }}"
                alt="{{ $surfLesson->title }}"
                class="w-full h-auto object-cover rounded-lg shadow-lg max-h-[600px]">
            @else
            <div class="w-full h-auto bg-gray-100 flex items-center justify-center rounded-lg shadow-lg max-h-[600px]">
                <span class="text-xl text-gray-500">🌊 No Image Available</span>
            </div>
            @endif
        </div>

        {{-- Content --}}
        <div class="w-full lg:w-1/2">
            {{-- Title --}}
            <h1 class="text-4xl font-bold text-sky-800 mb-6">
                {{ $surfLesson->title ?? 'Surf Lesson Detail' }}
            </h1>
            {{-- Title --}}
            <h1 class="text-2xl font-bold text-yellow-800 mb-6">
                {{ $surfLesson->typeclass ?? 'Surf Lesson Detail' }}
            </h1>
            {{-- Description --}}
            <p class="text-sky-700 leading-relaxed mb-4 text-justify">
                {{ $surfLesson->description_paragraph_1 ?? 'No description available.' }}
            </p>
            @if($surfLesson->description_paragraph_2)
            <p class="text-sky-700 leading-relaxed mb-4 text-justify">{{ $surfLesson->description_paragraph_2 }}</p>
            @endif
            @if($surfLesson->description_paragraph_3)
            <p class="text-sky-700 leading-relaxed mb-4 text-justify">{{ $surfLesson->description_paragraph_3 }}</p>
            @endif

            <!-- {{-- Lesson Prices --}}
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-sky-800 mb-4">Ask For Lesson Prices??</h2>
            </div> -->
            {{-- Lesson Prices --}}
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-sky-800 mb-4">Lesson Prices</h2>
                @php
                $prices = is_string($surfLesson->lesson_prices)
                ? json_decode($surfLesson->lesson_prices, true)
                : ($surfLesson->lesson_prices ?? []);
                @endphp

                @if (!empty($prices))
                <ul class="space-y-2 text-sky-700">
                    @foreach ($prices as $price)
                    <li class="flex justify-between border-b pb-2">
                        <span class="font-medium">{{ $price['type'] ?? '-' }}</span>
                        <span class="text-sky-900 font-semibold">Rp {{ number_format($price['price'] ?? 0, 0, ',', '.') }}</span>
                    </li>
                    @endforeach
                </ul>
                @else
                <p class="text-gray-600 italic">Price information not available.</p>
                @endif
            </div>

            {{-- Action Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4">
                {{-- Book Lesson --}}
                <a href="https://wa.me/6282146768463?text=Hello%20Team%20Pal%20Travel,%20I%27d%20like%20to%20book%20a%20surf%20lesson."
                    target="_blank"
                    class="flex-1 bg-sky-300 hover:bg-sky-800 text-sky-800 hover:text-sky-300 font-bold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out flex items-center justify-center">
                    BOOK A LESSON
                </a>

                {{-- Have Questions --}}
                <a href="https://wa.me/6282146768463?text=Hello%20Team%20Pal%20Travel,%20I%20have%20a%20question%20about%20surf%20lessons."
                    target="_blank"
                    class="flex-1 bg-sky-800 hover:bg-sky-300 text-sky-300 hover:text-sky-800 font-bold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out flex items-center justify-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.041 0 01-4.757-1.22L3 17l1.268-3.153A9.096 9.096 0 012 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM9 9a1 1 0 000 2h2a1 1 0 100-2H9z" clip-rule="evenodd" />
                    </svg>
                    HAVE QUESTIONS?
                </a>
            </div>
        </div>
    </div>

    {{--ALL CLASS--}}

</x-frontlayout>