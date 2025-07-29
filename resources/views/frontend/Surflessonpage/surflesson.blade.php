<x-frontlayout>
    <div class="flex flex-col items-center justify-center min-h-screen px-2 sm:px-4 lg:px-6">
        <h1 class="text-2xl font-bold text-sky-800 mb-6 mt-6 text-center">ALL CLASS</h1>
        <p class="text-base text-justify sm:text-lg text-sky-800 mb-6 leading-relaxed max-w-6xl mx-auto text-center">
            Experience the Joy of Surfing on Our Beautiful Beach!
            Join us for an unforgettable surf adventure. Our classes are open to all skill levels from beginners to advanced surfers and are designed to give you an authentic taste of surf culture.

            Led by friendly and experienced instructors, you'll not only learn proper surfing techniques but also explore some of the best surf spots this ocean has to offer. Get ready for a fun, energizing, and immersive surfing experience!

            Choose your level below to view our pricing and packages.
            Come surf with us and feel the stoke! </p>

        <div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 max-w-6xl mx-auto">
            @foreach($surfLessons as $lesson)
            <a href="{{ route('surf-lessons.show', $lesson->slug) }}" class="relative w-full h-64 sm:h-72 lg:h-80 overflow-hidden rounded-lg shadow-lg group block">
                <img src="{{ $lesson->image_path ? asset('storage/' . $lesson->image_path) : asset('images/default.jpg') }}"
                    alt="{{ $lesson->title }}" class="w-full h-full object-cover object-center transform transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-4 left-4 text-white p-2">
                    <p class="text-xs sm:text-sm font-semibold uppercase tracking-wide text-amber-50">{{ $lesson->title ?? 'Surf Lesson' }}</p>
                    <p class="text-xs sm:text-sm font-semibold uppercase tracking-wide text-sky-300">{{ $lesson->typeclass ?? 'Surf Lesson' }}</p>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold leading-tight">{{ strtoupper($lesson->tagline) }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</x-frontlayout>