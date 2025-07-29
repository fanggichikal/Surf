@php
$quoteContent = $quoteContent ?? (object)[
'title' => null,
'content_body' => null,
];

$aboutContent = $aboutContent ?? (object)[
'title' => null,
'content_body' => null,
'image_path' => null,
];
@endphp

<x-frontlayout>
    {{-- Quote Section --}}
    <section class="py-12 sm:py-16 px-4 sm:px-6">
        <div class="container mx-auto text-center max-w-6xl">
            <h2 class="text-3xl sm:text-3xl md:text-4xl font-bold text-sky-300 mb-4 sm:mb-6">
                {{ $quoteContent->title ?? 'Quote' }}
            </h2>
            <div class="text-base text-justify sm:text-lg md:text-xl text-sky-800 leading-relaxed space-y-4">
                @if ($quoteContent->content_body)
                @foreach (explode("\n\n", $quoteContent->content_body) as $paragraph)
                <p>{{ $paragraph }}</p>
                @endforeach
                @else
                <p class="text-red-600 italic">Content for the 'Quote' section is not yet set in the content management system.</p>
                <p class="text-gray-500">Please add content through the admin panel with 'section_name' "quote".</p>
                @endif

            </div>
            {{-- Experiences & Activities --}}
            <h3 class="text-3xl sm:text-4xl font-bold text-sky-300 mb-8 mt-12 text-center">Our Experiences & Activities</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-10 text-sky-800">
                {{-- Surfing Lessons --}}
                <div class="bg-amber-50 bg-opacity-90 p-6 sm:p-8 rounded-md shadow-md flex flex-col items-center text-center">
                    <p class="text-2xl font-semibold mb-4 text-sky-800">Surfing Lessons</p>
                    <ul class="list-none p-0 text-xl space-y-3 w-full max-w-sm"> {{-- Added w-full max-w-sm to control list width --}}
                        <li class="flex items-center text-lg"> {{-- Removed justify-center for left alignment --}}
                            <svg class="w-5 h-5 mr-2 text-sky-800 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Beginner Class
                        </li>
                        <li class="flex items-center text-lg"> {{-- Removed justify-center for left alignment --}}
                            <svg class="w-5 h-5 mr-2 text-sky-800 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Intermediate Class
                        </li>
                    </ul>
                </div>

                {{-- Cultural Experiences --}}
                <div class="bg-amber-50 bg-opacity-90 p-6 sm:p-8 rounded-md shadow-md flex flex-col items-center text-center"> {{--transition-transform duration-300 hover:scale-105 hover:shadow-2xl--}}
                    <p class="text-2xl font-semibold mb-4 text-sky-800">Cultural Experiences</p>
                    <ul class="list-none p-0 text-xl space-y-3 w-full max-w-sm"> {{-- Added w-full max-w-sm to control list width --}}
                        <li class="flex items-center text-lg"> {{-- Removed justify-center for left alignment --}}
                            <svg class="w-5 h-5 mr-2 text-sky-800 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Traditional Kecak Tour
                        </li>
                        <li class="flex items-center text-lg"> {{-- Removed justify-center for left alignment --}}
                            <svg class="w-5 h-5 mr-2 text-sky-800 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Local Boat Cruise
                        </li>
                        <li class="flex items-center text-lg"> {{-- Removed justify-center for left alignment --}}
                            <svg class="w-5 h-5 mr-2 text-sky-800 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Learn Local Culture & Surf Lifestyle
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Book Lesson --}}
        <div class="flex justify-center mt-8 sm:mt-6">
            <a href="https://wa.me/6282146768463?text=Hello%20Team%20Pal%20Travel,%20I%27d%20like%20to%20book%20a%20surf%20lesson."
                target="_blank"
                class="text-sm bg-sky-300 hover:bg-sky-800 text-sky-800 hover:text-sky-300 font-semibold py-2 px-4 rounded-full shadow-md transition duration-300 ease-in-out flex items-center justify-center">
                <i class="fab fa-whatsapp text-2xl mr-2"></i>
                BOOK A LESSON
            </a>
        </div>
    </section>

    {{--Surf Lesson Section--}}
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-amber-50">
        <div class="container mx-auto text-center max-w-6xl mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-sky-300 mb-6 leading-tight">
                Learn Surf With TeamPal
            </h2>
            <p class="text-lg text-justify sm:text-xl text-sky-800 leading-relaxed text-justify">
                Experience the Joy of Surfing on Our Beautiful Beach! Join us for an unforgettable surf adventure. Our classes are open to all skill levels from beginners to advanced surfers and are designed to give you an authentic taste of surf culture.
                Led by friendly and experienced instructors, you'll not only learn proper surfing techniques but also explore some of the best surf spots this ocean has to offer. Get ready for a fun, energizing, and immersive surfing experience!
                Choose your level below to view our pricing and packages. Come surf with us and feel the stoke!
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
            @foreach($surfLessons as $lesson)
            <a href="{{ route('surf-lessons.show', $lesson->slug) }}"
                class="relative w-full aspect-w-16 aspect-h-9 overflow-hidden rounded-xl shadow-xl group block">
                <img src="{{ $lesson->image_path ? asset('storage/' . $lesson->image_path) : asset('images/default.jpg') }}"
                    alt="{{ $lesson->title }}" class="w-full h-full object-cover object-center transform transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-70"></div>
                {{-- Adjusted text overlay for better wrapping within image width --}}
                <div class="absolute bottom-6 left-6 right-6 text-white p-2"> {{-- Added right-6 for responsive width --}}
                    <p class="text-sm sm:text-base font-semibold uppercase tracking-wide text-sky-300">{{ $lesson->typeclass ?? 'Surf Lesson' }}</p>
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight mt-1 break-words">{{ $lesson->title ?? 'Surf Lesson' }}</h3> {{-- Added break-words --}}
                    <p class="text-base sm:text-lg font-medium text-gray-200 mt-2 break-words">{{ strtoupper($lesson->tagline) }}</p> {{-- Added break-words --}}
                </div>
            </a>
            @endforeach
        </div>

        <div class="container mx-auto text-center max-w-6xl mt-12">
            <p class="text-lg sm:text-xl text-sky-800 leading-relaxed">
                After you book and choose a class you will get surfing necessities except towels and bathers. The only thing you have to do is surf and have fun!
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-8 md:gap-16 lg:gap-24 max-w-6xl mx-auto mt-12 mb-8">
            <div class="flex flex-col items-center text-center">
                <img src="{{asset('images/transportation.png')}}" alt="Transport" class="w-28 h-28 mb-3">
                <span class="text-lg md:text-xl font-medium text-gray-800 uppercase tracking-wide">TRANSPORT</span>
            </div>

            <div class="flex flex-col items-center text-center">
                <img src="{{asset('images/photografer.png')}}" alt="Photography" class="w-28 h-28 mb-3">
                <span class="text-lg md:text-xl font-medium text-gray-800 uppercase tracking-wide">PHOTOGRAPHY</span>
            </div>

            <div class="flex flex-col items-center text-center">
                <img src="{{asset('images/surfboard.png')}}" alt="Board Rental" class="w-28 h-28 mb-3">
                <span class="text-lg md:text-xl font-medium text-gray-800 uppercase tracking-wide">BOARD RENTAL</span>
            </div>
        </div>

        <div class="mt-12 flex justify-center">
            <a href="{{ route('surf-lessons.index') }}"
                class="bg-sky-300 hover:bg-sky-800 text-sky-800 hover:text-sky-300 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 ease-in-out text-lg whitespace-nowrap inline-block transform hover:-translate-y-1">
                VIEW ALL CLASSES
            </a>
        </div>
    </section>

    {{--Surf Trips--}}
    <div class="flex flex-col items-center justify-center min-h-screen px-2 sm:px-4 lg:px-6">
        <h1 class="text-3xl font-bold text-sky-300 mb-6 mt-6 text-center">Teampal Trips and Surf</h1>

        <p class="text-base sm:text-lg text-sky-800 mb-6 leading-relaxed max-w-6xl mx-auto text-justify">
            “Teampal,” from the Balinese word timpal, means a friend.

            That’s who we are. A team, and also a friend.
            A friend to walk with, grow with, and share the ride.

            Indonesia is a beautiful mess of islands scattered like hidden gems across the sea.
            You’ll feel its magic on a road trip: from Bengkulu to Krui, or Medan to those quiet little islands.
            Driving through the mountains of Sumatra feels like more than just travel—it’s a slow, meaningful journey that teaches you about life, nature, and people.

            It’s not just about going places.
            It’s about building memories, learning to understand each other, and growing together even when we don’t always agree.

            And if you’re someone who’s a little romantic and loves raw beauty,
            Sumatra will keep stealing your heart again and again.

            No matter our differences, in the end…
            We’re still friends. We’re still Teampal. </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            @forelse($trips as $trip)
            <a href="{{ route('surftrips.show', $trip->slug) }}"
                class="relative w-full h-64 sm:h-72 lg:h-80 overflow-hidden rounded-lg shadow-lg group block">

                <img src="{{ asset('storage/' . $trip->image) }}"
                    alt="{{ $trip->title }}"
                    class="w-full h-full object-cover object-center transform transition-transform duration-500 group-hover:scale-105">

                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>

                <div class="absolute bottom-4 left-4 text-white p-2">
                    <p class="text-sm font-semibold text-sky-300">{{ $trip->title }}</p>

                    {{-- Menampilkan nama kategori dari relasi --}}
                    <p class="text-xs font-medium text-gray-200 italic">
                        {{ $trip->categoryIsland->name ?? 'No Category' }}
                    </p>

                    <h3 class="text-lg sm:text-xl lg:text-2xl font-bold leading-tight">
                        {{ Str::limit(strip_tags($trip->bodycontent), 40) }}
                    </h3>
                </div>
            </a>
            @empty
            <p class="text-sky-800 text-center col-span-3">No surf trips available.</p>
            @endforelse
        </div>
        <div class="mt-6 sm:mt-10 w-full flex justify-center mb-8 sm:mb-12">
            <a href="{{ route('surftrips.index') }}" class="bg-sky-300 hover:bg-sky-800 text-sky-800 hover:text-sky-300 font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 ease-in-out text-base sm:text-lg whitespace-nowrap inline-block">
                VIEW ALL TRIPS
            </a>
        </div>
    </div>

    {{--Review--}}
    <section class="bg-amber-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-sky-300 mb-6 mt-6 text-center">What Our Guests Say</h2>

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

    {{--About Section--}}
    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col md:flex-row items-stretch gap-12">

                {{-- Text Section --}}
                <div class="w-full md:w-1/2 flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-sky-300 mb-6 leading-tight">
                            {{ $aboutContent->title ?? 'About Us' }}
                        </h2>

                        <div class="text-lg text-justify text-sky-800 leading-relaxed space-y-4 mb-8">
                            @if ($aboutContent->content_body)
                            @foreach (explode("\n\n", $aboutContent->content_body) as $paragraph)
                            <p>{{ $paragraph }}</p>
                            @endforeach
                            @else
                            <p class="text-red-600 italic">Content for the 'About Us' section is not yet set in the content management system.</p>
                            <p class="text-gray-500">Please add content through the admin panel with 'section_name' "about".</p>
                            @endif
                        </div>
                    </div>

                    {{-- Button --}}
                    <div class="text-right mt-auto">
                        <h3 class="text-2xl sm:text-3xl font-bold text-sky-300 mb-4 inline-block">
                            Get In Touch
                        </h3>
                        <div>
                            <a href="https://wa.me/6282146768463?text=Hello%20Team%20Pal%20Travel,%20I%27d%20like%20to%20book%20a%20surf%20lesson."
                                target="_blank"
                                class="inline-flex bg-sky-300 hover:bg-sky-800 text-sky-800 hover:text-sky-300 font-bold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out items-center justify-center">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Image Section --}}
                <div class="w-full md:w-1/2 flex justify-center">
                    @if ($aboutContent->image_path)
                    <img src="{{ asset('storage/' . $aboutContent->image_path) }}"
                        alt="{{ $aboutContent->title ?? 'About Image' }}"
                        class="rounded-lg shadow-xl w-full max-w-md h-full object-cover object-center transform transition duration-500 hover:scale-105 hover:-translate-y-1">
                    @else
                    <div class="bg-gray-200 rounded-lg shadow-md flex items-center justify-center p-8 w-full max-w-md h-full text-gray-500 text-center italic">
                        No image available for this section.
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </section>
</x-frontlayout>